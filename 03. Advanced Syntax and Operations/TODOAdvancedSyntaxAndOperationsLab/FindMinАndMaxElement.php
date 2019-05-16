<?php

list($width, $length) = explode(', ', readline());
for ($row = 0; $row < $width; $row++) {
    $matrix[$row] = explode(', ', readline());
}
$min = PHP_INT_MAX;
$max = PHP_INT_MIN;
foreach ($matrix as $array) {
    foreach ($array as $value) {
        $min = min($min, intval($value));
        $max = max($max, intval($value));
    }
}
echo "Min: $min" . PHP_EOL;
echo "Max: $max";
