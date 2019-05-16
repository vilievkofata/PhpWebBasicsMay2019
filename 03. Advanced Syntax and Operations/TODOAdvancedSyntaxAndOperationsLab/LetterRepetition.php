<?php

$randomString = readline();
$repetitions = [];
for ($i = 0; $i < strlen($randomString); $i++) {
    if (array_key_exists($randomString[$i], $repetitions)) {
        $repetitions[$randomString[$i]]++;
    } else {
        $repetitions[$randomString[$i]] = 1;
    }
}
foreach ($repetitions as $key => $repetition) {
    echo "$key -> $repetition" . PHP_EOL;
}
