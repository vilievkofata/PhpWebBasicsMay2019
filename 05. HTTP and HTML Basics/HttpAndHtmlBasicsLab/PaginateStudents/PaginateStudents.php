<?php

session_start();

if (isset($_POST['filter'])) {
    $delimiter = $_POST['delimiter'];
    $names = $_POST['names'];
    $ages = $_POST['ages'];
    $_SESSION['name'] = explode($delimiter, $names);
    $_SESSION['age'] = explode($delimiter, $ages);
    $_SESSION['page'] = $_POST['page'];
} else {
    if (isset($_GET['page'])) {
        $_SESSION['page'] = $_GET['page'];
    }
}
