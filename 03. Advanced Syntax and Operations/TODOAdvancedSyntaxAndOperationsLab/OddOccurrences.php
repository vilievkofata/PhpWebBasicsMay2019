<?php

$strings = explode(' ', strtolower(readline()));
$occurrences = [];
foreach ($strings as $string) {
    if (array_key_exists($string, $occurrences)) {
        $occurrences[$string]++;
    } else {
        $occurrences[$string] = 1;
    }
}
$oddOccurrencesValues = [];
foreach ($occurrences as $key => $occurrence) {
    if ($occurrence % 2 == 1) {
        array_push($oddOccurrencesValues, $key);
    }
}
echo implode(', ', $oddOccurrencesValues);
