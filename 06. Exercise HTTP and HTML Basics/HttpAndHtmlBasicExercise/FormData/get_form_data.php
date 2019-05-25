<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get Form Data</title>
</head>
<body>
<form>
    <label for="name"></label>
    <input id="name" name="name" placeholder="Name.."><br>
    <label for="age"></label>
    <input id="age" name="age" placeholder="Age.." type="number"><br>
    <input id="male" name="gender" type="radio" value="male">
    <label for="male">Male</label><br>
    <input id="female" name="gender" type="radio" value="female">
    <label for="female">Female</label><br>
    <input type="submit" value="Submit">
</form>
<?php

if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    echo "My name is $name. I am $age years old. I am $gender";
}
?>
</body>
</html>