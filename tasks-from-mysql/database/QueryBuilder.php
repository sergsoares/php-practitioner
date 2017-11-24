<?php

class QueryBuilder 
{
    
    public $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    
    public function selectAll($table){
        $statement = $this->conn->prepare("select * from {$table}");

        $statement->execute();
            
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}