CREATE DATABASE employee_db;

USE employee_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255)
);

INSERT INTO users(username,password)
VALUES ('admin','Admin@123');
VALUES ('aniket','Aniket@123');
VALUES ('shad','Shad@123');

