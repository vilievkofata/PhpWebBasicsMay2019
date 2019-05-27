CREATE DATABASE phonebook;
CREATE TABLE phonebook.phones (
    person_id INTEGER AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    number INTEGER
);