<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Quality(1)</title>
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
    <?php

    if (isset($_GET['calculate'])) {
        $operation = $_GET['operation'];
        $numberOne = $_GET['number_one'];
        $numberTwo = $_GET['number_two'];
        echo '<label for="result">Result:</label>';
        switch ($operation) {
            case 'sum':
                echo '<input disabled="disabled" id="result"
                 readonly="readonly" type="text"
                  value="' . ($numberOne + $numberTwo) . '"><br>';
                break;
            case 'subtract':
                echo '<input disabled="disabled" id="result"
                 readonly="readonly" type="text"
                  value="' . ($numberOne - $numberTwo) . '"><br>';
                break;
            default:
                echo '<input disabled="disabled" id="result"
                 readonly="readonly" type="text"
                  value="' . 'Invalid operation supplied' . '"><br>';
                break;
        }
    }
    ?>
    <input name="calculate" type="submit" value="Calculate!">
</form>
</body>
</html>