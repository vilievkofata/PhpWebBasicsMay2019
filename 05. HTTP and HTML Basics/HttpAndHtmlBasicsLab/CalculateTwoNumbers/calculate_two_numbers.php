<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculate Two Numbers</title>
</head>
<body>
<form>
    <label for="operation">Operation:</label>
    <select id="operation" name="operation">
        <option value="sum">Sum</option>
        <option value="subtract">Subtract</option>
    </select><br>
    <label for="number_one">Number 1:</label>
    <input id="number_one" name="number_one" type="text"><br>
    <label for="number_two">Number 2:</label>
    <input id="number_two" name="number_two" type="text"><br>
    <input name="calculate" type="submit" value="Calculate!">
</form>
<?php

if (isset($_GET['calculate'])) {
    $operation = $_GET['operation'];
    $numberOne = $_GET['number_one'];
    $numberTwo = $_GET['number_two'];
    switch ($operation) {
        case 'sum':
            echo ' == ' . ($numberOne + $numberTwo);
            break;
        case 'subtract':
            echo ' == ' . $numberOne - $numberTwo;
            break;
        default:
            echo ' == Invalid operation supplied';
            break;
    }
}
?>
</body>
</html>