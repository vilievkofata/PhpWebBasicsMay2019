USE softuni;
CREATE TABLE students (
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    number INTEGER AUTO_INCREMENT PRIMARY KEY,
    phone BIGINT,
    record_date TIMESTAMP,
    is_active BOOLEAN
);