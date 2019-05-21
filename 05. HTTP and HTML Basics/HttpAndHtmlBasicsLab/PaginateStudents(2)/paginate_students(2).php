<?php include 'PaginateStudents(2).php'; ?>
<?php $name = $_SESSION['name']; ?>
<?php $age = $_SESSION['age']; ?>
<?php $page = $_SESSION['page']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paginate Students (2)</title>
    <style>
        table, td, th {
            border: 1px solid;
        }
        a {
            color: green;
            text-decoration: none;
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
        <a href="paginate_students(2).php?page=<?php echo $page - 1; ?>">[Previous]</a>
    <?php endif; ?>
    <?php if ($page * 5 + 5 < count($name)): ?>
        <a href="paginate_students(2).php?page=<?php echo $page + 1; ?>">[Next]</a>
    <?php endif; ?>
<?php endif; ?>
</body>
</html>