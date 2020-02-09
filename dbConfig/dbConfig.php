<?php
include 'dbConst.php';
    
class DBConnect{
    
    private $conn;

    function __construct() {
        $this->conn = mysqli_connect(HOST, USERNAME, PASSWORD, DB_NAME, PORT);
        
        if(!$this->conn)
        {
            die(mysqli_error());
        }
    }
    
    
    function getConnection() {
        return $this->conn;
    }
    
    function close() {
        mysqli_close($this->conn);
    }
}

    
    
    
?>