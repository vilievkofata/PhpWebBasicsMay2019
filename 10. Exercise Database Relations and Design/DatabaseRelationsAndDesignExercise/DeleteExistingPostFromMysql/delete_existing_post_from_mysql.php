<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Existing Post from MySQL</title>
</head>
<body>
<form>
    <label for="id">Id</label>
    <input id="id" name="id" type="number"><br>
    <input type="submit" value="Delete">
</form>
<?php

$mysqli = new mysqli('localhost', 'root', '', 'blog');
if ($mysqli->connect_error) {
    die($mysqli->connect_error);
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    try {
        $mysqli->begin_transaction();
        $query = $mysqli->prepare('DELETE FROM posts WHERE id = ?;');
        if ($mysqli->error) {
            throw new mysqli_sql_exception($mysqli->error);
        }
        $query->bind_param('i', $id);
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