<?php

$arrayOfElements = explode(' ', readline());
switch (count($arrayOfElements)) {
    case 1:
        echo "{ $arrayOfElements[0] }";
        break;
    case count($arrayOfElements) % 2 == 0:
        $index = count($arrayOfElements) / 2;
        echo "{ {$arrayOfElements[$index - 1]}, $arrayOfElements[$index] }";
        break;
    case count($arrayOfElements) % 2 == 1:
        $index = count($arrayOfElements) / 2;
        echo "{ {$arrayOfElements[$index - 1]}, $arrayOfElements[$index], "
            . "{$arrayOfElements[$index + 1]} }";
        break;
}
