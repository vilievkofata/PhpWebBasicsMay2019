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
            );
            $statement->bindParam(1, $employee[0]);
            $statement->bindParam(2, $employee[1]);
            $statement->bindParam(3, $employee[2]);
            $statement->bindParam(4, $employee[3]);
            $statement->bindParam(5, $employee[4]);
            $statement->bindParam(6, $employee[5]);
            $statement->execute();
            $pdo->commit();
        } catch (PDOException $exception) {
            $pdo->rollBack();
            throw $exception;

        }
    }
}
