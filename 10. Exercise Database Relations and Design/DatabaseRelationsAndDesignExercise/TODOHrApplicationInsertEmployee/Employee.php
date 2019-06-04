<?php

require 'PDO.php';

/**
 * Employee
 */
class Employee
{
    /**
     * Set employee.
     *
     * @param array $employee array
     *
     * @throws PDOException
     *
     * @return string
     */
    function setEmployee($employee)
    {
        $dsn = 'mysql:host=localhost;port=3306;dbname=geography';
        $username = 'root';
        $passwd = '';
        try {
            $pdo = new PDO($dsn, $username, $passwd);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
        try {
            $pdo->beginTransaction();
            $statement = $pdo->prepare('INSERT INTO geography.employees (first_name, middle_name,
                                 last_name, department, position, passport_id)
VALUES (?, ?, ?, ?, ?, ?);'

            $statement->execute();
            $pdo->commit();
        } catch (PDOException $exception) {
            $pdo->rollBack();
            throw $exception;

        }
    }
}
