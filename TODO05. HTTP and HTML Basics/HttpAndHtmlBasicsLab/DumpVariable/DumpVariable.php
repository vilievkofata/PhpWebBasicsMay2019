<?php

$variable = readline();
switch ($variable[0]) {
    case '"':
        echo 'string';
        break;
    case 'a':
        echo 'array';
        break;
    case '(':
        echo 'object';
        break;
    default:
        $variable = +$variable;
        var_dump($variable);
        break;
}
