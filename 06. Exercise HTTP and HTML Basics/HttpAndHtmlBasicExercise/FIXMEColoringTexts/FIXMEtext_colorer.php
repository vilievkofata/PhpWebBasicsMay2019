<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Text Colorer</title>
</head>
<body>
<form>
    <label for="input"></label>
    <textarea id="input" name="input"></textarea><br>
    <input type="submit" value="Color text">
</form>
<?php

if (isset($_GET['input'])) {
    $input = $_GET['input'];
    $inputs = str_split($input);
    for ($i = 0; $i < count($inputs); $i++) {
        if ($inputs[$i] == ' ') {
            $inputs[$i] = '';
        }
    }
    $inputs = array_filter($inputs);
    $inputs = array_values($inputs);
    foreach ($inputs as $input) {
        if (ord($input) % 2 == 1) {
            echo '<span style="color: blue;">' . htmlspecialchars($input) . '</span> ';
        } else {
            echo '<span style="color: red;">' . htmlspecialchars($input) . '</span> ';
        }
    }
}
?>
</body>
</html>