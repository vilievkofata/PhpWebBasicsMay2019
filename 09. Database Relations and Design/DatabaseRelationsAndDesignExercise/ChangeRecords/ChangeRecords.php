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
$input = readline();
$inputs = explode(' ', $input);
$query = $mysqli->prepare('UPDATE sql_and_php.students
SET ? = ?
WHERE number = ?;');
$query->bind_param('ssi', $inputs[1], $inputs[2], $inputs[0]);
$query->execute();
$query = $mysqli->query('SELECT *
FROM sql_and_php.students;');
while ($row = $query->fetch_assoc()) {
    foreach ($row as $col => $data) {
        echo $data . ' ';
    }
    echo PHP_EOL;
}
