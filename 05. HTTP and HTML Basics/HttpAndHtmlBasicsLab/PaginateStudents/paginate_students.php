<!DOCTYPE html>
<?php include 'PaginateStudents.php'; ?>
<?php

if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
}
if (isset($_SESSION['age'])) {
    $age = $_SESSION['age'];
}
if (isset($_SESSION['page'])) {
    $page = $_SESSION['page'];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paginate Students</title>
    <style>
        table, td, th {
            border: 1px solid;
        }
    </style>
</head>
<body>
<form method="post">
    <label for="delimiter">Delimiter:</label>
    <select id="delimiter" name="delimiter">
        <option value=",">,</option>
        <option value="|">|</option>
        <option value="&">&</option>
    </select><br>
    <label for="names">Names:</label>
    <input id="names" name="names" type="text"><br>
    <label for="ages">Ages:</label>
    <input id="ages" name="ages" type="text"><br>
    <input name="page" type="hidden" value="0">
    <input name="filter" type="submit" value="Filter!">
</form>
<?php if (isset($name, $age)): ?>
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
        </thead>
        <tbody>
        <?php for (
                $i = $page * 5;
                $i < $page * 5 + 5 and $i < count($name);
                $i++
        ): ?>
            <tr>
                <td><?php echo $name[$i]; ?></td>
                <td><?php echo $age[$i]; ?></td>
            </tr>
        <?php endfor; ?>
        </tbody>
    </table>
    <?php if ($page * 5 >= 5): ?>
        <a href="paginate_students.php?page=<?php echo $page - 1; ?>">Previous</a>
    <?php endif; ?>
    <?php if ($page * 5 + 5 < count($name)): ?>
        <a href="paginate_students.php?page=<?php echo $page + 1; ?>">Next</a>
    <?php endif; ?>
<?php endif; ?>
</body>
</html>