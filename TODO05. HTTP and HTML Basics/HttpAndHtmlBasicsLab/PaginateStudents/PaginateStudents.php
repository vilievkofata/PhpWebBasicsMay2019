<?php

if (isset($_POST['filter'])) {
    $delimiter = $_POST['delimiter'];
    $names = $_POST['names'];
    $ages = $_POST['ages'];
    $name = explode($delimiter, $names);
    $age = explode($delimiter, $ages);
    $page = intval($_GET['page']);
}
