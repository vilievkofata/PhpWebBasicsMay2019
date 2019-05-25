<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Information Table</title>
</head>
<body>
<form>
    <label for="name">Name</label>
    <input id="name" name="name" type="text"><br>
    <label for="phone">Phone number</label>
    <input id="phone" name="phone" type="tel"><br>
    <label for="age">Age</label>
    <input id="age" name="age" type="number"><br>
    <label for="address">Address</label>
    <input id="address" name="address" type="text"><br>
    <input type="submit">
</form>
<?php

if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $age = $_GET['age'];
    $address = $_GET['address'];
    echo '<table border="2">';
    echo '    <tr>';
    echo '        <td style="background-color: orange;">Name</td><td>' . $name . '</td>';
    echo '    </tr>';
    echo '    <tr>';
    echo '        <td style="background-color: orange;">Phone number</td><td>' . $phone . '</td>';
    echo '    </tr>';
    echo '    <tr>';
    echo '        <td style="background-color: orange;">Age</td><td>' . $age . '</td>';
    echo '    </tr>';
    echo '    <tr>';
    echo '        <td style="background-color: orange;">Address</td><td>' . $address . '</td>';
    echo '    </tr>';
    echo '</table>';
}
?>
</body>
</html>