<?php

class DB {
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $db_name = "beginner _portfolio";
    protected $conn;

    protected function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->pwd, $this->db_name);
        if ($this->conn->connect_error) {
            die("Connection Failed: ". $this->conn->connect_error);
        }
        
        return $this->conn;
    }

    protected function closeConnection() {
        if ($this->conn) {
            $this->conn->close();
        }
    }

}

?>