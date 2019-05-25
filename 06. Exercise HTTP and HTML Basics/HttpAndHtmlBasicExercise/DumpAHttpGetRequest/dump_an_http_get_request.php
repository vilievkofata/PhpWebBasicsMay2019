<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dump a HTTP GET Request</title>
</head>
<body>
<form>
    <label for="person_name">Name:</label>
    <input id="person_name" name="person_name" type="text"><br>
    <label for="age">Age:</label>
    <input id="age" name="age" type="number"><br>
    <label for="town_id">Town:</label>
    <select id="town_id" name="town_id">
        <option value="10">Sofia</option>
        <option value="20">Varna</option>
        <option value="30">Plodvid</option>
    </select><br>
    <input type="submit">
</form>
<?php

var_dump($_GET);
?>
</body>
</html>