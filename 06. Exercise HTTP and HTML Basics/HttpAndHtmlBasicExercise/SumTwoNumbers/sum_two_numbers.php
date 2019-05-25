<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sum Two Numbers</title>
</head>
<body>
<?php

if (isset($_GET)) {
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
    $sum = $num1 + $num2;
    echo "$num1 + $num2 = $sum";
}
?>
<form>
    <label for="num1">First Number:</label>
    <input id="num1" name="num1" type="number"><br>
    <label for="num2">Second Number:</label>
    <input id="num2" name="num2" type="number"><br>
    <input type="submit">
</form>
</body>
</html>