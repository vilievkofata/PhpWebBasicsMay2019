<?php

$monthNumber = readline();
$month = [
    'Invalid Month!',
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
];
if (1 <= $monthNumber and $monthNumber <= 12) {
    echo $month[$monthNumber];
} else {
    echo $month[0];
}
