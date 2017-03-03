drop database immo;
create database immo;
use immo;

create table user(
    id_u int(11) NOT NULL AUTO_INCREMENT,
    nom varchar(30),
    prenom varchar(30),
    email varchar(30),
    mdp varchar(255),
    naiss varchar(10),
    avatar varchar(255),
    primary key (id_u)
);

create table article(
    id_a int(11) NOT NULL AUTO_INCREMENT,
    titre varchar(50),
    contenu text,
    primary key(id_a)
);

create table commentaire(
    id_c int(11) NOT NULL AUTO_INCREMENT,
    contenu_c text,
    id_u int(11) NOT NULL,
    id_a int(11) NOT NULL,
    primary key(id_c),
    foreign key(id_u) references user(id_u),
    foreign key(id_a) references article(id_a)
);
