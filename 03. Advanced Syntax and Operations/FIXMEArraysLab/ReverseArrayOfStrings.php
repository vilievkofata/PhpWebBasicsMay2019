<?php

$arrayOfStrings = explode(' ', readline());
$reverseArrayOfStrings = array_reverse($arrayOfStrings);
foreach ($reverseArrayOfStrings as $string) {
    echo "$string ";
}
