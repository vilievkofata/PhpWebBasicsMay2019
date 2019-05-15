<?php

$firstArray = explode(' ', readline());
$firstArrayLength = count($firstArray);
$secondArray = explode(' ', readline());
$secondArrayLength = count($secondArray);
$sumArrayLength = max($firstArrayLength, $secondArrayLength);
for ($i = 0; $i < $sumArrayLength; $i++) {
    if ($firstArray[$i] == null) {
        $firstArray[$i] = $firstArray[$i - $firstArrayLength];
    }
    if ($secondArray[$i] == null) {
        $secondArray[$i] = $secondArray[$i - $secondArrayLength];
    }
}
$firstArray = array_reverse($firstArray);
$secondArray = array_reverse($secondArray);
for ($i = 0; $i < $sumArrayLength; $i++) {
    $firstNumber += $firstArray[$i] * (10 ** $i);
    $secondNumber += $secondArray[$i] * (10 ** $i);
}
$sumNumber = $firstNumber + $secondNumber;
$sumArray = str_split($sumNumber);
foreach ($sumArray as $value) {
    echo "$value ";
}
