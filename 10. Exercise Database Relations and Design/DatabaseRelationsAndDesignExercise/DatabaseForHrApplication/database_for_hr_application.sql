CREATE TABLE IF NOT EXISTS geography.employees
(
    id          INT AUTO_INCREMENT,
    first_name  VARCHAR(255) NOT NULL,
    middle_name VARCHAR(255) NOT NULL,
    last_name   VARCHAR(255) NOT NULL,
    department  VARCHAR(255) NOT NULL,
    position    VARCHAR(255) NOT NULL,
    passport_id VARCHAR(255) NOT NULL,
    CONSTRAINT employees_pk
        PRIMARY KEY (id)
);
CREATE UNIQUE INDEX employees_first_name_middle_name_last_name_passport_id_uindex
    ON employees (first_name, middle_name, last_name, passport_id);
CREATE TABLE IF NOT EXISTS geography.employee_emails
(
    id                INT                       NOT NULL,
    first_email_type  ENUM ('Work', 'Personal') NOT NULL,
    first_email       VARCHAR(255)              NOT NULL,
    second_email_type ENUM ('Work', 'Personal') NOT NULL,
    second_email      VARCHAR(255)              NOT NULL,
    third_email_type  ENUM ('Work', 'Personal') NULL,
    third_email       VARCHAR(255)              NULL,
    CONSTRAINT employee_emails_pk
        PRIMARY KEY (id),
    CONSTRAINT employee_emails_employees_id_fk
        FOREIGN KEY (id) REFERENCES employees (id)
);
CREATE TABLE IF NOT EXISTS geography.employee_phones
(
    id                INT                       NOT NULL,
    first_phone_type  ENUM ('Work', 'Personal') NOT NULL,
    first_phone       VARCHAR(255)              NOT NULL,
    second_phone_type ENUM ('Work', 'Personal') NULL,
    second_phone      VARCHAR(255)              NULL,
    third_phone_type  ENUM ('Work', 'Personal') NULL,
    third_phone       VARCHAR(255)              NULL,
    CONSTRAINT employee_phones_pk
        PRIMARY KEY (id),
    CONSTRAINT employee_phones_employees_id_fk
        FOREIGN KEY (id) REFERENCES employees (id)
);