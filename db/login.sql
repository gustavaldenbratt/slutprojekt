CREATE DATABASE gnucci;

USE gnucci;

CREATE TABLE customer(
    id int(8) PRIMARY KEY AUTO_INCREMENT,
    name varchar(32),
    date varchar(32),
    mail varchar(32),
    address varchar(32),
    gender varchar(32),
    password varchar(32)
);
