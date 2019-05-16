<?php

$realNumbers = explode(' ', readline());
$countOfNumbers = [];
foreach ($realNumbers as $number) {
    strval($number);
    if (array_key_exists($number, $countOfNumbers)) {
        $countOfNumbers[$number]++;
    } else {
        $countOfNumbers[$number] = 1;
    }
}
arsort($countOfNumbers);
ksort($countOfNumbers);
foreach ($countOfNumbers as $key => $number) {
    echo "$key -> $number" . PHP_EOL;
}
