<!DOCTYPE html>
<?php include 'RenderStudentsInfo.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Render Students Info</title>
    <style>
        table, td, th {
            border: 1px solid;
        }
    </style>
</head>
<body>
<form>
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
        <?php for ($i = 0; $i < count($name); $i++): ?>
            <tr>
                <td><?php echo $name[$i]; ?></td>
                <td><?php echo $age[$i]; ?></td>
            </tr>
        <?php endfor; ?>
        </tbody>
    </table>
<?php endif; ?>
</body>
</html>