<!DOCTYPE html>
<?php include 'Calculator.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator Frontend</title>
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
    <?php if (isset($output)): ?>
        <label for="result">Result:</label>
        <input disabled="disabled" id="result" readonly="readonly" type="text"
               value="<?php echo $output; ?>"><br>
    <?php endif; ?>
    <input name="calculate" type="submit" value="Calculate!">
</form>
</body>
</html>