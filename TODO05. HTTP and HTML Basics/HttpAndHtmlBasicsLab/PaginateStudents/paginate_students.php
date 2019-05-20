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
    <input name="page" type="hidden" value="0">
    <input name="filter" type="submit" value="Filter!">
</form>
<?php if (isset($_SESSION['name'], $_SESSION['age'])): ?>
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
        </thead>
        <tbody>
        <?php for ($i = $_SESSION['page'] * 5; $i < $_SESSION['name'] * 5 + 5; $i++): ?>
            <tr>
                <td><?php echo $_SESSION['name'][$i]; ?></td>
                <td><?php echo $_SESSION['age'][$i]; ?></td>
            </tr>
        <?php endfor; ?>
        </tbody>
    </table>
    <a href="paginate_students.php?page=<?php echo $_SESSION['page']--; ?>">Previous</a>
    <a href="paginate_students.php?page=<?php echo $_SESSION['page']++; ?>">Next</a>
<?php endif; ?>
</body>
</html>