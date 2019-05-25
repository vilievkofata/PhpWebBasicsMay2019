<?php

if (isset($_GET['input'])) {
    $input = $_GET['input'];
    $input = strtolower($input);
    for ($i = 0; $i < strlen($input); $i++) {
        if (!ctype_alpha($input[$i])) {
            $input[$i] = ' ';
        }
    }
    $inputs = explode(' ', $input);
    $inputs = array_filter($inputs);
    $inputs = array_values($inputs);
    $countedInputs = [];
    for ($i = 0; $i < count($inputs); $i++) {
        if (isset($countedInputs["$inputs[$i]"])) {
            $countedInputs["$inputs[$i]"]++;
        } else {
            $countedInputs["$inputs[$i]"] = 1;
        }
    }
    echo "<table border='2'>";
    foreach ($countedInputs as $key => $countedInput) {
        echo '<tr>';
            echo '<td>' . $key . '</td><td>' . $countedInput . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
