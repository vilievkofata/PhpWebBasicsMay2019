<?php

list($sideOfMatrix, $pattern) = explode(', ', readline());
$matrix = [];
$number = 1;
switch ($pattern) {
    case 'A':
        for ($col = 0; $col < $sideOfMatrix; $col++) {
            for ($row = 0; $row < $sideOfMatrix; $row++) {
                $matrix[$row][$col] = $number;
                $number++;
            }
        }
        break;
    case 'B':
        for ($col = 0; $col < $sideOfMatrix; $col++) {
            if ($col % 2 == 0) {
                for ($row = 0; $row < $sideOfMatrix; $row++) {
                    $matrix[$row][$col] = $number;
                    $number++;
                }
            } else {
                for ($row = $sideOfMatrix - 1; $row >= 0; $row--) {
                    $matrix[$row][$col] = $number;
                    $number++;
                }
            }
        }
        break;
}
foreach ($matrix as $array) {
    foreach ($array as $value) {
        echo "$value ";
    }
    echo PHP_EOL;
}
