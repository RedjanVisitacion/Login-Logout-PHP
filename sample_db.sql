CREATE DATABASE sample_db;

USE sample_db;

CREATE TABLE users (
    id int(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    firstname varchar(255) NOT NULL,
    lastname varchar(255) NOT NULL
);
