<?php
  setcookie("login", "", time() + 24 *3600, null, null, false, true);
  setcookie("password", "", time() + 24 *3600, null, null, false, true);
  setcookie("logged", "", time() + 24 *3600, null, null, false, true);

	require('../model/bdd.php');

	if(isset($_POST['log']) && isset($_POST['password'])){
		$result = $pdo->prepare('SELECT * FROM user WHERE login=:username');
    var_dump($result);
		$result->bindValue(':username', $_POST['log'], PDO::PARAM_STR);
      var_dump($result);
		if (!$result->execute()) {
			$status = ERROR_USERUNKNOWN;
		}
		else if ($result->rowCount() <= 0) {
			$status = ERROR_USERUNKNOWN;
		}
		else {
			$row = $result->fetch();
        }

		if ($row['Pseudo'] != $_POST['login'] || strtolower($row['password']) != strtolower(hash('sha256', $_POST['pwd']))) {
			$status = ERROR_INCORRECTPASSWORD;
            header('Location: ../views/sessions/new.php');
			exit();
		} else {
      setcookie("login", "", time() + 24 *3600, null, null, false, true);
      setcookie("password", "", time() + 24 *3600, null, null, false, true);
      setcookie("logged", "", time() + 24 *3600, null, null, false, true);

			header('Location: ../views/editors/index.php');
			exit();
		}

        $result->closeCursor();
        unset($result);

	} else {
		echo '<p>Fatal Error</p>';
	}

?>
