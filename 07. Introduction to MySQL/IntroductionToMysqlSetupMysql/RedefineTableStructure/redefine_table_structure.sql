 ALTER TABLE phonebook.phones
CHANGE COLUMN number number BIGINT;
INSERT INTO phonebook.phones (first_name, last_name, number)
VALUES ('Ivan', 'Stoyanov', 359894123456);