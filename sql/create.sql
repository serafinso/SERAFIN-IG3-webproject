drop table if exists users cascade;
drop table if exists eleve cascade;
drop table if exists stock cascade;
drop table if exists professeur cascade;

CREATE TABLE users (
  user_id SERIAL PRIMARY KEY,
  user_email varchar(100) NOT NULL UNIQUE,
  user_password varchar(100) NOT NULL,
  user_nom varchar(100) NOT NULL,
  user_image varchar(100) DEFAULT NULL
);

CREATE TABLE eleve (
  eleve_id SERIAL PRIMARY KEY,
  eleve_nom varchar(100) NOT NULL,
  eleve_prenom varchar(100) NOT NULL,
  eleve_date_naissance varchar(10) NOT NULL,
  eleve_telephone varchar (20) NOT NULL,
  eleve_email varchar(100) NOT NULL UNIQUE
);

CREATE TABLE professeur (
  professeur_id SERIAL PRIMARY KEY,
  professeur_nom varchar(100) NOT NULL,
  professeur_prenom varchar(100) NOT NULL,
  professeur_date_naissance varchar(10) NOT NULL,
  professeur_telephone varchar (20) NOT NULL,
  professeur_email varchar(100) NOT NULL UNIQUE
);

CREATE TABLE stock(
  stock_id SERIAL PRIMARY KEY,
  stock_libelle varchar(100) NOT NULL,
  stock_nb numeric(5)
);

CREATE TABLE emprunt(
  emprunt_id SERIAL PRIMARY KEY,
  stock_id SERIAL REFERENCES stock (stock_id),
  eleve_id SERIAL REFERENCES other_table (eleve_id),
  nb_emprunt_balle numeric(5),
  nb_emprunt_raquette numeric(5),
  rendu boolean,
);
