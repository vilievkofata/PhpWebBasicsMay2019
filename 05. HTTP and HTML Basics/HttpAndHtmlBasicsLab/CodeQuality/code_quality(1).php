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
    <input id="number_one" name="number_one" type="number"><br>
    <label for="number_two">Number 2:</label>
    <input id="number_two" name="number_two" type="number"><br>
    <?php

    if (isset($_GET['calculate'])) {
        $operation = $_GET['operation'];
        $numberOne = intval($_GET['number_one']);
        $numberTwo = intval($_GET['number_two']);
        echo '<label for="result">Result:</label>';
        switch ($operation) {
            case 'sum':
                echo '<input disabled="disabled" id="result"
                 readonly="readonly" type="number"
                  value="' . ($numberOne + $numberTwo) . '"><br>';
                break;
            case 'subtract':
                echo '<input disabled="disabled" id="result"
                 readonly="readonly" type="number"
                  value="' . ($numberOne - $numberTwo) . '"><br>';
                break;
            default:
                echo '<input disabled="disabled" id="result"
                 readonly="readonly" type="number"
                  value="' . 'Invalid operation supplied' . '"><br>';
                break;
        }
    }
    ?>
    <input name="calculate" type="submit" value="Calculate!">
</form>
</body>
</html>