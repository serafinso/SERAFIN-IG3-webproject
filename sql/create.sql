drop table if exists users cascade;
drop table if exists eleve cascade;
drop table if exists professeur cascade;

CREATE TABLE users (
  user_id numeric(20) PRIMARY KEY,
  user_email varchar(100) NOT NULL UNIQUE,
  user_password varchar(100) NOT NULL,
  user_name varchar(100) NOT NULL,
  user_image varchar(100) DEFAULT NULL
);

CREATE TABLE eleve (
  eleve_id numeric(20) PRIMARY KEY,
  eleve_nom varchar(100) NOT NULL,
  eleve_prenom varchar(100) NOT NULL,
  eleve_age numeric(3) NOT NULL,
  eleve_telephone varchar (20) NOT NULL,
  eleve_email varchar(100) NOT NULL UNIQUE
);

CREATE TABLE professeur (
  professeur_id numeric(20) PRIMARY KEY,
  professeur_nom varchar(100) NOT NULL,
  professeur_prenom varchar(100) NOT NULL,
  professeur_age numeric(3) NOT NULL,
  professeur_telephone varchar (20) NOT NULL,
  professeur_email varchar(100) NOT NULL UNIQUE
);

CREATE TABLE STOCK(
  nb_object numeric (5);
  nb_balle numeric(5);
);
