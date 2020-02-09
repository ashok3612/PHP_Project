<?php

include 'dbConfig.php';

class DbFunction{
    
    private $dbConn;
    private $dbObj;
    private static $instance;
    
    function __construct() {
        $this->dbObj = new DBConnect();
        $this->dbConn = $this->dbObj->getConnection();
    }
    
    static function getInstance() {
        if(!self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    function close() {
        $this->dbObj->close();
    }
    
    function updateChatSql($param) {
        
        $sql = "INSERT INTO chattable (content) VALUES (" . "'" . $param . "');";
        
        
        $result = mysqli_query($this->dbConn, $sql);
        
        if($result)
        {
           
        }
        else 
        {
            echo mysqli_error($this->dbConn);
        }
        
    }
    
    function updateChatSql2($param) {
        
        $sql = "INSERT INTO chattable (content) VALUES (" . "'" . $param . "');";
        
        $result = mysqli_query($this->dbConn, $sql);
        
        if($result)
        {
            
        }
        else
        {
            echo mysqli_error($this->dbConn);
        }
        
    }
    
    function getChatContent() {
        
        $sql = "SELECT content FROM CHATTABLE";
        
        $result = mysqli_query($this->dbConn, $sql);
        
        
        return $result;
    }
    
    
}

?>