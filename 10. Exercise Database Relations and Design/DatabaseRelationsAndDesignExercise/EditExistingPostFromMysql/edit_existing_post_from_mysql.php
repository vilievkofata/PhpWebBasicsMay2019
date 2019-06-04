<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Existing Post from MySQL</title>
</head>
<body>
<form>
    <label for="id">Id</label>
    <input id="id" name="id" type="number"><br>
    <label for="title">Title</label>
    <input id="title" name="title" type="text"><br>
    <label for="content">Content</label>
    <textarea id="content" name="content"></textarea><br>
    <input type="submit" value="Edit">
</form>
<?php

$mysqli = new mysqli('localhost', 'root', '', 'blog');
if ($mysqli->connect_error) {
    die($mysqli->connect_error);
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $title = $_GET['title'];
    $content = $_GET['content'];
    try {
        $mysqli->begin_transaction();
        $query = $mysqli->prepare('UPDATE posts
SET title   = ?,
    content = ?
WHERE id = ?;');
        if ($mysqli->error) {
            throw new mysqli_sql_exception($mysqli->error);
        }
        $query->bind_param('ssi', $title, $content, $id);
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