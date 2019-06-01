<?php

$mysqli = new mysqli('localhost', 'root', '', 'sql_and_php');
$idToDelete = readline();
$query = $mysqli->prepare('DELETE FROM sql_and_php.students WHERE number = ?;');
$query->bind_param('i', $idToDelete);
$query->execute();
