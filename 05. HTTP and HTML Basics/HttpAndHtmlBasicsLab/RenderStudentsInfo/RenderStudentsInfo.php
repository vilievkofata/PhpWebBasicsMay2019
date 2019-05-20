<?php

if (isset($_GET['filter'])) {
    $delimiter = $_GET['delimiter'];
    $names = $_GET['names'];
    $ages = $_GET['ages'];
    $name = explode($delimiter, $names);
    $age = explode($delimiter, $ages);
}
