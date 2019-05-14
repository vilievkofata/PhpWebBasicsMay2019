<?php

$numberOfIntegers = readline();
for ($i = 1; $i <= $numberOfIntegers; $i++) {
    $arrayOfIntegers[$i] = readline();
}
for ($i = count($arrayOfIntegers); $i >= 1; $i--) {
    echo $arrayOfIntegers[$i] . ' ';
}
