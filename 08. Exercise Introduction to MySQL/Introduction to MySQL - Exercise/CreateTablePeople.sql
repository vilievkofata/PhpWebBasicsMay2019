CREATE TABLE people (
    id INTEGER UNIQUE AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    picture MEDIUMBLOB NULL,
    height DECIMAL NULL,
    weight DECIMAL NULL,
    gender ENUM('m', 'f') NOT NULL,
    birthdate DATE NOT NULL,
    biography LONGTEXT NULL
);