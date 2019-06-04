<?php


class Database
{
    private $pdo;

    /**
     * Database constructor.
     * @param $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function query($q)
    {
        return $this->pdo->query($q);
    }

}