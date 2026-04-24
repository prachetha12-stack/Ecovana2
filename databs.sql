CREATE DATABASE Nurseries;

USE Nurseries;

CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    mobile VARCHAR(20),
    password VARCHAR(100),
    confirm_password VARCHAR(100),
    role VARCHAR(20)
);