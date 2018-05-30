<?php

require_once File::buildPath(array('model', 'model.php'));

class ModelCRUD extends Model {

    static protected $tableName;
    static protected $className;
    static protected $shema = NULL;
    static protected $primaryKey;

    public static function getTableName() {
        return static::$tableName;
    }

    public static function getClassName() {
        return static::$className;
    }

    public static function getShema() {
        return static::$shema;
    }

    public static function getPrimaryKey() {
        return static::$primaryKey;
    }

    public static function updateShema() {
        $query = Bdd::$pdo->prepare('DESCRIBE ' . static::getTableName());
        $query->execute();
        static::$shema = $query->fetchAll(PDO::FETCH_COLUMN | PDO::FETCH_GROUP);
    }

    public static function updatePrimaryKey() {
        $sql = 'SHOW KEYS FROM ' . static::getTableName() . ' WHERE Key_name = :primary';
        $values = array(
            'primary' => 'PRIMARY'
        );
        $query = Bdd::$pdo->prepare($sql);
        $query->execute($values);
        static::$primaryKey = $query->fetchAll()[0]['Column_name'];
    }

    public static function registerModel() {
        static::updateShema();
        static::updatePrimaryKey();
    }

    public function __construct() {
        //if (isset(static::$shema)) {
        static::registerModel();
        //}
    }

    public function create() {
        static::registerModel();
        $sqlInsert = 'INSERT INTO ' . static::getTableName() . '(';
        $sqlValues = ' VALUES (';
        $shema = static::getShema();
        $values = array();
        $primaryKeyName = static::getPrimaryKey();
        foreach ($this->data as $columnName => $columnValue) {
            // Don't add column wich aren't in the database or are part of the key
            if (isset($shema[$columnName]) && $columnName != $primaryKeyName) {
                $sqlInsert = $sqlInsert . $columnName . ', ';
                $sqlValues = $sqlValues . ':' . $columnName . ', ';
                $values[$columnName] = $columnValue;
            }
        }

        $sqlInsert = substr($sqlInsert, 0, -2) . ')';
        $sqlValues = substr($sqlValues, 0, -2) . ')';


        $sql = $sqlInsert . $sqlValues;
        $query = Bdd::$pdo->prepare($sql);

        $query->execute($values);
        //$this->$primaryKeyName = Bdd::$pdo->lastInsertId();

        return Bdd::$pdo->lastInsertId($primaryKeyName);
    }

    public function createMultiple($foreignKeyName = NULL, $foreignKeyValue = NULL) {
        static::registerModel();
        $shema = static::getShema();
        if (isset($foreignKeyName)) {
            $values = array(
                $foreignKeyName => $foreignKeyValue
            );
        } else {
            $values = array();
        }


        $primaryKeyName = static::getPrimaryKey();

        foreach ($this->data as $columnName => $columnValue) {
            $numObject = 0;
            if (isset(static::$shema[substr($columnName, 0, -1)])) {
                $numObject = substr($columnName, -1);
                $objectToInsert[$numObject][substr($columnName, 0, -1)] = $columnValue;
            }
        }

        foreach ($objectToInsert as $object) {

            $sqlInsert = 'INSERT INTO ' . static::getTableName() . '(';
            $sqlValues = ' VALUES (';
            if (isset($foreignKeyName)) {
                $sqlInsert = $sqlInsert . $foreignKeyName . ', ';
                $sqlValues = $sqlValues . ':' . $foreignKeyName . ', ';
            }

            foreach ($object as $columnName => $columnValue) {
                // Don't add column wich aren't in the database or are part of the key
                if (isset(static::$shema[$columnName]) && $columnName != $primaryKeyName) {
                    $sqlInsert = $sqlInsert . $columnName . ', ';
                    $sqlValues = $sqlValues . ':' . $columnName . ', ';
                    $values[$columnName] = $columnValue;
                }
            }
            $sqlInsert = substr($sqlInsert, 0, -2) . ')';
            $sqlValues = substr($sqlValues, 0, -2) . ')';
            $sql = $sqlInsert . $sqlValues;
            $query = Bdd::$pdo->prepare($sql);
            $query->execute($values);
        }
    }

    // Read
    // where is a SQL string, for instance 'login = :login AND password = :pass'
    // values is a dictionnary of column name => value
    public static function read($where = '', $values = array()) {
        $sql = 'SELECT * FROM ' . static::getTableName();
        if ($where != '') {
            $sql = $sql . ' WHERE ' . $where;
        }

        $query = Bdd::$pdo->prepare($sql);
        $query->execute($values);
        return $query->fetchAll(PDO::FETCH_CLASS, static::getClassName());
    }

