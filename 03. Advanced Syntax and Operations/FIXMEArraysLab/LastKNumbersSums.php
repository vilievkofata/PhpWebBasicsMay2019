<?php

$numberOfElements = readline();
$numberOfElementsToSum = readline();
$sequence[1] = 1;
for ($i = 2; $i <= $numberOfElements; $i++) {
    for ($j = $i - $numberOfElementsToSum; $j < $i; $j++) {
        $sequence[$i] += $sequence[$j];
    }
}
foreach ($sequence as $value) {
    echo "$value ";
}
