<?php

session_start();

if (isset($_POST['filter'])) {
    $delimiter = $_POST['delimiter'];
    $names = $_POST['names'];
    $ages = $_POST['ages'];
    $name = explode($delimiter, $names);
    $_SESSION['name'] = $name;
    $age = explode($delimiter, $ages);
    $_SESSION['age'] = $age;
    $page = $_POST['page'];
    $_SESSION['page'] = $page;
} else {
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        $_SESSION['page'] = $page;
    }
}
