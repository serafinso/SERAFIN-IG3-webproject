drop table if exists users cascade;

CREATE TABLE users (
  user_id numeric(20),
  user_email varchar(100) NOT NULL,
  user_password varchar(100) NOT NULL,
  user_name varchar(100) NOT NULL,
  user_type boolean,
  user_image varchar(100) DEFAULT NULL
);

$connect = new PDO('pgsql:user=postgres dbname=postgres password=sodu1508');