    // Read the first database entry mathcing condition. If none was found return false
    public static function readOrFalse($where, $values) {
        $result = self::read($where, $values);
        if (empty($result)) {
            return false;
        }
        return $result;
    }

    public function update($foreignKeyName = NULL, $foreignKeyValue = NULL) {
        static::registerModel();
        $primaryKeyName = static::getPrimaryKey();
        if (isset($this->$primaryKeyName)) {

            $values = array(
                'primaryKey' => $this->$primaryKeyName
            );

            $sqlSet = '';

            foreach ($this->data as $columnName => $columnValue) {
                if (isset(static::$shema[$columnName])) {
                    $sqlSet = $sqlSet . $columnName . ' = :' . $columnName . ', ';
                    $values[$columnName] = $columnValue;
                }
            }

            $sqlSet = substr($sqlSet, 0, -2);
            $sql = 'UPDATE ' . static::getTableName() . ' SET ' . $sqlSet . ' WHERE ' . $primaryKeyName . ' = :primaryKey';
            $query = Bdd::$pdo->prepare($sql);
            $query->execute($values);
        } else {
            $objectToUpdate = array();

            foreach ($this->data as $columnName => $columnValue) {
                $numObject = 0;
                if (isset(static::$shema[substr($columnName, 0, -1)])) {
                    $numObject = substr($columnName, -1);
                    $objectToUpdate[$numObject][substr($columnName, 0, -1)] = $columnValue;
                }
            }

            
            foreach ($objectToUpdate as $object) {
                $values = array(
                    'primaryKey' => $object[$primaryKeyName]
                );

                if ($foreignKeyName !== NULL && $foreignKeyValue !== NULL) {
                    $object[$foreignKeyName] = $foreignKeyValue;
                }

                $sqlSet = '';
                foreach ($object as $columnName => $columnValue) {
                    // Don't add column wich aren't in the database or are part of the key
                    if (isset(static::$shema[$columnName])) {
                        $sqlSet = $sqlSet . $columnName . ' = :' . $columnName . ', ';
                        $values[$columnName] = $columnValue;
                    }
                }
                $sqlSet = substr($sqlSet, 0, -2);

                $sql = 'UPDATE ' . static::getTableName() . ' SET ' . $sqlSet . ' WHERE ' . $primaryKeyName . ' = :primaryKey';
                $query = Bdd::$pdo->prepare($sql);
                $query->execute($values);
            }
        }
    }

    //public function updateMultiple($foreignKeyName)

    public function delete() {
        $primaryKeyName = static::getPrimaryKey();
        $sql = 'DELETE FROM ' . static::getTableName() . ' WHERE ' . $primaryKeyName . ' = :primaryKey';

        $query = Bdd::$pdo->prepare($sql);
        $query->execute(array(
            'primaryKey' => $this->$primaryKeyName
        ));
    }

    public function updateMultipleWithCondition($primaryKeyValues = NULL) {
        static::registerModel();
        $primaryKeyName = static::getPrimaryKey();
        
        foreach ($this->data as $columnName => $columnValue) {
            $numObject = 0;
            if (isset(static::$shema[substr($columnName, 0, -1)])) {
                $numObject = substr($columnName, -1);
                $objectToUpdate[$numObject][substr($columnName, 0, -1)] = $columnValue;
                $objectToUpdate[$numObject][$primaryKeyName] = $primaryKeyValues[$numObject];
            }
        }
        
        foreach ($objectToUpdate as $object) {
            $values = array(
                    'primaryKey' => $object[$primaryKeyName]
                );
            
            $sqlSet = '';
            foreach ($object as $columnName => $columnValue) {               
                // Don't add column wich aren't in the database or are part of the key
                if (isset(static::$shema[$columnName]) && $columnName != $primaryKeyName) {
                    $sqlSet = $sqlSet . $columnName . ' = :' . $columnName . ', ';
                    $values[$columnName] = $columnValue;    
                }
            }
            $sqlSet = substr($sqlSet, 0, -2);

            $sql = 'UPDATE ' . static::getTableName() . ' SET ' . $sqlSet . ' WHERE ' . $primaryKeyName . ' = :primaryKey';
            $query = Bdd::$pdo->prepare($sql);
            $query->execute($values);
        }
    }
}

?>