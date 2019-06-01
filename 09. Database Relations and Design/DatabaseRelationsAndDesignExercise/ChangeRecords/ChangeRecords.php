<?php

$mysqli = new mysqli('localhost', 'root', '', 'sql_and_php');
$input = readline();
$inputs = explode(' ', $input);
switch ($inputs[1]) {
    case 'first_name':
        $query = $mysqli->prepare('UPDATE sql_and_php.students
SET first_name = ?
WHERE number = ?;');
        $query->bind_param('si', $inputs[2], $inputs[0]);
        $query->execute();
        break;
    case 'last_name':
        $query = $mysqli->prepare('UPDATE sql_and_php.students
SET last_name = ?
WHERE number = ?;');
        $query->bind_param('si', $inputs[2], $inputs[0]);
        $query->execute();
        break;
    case 'number':
        $query = $mysqli->prepare('UPDATE sql_and_php.students
SET number = ?
WHERE number = ?;');
        $query->bind_param('ii', $inputs[2], $inputs[0]);
        $query->execute();
        break;
    case 'phone':
        $query = $mysqli->prepare('UPDATE sql_and_php.students
SET phone = ?
WHERE number = ?;');
        $query->bind_param('ii', $inputs[2], $inputs[0]);
        $query->execute();
        break;
}
