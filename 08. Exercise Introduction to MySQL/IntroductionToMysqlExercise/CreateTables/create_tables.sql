CREATE TABLE minions
(
    id      INT AUTO_INCREMENT,
    name    VARCHAR(255) NOT NULL,
    age     INT          NULL,
    town_id INT          NOT NULL,
    CONSTRAINT minions_pk
        PRIMARY KEY (id)
);
CREATE TABLE towns
(
    id   INT AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    CONSTRAINT towns_pk
        PRIMARY KEY (id)
);