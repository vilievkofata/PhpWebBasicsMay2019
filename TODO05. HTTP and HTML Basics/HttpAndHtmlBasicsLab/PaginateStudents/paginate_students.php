<?php include 'PaginateStudents.php'; ?>
<!DOCTYPE html>
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
        <?php for ($i = $page * 5; $i < $page * 5 + 5; $i++): ?>
            <tr>
                <td><?php echo $name[$i]; ?></td>
                <td><?php echo $age[$i]; ?></td>
            </tr>
        <?php endfor; ?>
        </tbody>
    </table>
<?php endif; ?>
<a href="paginate_students.php?page=<?php echo $page--; ?>" target="_parent">Previous</a>
<a href="paginate_students.php?page=<?php echo $page++; ?>">Next</a>
</body>
</html>