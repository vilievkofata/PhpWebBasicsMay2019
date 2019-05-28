USE softuni;
CREATE TABLE students
(
    first_name  VARCHAR(255) NOT NULL,
    last_name   VARCHAR(255) NOT NULL,
    number      INT AUTO_INCREMENT,
    phone       BIGINT       NOT NULL,
    record_date TIMESTAMP    NOT NULL,
    is_active   BOOLEAN      NOT NULL,
    CONSTRAINT students_pk
        PRIMARY KEY (number)
);