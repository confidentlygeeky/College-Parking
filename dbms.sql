#All table definitions go here
DROP DATABASE IF EXISTS parking;

CREATE DATABASE parking;
USE parking;

DROP TABLE IF EXISTS myTable;

CREATE TABLE myTable(
	parking_id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(100) NOT NULL,
	status VARCHAR(100) NOT NULL,
);

#Creating an admin account
INSERT INTO myTable(name,status) VALUES("student","booked"),
("faculty","empty"),
("student","booked"),
("faculty","empty"),
("handicap","booked"),
("student","empty"),
("faculty","booked"),
("student","empty"),
("faculty","booked");