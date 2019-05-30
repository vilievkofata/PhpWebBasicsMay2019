CREATE DATABASE `php-course`;
CREATE TABLE `php-course`.students
(
    first_name               VARCHAR(255) NOT NULL,
    last_name                VARCHAR(255) NOT NULL,
    number                   INT AUTO_INCREMENT,
    phone                    BIGINT       NULL,
    home_address             TEXT         NULL,
    date_of_record           TIMESTAMP    NULL,
    date_of_last_data_change TIMESTAMP    NULL,
    is_active                BOOL         NULL,
    motivation_letter        MEDIUMTEXT   NULL,
    notes                    TEXT         NULL,
    CONSTRAINT students_pk
        PRIMARY KEY (number)
);