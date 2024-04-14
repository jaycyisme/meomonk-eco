<?php

class Connect
{
    private string $host = "localhost";
    private string $username = "root";
    private string $password = "180403";
    public mysqli $conn;

    public function __construct($database)
    {
        // Corrected database connection initialization
        $this->conn = new mysqli($this->host, $this->username, $this->password, $database);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        } else {
            echo "Connected successfully";
        }
    }
}
