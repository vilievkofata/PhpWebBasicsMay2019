<?php

include 'PDO.php';
include 'Employee.php';
$input = readline();
$inputs = explode(', ', $input);
$employee = new Employee();
$employee->setEmployee($inputs);
