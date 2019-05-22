<?php

if (isset($_GET['calculate'])) {
    $operation = $_GET['operation'];
    $numberOne = intval($_GET['number_one']);
    $numberTwo = intval($_GET['number_two']);
    switch ($operation) {
        case 'sum':
            $output = $numberOne + $numberTwo;
            break;
        case 'subtract':
            $output = $numberOne - $numberTwo;
            break;
        default:
            $output = 'Invalid operation supplied';
            break;
    }
}
