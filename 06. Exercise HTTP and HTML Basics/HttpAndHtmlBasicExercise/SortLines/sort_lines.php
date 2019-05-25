<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sort Lines</title>
</head>
<body>
<form>
    <label for="lines"></label>
    <textarea id="lines" name="lines" rows="10">
        <?php

        if (isset($_GET['lines'])) {
            $lines = explode(PHP_EOL, $_GET['lines']);
            sort($lines);
            foreach ($lines as $line) {
                echo $line . PHP_EOL;
            }
        }
        ?>
    </textarea><br>
    <input type="submit" value="Sort">
</form>
</body>
</html>