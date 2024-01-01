<?php

class Connection {

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password);
        // Check connection
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    function createDatabase($projet2) {
        // Creating a database with the conn in the class ($this->conn)
        $sql = "CREATE DATABASE IF NOT EXISTS $projet2";
        
        if (mysqli_query($this->conn, $sql)) {
            echo "Database created successfully";
        } else {
            echo "Error creating database: " . mysqli_error($this->conn);
        }
    }

    function selectDatabase($projet2) {
        // Select database with the conn of the class, using mysqli_select..
        mysqli_select_db($this->conn, $projet2);
    }

    function createTable($query) {
        // Creating a table with the query
        if (mysqli_query($this->conn, $query)) {
            echo "Table created successfully";
        } else {
            echo "Error creating table: " . mysqli_error($this->conn);
        }
    }
}

?>
