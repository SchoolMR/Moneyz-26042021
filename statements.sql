-- Create en start Database

CREATE DATABASE moneyz;
USE moneyz;

-- Tabellen

CREATE TABLE tblUser
(

    id INT AUTO_INCREMENT NOT NULL,
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME,
    updated_at DATETIME,

    PRIMARY KEY (id)

);

CREATE TABLE tblMoneyz
(

    id INT AUTO_INCREMENT NOT NULL,
    user_id INT NOT NULL,
    moneyz INT,

    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES tblUser(id)

);