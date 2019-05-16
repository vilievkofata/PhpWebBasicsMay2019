<?php

$arrayOfIntegers = explode(' ', readline());
for ($i = 0; $i < count($arrayOfIntegers); $i++) {
    for ($j = $i + 1; $j < count($arrayOfIntegers); $j++) {
        for ($k = 0; $k < count($arrayOfIntegers); $k++) {
            if (
                $arrayOfIntegers[$i]
                + $arrayOfIntegers[$j]
                == $arrayOfIntegers[$k]
            ) {
                $didFindATripleSum = true;
                echo "$arrayOfIntegers[$i] + $arrayOfIntegers[$j] == "
                    . $arrayOfIntegers[$k] . PHP_EOL;
                break;
            }
        }
    }
}
if ($didFindATripleSum == false) {
    echo 'No';
}
