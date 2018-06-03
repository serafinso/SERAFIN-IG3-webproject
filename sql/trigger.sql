CREATE OR REPLACE VIEW nb_user AS SELECT count(*)FROM users;
CREATE TABLE result (excep_one_user varchar(100), excep_always_balle varchar(100));

CREATE OR REPLACE function one_user() RETURNS trigger AS $result$
BEGIN
  IF nb_user==1 THEN  RAISE EXCEPTION '% impossible supprimer l utilisateur car c est le dernier', result;
  end IF;
END;
$result$ LANGUAGE plpgsql;

DROP TRIGGER IF EXISTS always_one_user ON users;
CREATE TRIGGER always_one_user BEFORE DELETE ON users FOR EACH ROW EXECUTE PROCEDURE one_user();






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
  RETURN NEW;
END;
$$ LANGUAGE plpgsql;

DROP TRIGGER IF EXISTS not_same_libelle ON stock;
CREATE TRIGGER not_same_libelle AFTER INSERT ON stock FOR EACH ROW EXECUTE PROCEDURE not_same_l();







CREATE OR REPLACE VIEW nb_stock AS SELECT count(*)FROM stock WHERE OLD.libelle_;
CREATE OR REPLACE function balle() RETURNS trigger AS $result$

BEGIN
  IF OLD.stock_libelle = 'balle' THEN RAISE EXCEPTION '% impossible supprimer le stock balle car il est essentiel', result;
  END IF;
END;
$result$ LANGUAGE plpgsql;

DROP TRIGGER IF EXISTS always_balle ON stock;
CREATE TRIGGER always_balle AFTER DELETE ON stock FOR EACH ROW EXECUTE PROCEDURE balle();
