<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Capital-Case Words</title>
</head>
<body>
<form>
    <label for="text"></label>
    <textarea id="text" name="text" rows="10">
        <?php

        if (isset($_GET['text'])) {
            $text = $_GET['text'];
            for ($i = 0; $i < strlen($text); $i++) {
                if (!ctype_alpha($text[$i])) {
                    $text[$i] = ' ';
                }
            }
            $texts = explode(' ', $text);
            for ($i = 0; $i < count($texts); $i++) {
                if (!ctype_upper($texts[$i])) {
                    $texts[$i] = '';
                }
            }
            $texts = array_filter($texts);
            $texts = array_values($texts);
            echo implode(', ', $texts);
        }
        ?>
    </textarea><br>
    <input type="submit" value="Extract">
</form>
</body>
</html>