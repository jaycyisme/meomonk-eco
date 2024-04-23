<?php

namespace Database;

use mysqli;

class connection
{
    private string $host = "localhost";
    private string $username = "root";
    private string $password = "180403";
    private string $dbname;
    private mysqli $ocon;

    public function __construct(string $dbname)
    {
        $this -> dbname = $dbname;

        $this -> ocon = new mysqli($this -> host, $this -> username, $this -> password, $this -> dbname);
        if ($this -> ocon -> connect_error) {
            die("Lỗi kết nối" . $this -> ocon -> connect_error);
        }

    }

    public function _getConnection(): mysqli
    {
        return $this->ocon;
    }

    public function _viewTable($tableName): array
    {
        $sql = "SELECT * FROM $tableName";
        $result = $this -> ocon -> query($sql);
        $data = array();
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function _viewDistinctTable($tableName): array
    {
        $sql = "SELECT DISTINCT * FROM $tableName";
        $result = $this -> ocon -> query($sql);
        $data = array();
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function _search_query(string $sql): array
    {
        $result = $this -> ocon -> query($sql);
        $data = array();
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function execute($_query): bool
    {
        if ($this -> ocon -> query($_query) === TRUE)
            return TRUE;
        else
            return FALSE;

    }
}
