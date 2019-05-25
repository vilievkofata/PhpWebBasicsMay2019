<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Navigation</title>
</head>
<body>
<form>
    <label for="categories">Categories:</label>
    <input id="categories" name="categories" type="text"><br>
    <label for="tags">Tags:</label>
    <input id="tags" name="tags" type="text"><br>
    <label for="months">Months:</label>
    <input id="months" name="months" type="text"><br>
    <input type="submit" value="Generate">
</form>
<?php

if (isset($_GET['categories'])) {
    $categories = explode(', ', $_GET['categories']);
    $tags = explode(', ', $_GET['tags']);
    $months = explode(', ', $_GET['months']);
    echo '<h2>Categories</h2>';
    echo '<ul>';
    foreach ($categories as $category) {
        echo '<li>' . $category . '</li>';
    }
    echo '</ul>';
    echo '<h2>Tags</h2>';
    echo '<ul>';
    foreach ($tags as $tag) {
        echo '<li>' . $tag . '</li>';
    }
    echo '</ul>';
    echo '<h2>Months</h2>';
    echo '<ul>';
    foreach ($months as $month) {
        echo '<li>' . $month . '</li>';
    }
    echo '</ul>';
}
?>
</body>
</html>