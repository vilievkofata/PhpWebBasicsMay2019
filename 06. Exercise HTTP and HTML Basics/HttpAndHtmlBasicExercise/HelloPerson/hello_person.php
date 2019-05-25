<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello, Person!</title>
</head>
<body>
<form>
    <label for="person">Name:</label>
    <input id="person" name="person" type="text">
    <input type="submit">
</form>
<?php

if (isset($_GET['person'])) {
    $person = $_GET['person'];
    echo 'Hello, ' . htmlspecialchars($person) . '!';
}
?>
</body>
</html>