CREATE DATABASE phonebook;
CREATE TABLE phonebook.phones
(
    person_id  INTEGER AUTO_INCREMENT,
    first_name VARCHAR(255) NULL,
    last_name  VARCHAR(255) NULL,
    number     BIGINT       NULL,
    CONSTRAINT phones_pk
        PRIMARY KEY (person_id)
);