insert into users(user_nom, user_password, user_email) values('demo', 'demo', 'demo');
insert into users(user_nom, user_password, user_email) values('admini', 'mdpquimarche', 'email');
insert into professeur(professeur_nom, professeur_prenom, professeur_date_naissance, professeur_telephone, professeur_email) values('Abadie', 'Aubin', '01/01/0101', '0644558899', 'aa@gmail.com');
insert into professeur(professeur_nom, professeur_prenom, professeur_date_naissance, professeur_telephone, professeur_email) values('Yvan', 'SANSON', '02/02/0202', '0644556677', 'ys@gmail.com');
insert into professeur(professeur_nom, professeur_prenom, professeur_date_naissance, professeur_telephone, professeur_email) values('Luca', 'DEBEIR', '03/03/0303', '0608457941', 'ld@gmail.com');

  UPDATE professeur SET professeur_nom='Abadie', professeur_prenom='Aubin',
     professeur_age=24,professeur_telephone='0644558899',professeur_email='aa@gmail.com' WHERE professeur_id = '1';
