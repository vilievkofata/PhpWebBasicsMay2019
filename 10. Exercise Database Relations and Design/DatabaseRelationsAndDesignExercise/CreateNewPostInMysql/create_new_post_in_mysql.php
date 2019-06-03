<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create New Post in MySQL</title>
</head>
<body>
<form>
    <label for="title">Title</label>
    <input id="title" name="title" type="text"><br>
    <label for="content">Content</label>
    <textarea id="content" name="content"></textarea><br>
    <input type="submit" value="Create">
</form>
<?php

if (isset($_GET['title'])) {
    $title = $_GET['title'];
    $content = $_GET['content'];
    $mysqli = new mysqli('localhost', 'root', '', 'blog');
    if ($mysqli->connect_error) {
        die($mysqli->connect_error);
    }
    try {
        $mysqli->begin_transaction();
        $query = $mysqli->prepare('INSERT INTO posts (title, content)
VALUES (?, ?);');
        $query->bind_param('ss', $title, $content);
        $query->execute();
        if ($mysqli->affected_rows == 1) {
            $mysqli->commit();
        } else {
            throw new mysqli_sql_exception();
        }
    } catch (mysqli_sql_exception $exception) {
        $mysqli->rollback();
        echo $exception->getMessage();
    }
}
?>
</body>
</html>