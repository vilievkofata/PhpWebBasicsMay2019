<?php

if (isset($_GET['calculate'])) {
    $operation = $_GET['operation'];
    $numberOne = $_GET['number_one'];
    $numberTwo = $_GET['number_two'];
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
