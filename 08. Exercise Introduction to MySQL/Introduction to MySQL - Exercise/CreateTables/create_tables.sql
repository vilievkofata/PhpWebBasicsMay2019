CREATE TABLE minions (
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    age VARCHAR(255),
    town_id INTEGER
);
CREATE TABLE towns (
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255)
);