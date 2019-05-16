<?php

$side = readline();
for ($row = 0; $row < $side; $row++) {
    $matrix[$row] = explode(' ', readline());
}
for ($row = 0; $row < $side; $row++) {
    $firstSum += $matrix[$row][$row];
    $secondSum += $matrix[$row][$side - 1 - $row];
}
$difference = abs($firstSum - $secondSum);
echo $difference;
