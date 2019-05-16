<?php

$arrayOfNumbers = explode(' ', readline());
while (true) {
    for ($i = 0; $i < count($arrayOfNumbers) - 1; $i++) {
        $condensedArrayOfNumbers[$i] = $arrayOfNumbers[$i] + $arrayOfNumbers [$i + 1];
    }
    if (count($arrayOfNumbers) <= 1) {
        break;
    } else {
        $arrayOfNumbers = $condensedArrayOfNumbers;
        $condensedArrayOfNumbers = [];
    }
}
echo $arrayOfNumbers[0];
