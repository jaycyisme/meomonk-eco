<?php

include_once("../Database/Connect.php");

class generalServices
{
    private Database $database;

    public function __construct()
    {
        $this->database = new Database("MeoMonkData");
    }

    // Services
    public function getAll(string $tableName)
    {
        $sql = "SELECT * FROM " . $tableName;
        return $this->database->conn->query($sql);
    }

    public function getById(string $tableName, int $Id)
    {
        $sql = "SELECT * FROM " . $tableName . " WHERE id = " . $Id;
        return $this->database->conn->query($sql);
    }

    public function getAllName(string $tableName)
    {
        $sql = "SELECT DISTINCT Name FROM " . $tableName;
        return $this->database->conn->query($sql);
    }

    public function closeDatabase()
    {
        $this->database->conn->close();
    }

}