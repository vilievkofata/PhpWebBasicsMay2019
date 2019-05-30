<?php

$mysqli = new mysqli('localhost', 'root', '', 'sql_and_php');
$query = $mysqli->query('SELECT *
FROM sql_and_php.students;');
while ($row = $query->fetch_assoc()) {
    foreach ($row as $col => $data) {
        echo $data . ' ';
    }
    echo PHP_EOL;
}
$numberOfInputs = readline();
for ($i = 0; $i < $numberOfInputs; $i++) {
    $input = readline();
    $inputs = explode(' ', $input);
    $query = $mysqli->prepare('INSERT INTO sql_and_php.students (first_name, last_name, number, phone)
VALUES (?, ?, ?, ?);');
    $query->bind_param('ssii', $inputs[0], $inputs[1], $inputs[2], $inputs[3]);
    $query->execute();
    $query = $mysqli->query('SELECT *
FROM sql_and_php.students;');
    while ($row = $query->fetch_assoc()) {
        foreach ($row as $col => $data) {
            echo $data . ' ';
        }
        echo PHP_EOL;
    }
}
