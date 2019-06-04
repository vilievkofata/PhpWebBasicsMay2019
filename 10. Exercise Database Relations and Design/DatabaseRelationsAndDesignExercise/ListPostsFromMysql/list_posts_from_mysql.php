<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Posts from MySQL</title>
</head>
<body>
<?php

$mysqli = new mysqli('localhost', 'root', '', 'blog');
if ($mysqli->connect_error) {
    die($mysqli->connect_error);
}
try {
    $table = $mysqli->query('SELECT * FROM posts ORDER BY date;');
    if ($mysqli->error) {
        throw new mysqli_sql_exception($mysqli->error);
    }
    echo '<table>';
    echo '    <thead>';
    echo '    <tr>';
    echo '        <th>Title</th>';
    echo '        <th>Content</th>';
    echo '        <th>Date</th>';
    echo '    </tr>';
    echo '    </thead>';
    echo '    <tbody>';
    while ($row = $table->fetch_assoc()) {
        $title = $row['title'];
        $content = $row['content'];
        try {
            $date = (new DateTime($row['date']))->format('d.m.Y');
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
        echo '<tr>';
        echo "    <td>$title</td>";
        echo "    <td>$content</td>";
        echo "    <td>$date</td>";
        echo '</tr>';
    }
    echo '    </tbody>';
    echo '</table>';
} catch (mysqli_sql_exception $sql_exception) {
    echo $sql_exception->getMessage();
}
?>
</body>
</html>