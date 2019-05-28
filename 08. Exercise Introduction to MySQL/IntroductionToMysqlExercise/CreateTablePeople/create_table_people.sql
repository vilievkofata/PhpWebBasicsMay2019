CREATE TABLE people
(
    id        INT AUTO_INCREMENT,
    name      VARCHAR(200)    NOT NULL,
    picture   MEDIUMBLOB      NULL,
    height    DECIMAL(10, 2)  NULL,
    weight    DECIMAL(10, 2)  NULL,
    gender    ENUM ('m', 'f') NOT NULL,
    birthdate DATE            NOT NULL,
    biography LONGTEXT        NULL,
    CONSTRAINT people_pk
        PRIMARY KEY (id)
);
INSERT INTO people (name, picture, height, weight, gender, birthdate, biography)
VALUES ('Valentin Iliev', NULL, 181.12, 60.54, 'm', '2003-12-05', NULL),
       ('Ivan Ivanov', NULL, 156.34, 80.48, 'm', '2004-05-06', NULL),
       ('Johnny B', NULL, 185.37, 98.5, 'm', '2001-10-09', NULL),
       ('Paco Petkov', NULL, 201, 73, 'm', '2000-11-15', NULL),
       ('Pesho Ivanov', NULL, 141.1, 84, 'm', '1998-10-21', NULL);