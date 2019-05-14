<?php

$dayOfWeekNumber = readline();
$daysOfWeek = [
    'Invalid Day!',
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday'
];
if (1 <= $dayOfWeekNumber and $dayOfWeekNumber <= 7) {
    echo $daysOfWeek[$dayOfWeekNumber];
} else {
    echo $daysOfWeek[0];
}
