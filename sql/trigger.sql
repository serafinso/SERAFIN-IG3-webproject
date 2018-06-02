CREATE OR REPLACE VIEW nb_user AS SELECT count(*)FROM users;
CREATE TABLE result (excep varchar(100));

CREATE OR REPLACE function one_user() RETURNS trigger AS $result$
BEGIN
  IF nb_user==1 THEN  RAISE EXCEPTION '% impossible supprimer l utilisateur car c est le dernier', result;
  end IF;
END;
$result$ LANGUAGE plpgsql;

CREATE TRIGGER always_one_user BEFORE DELETE ON users
FOR EACH ROW EXECUTE PROCEDURE one_user();




CREATE OR REPLACE function not_same_l() RETURNS trigger AS $$
DECLARE
  existedeja numeric(5);
BEGIN
  SELECT EXISTS (SELECT * FROM stock WHERE stock_libelle = NEW.stock_libelle) INTO existedeja;
  IF existdeja THEN
    UPDATE stock SET stock_nb= stock_nb + NEW.stock_nb WHERE stock_libelle = NEW.stock_libelle;
  ELSE
    INSERT INTO stock(stock_libelle, stock_nb) VALUES(NEW.stock_libelle, NEW.stock_nb);
  END IF;
END;
$$ LANGUAGE plpgsql;


CREATE TRIGGER not_same_libelle BEFORE INSERT ON stock FOR EACH ROW EXECUTE PROCEDURE not_same_l();
