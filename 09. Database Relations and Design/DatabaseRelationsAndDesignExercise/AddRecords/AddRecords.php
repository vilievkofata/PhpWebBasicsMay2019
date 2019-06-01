<?php

$mysqli = new mysqli('localhost', 'root', '', 'sql_and_php');
$numberOfInputs = readline();
for ($i = 0; $i < $numberOfInputs; $i++) {
    $input = readline();
    $inputs = explode(' ', $input);
    $query = $mysqli->prepare('INSERT INTO sql_and_php.students (first_name, last_name, number, phone)
VALUES (?, ?, ?, ?);');
    $query->bind_param('ssii', $inputs[0], $inputs[1], $inputs[2], $inputs[3]);
    $query->execute();
}
