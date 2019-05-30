USE `php-course`;
UPDATE students
SET phone = +1123456789
WHERE number = 2;
UPDATE students
SET home_address = 'ul. "Tintyava" 16, 1113 NPZ Dianabad, Sofia'
WHERE phone IS NULL;