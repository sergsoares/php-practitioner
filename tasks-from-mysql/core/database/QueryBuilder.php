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

    public function insert($table, $params){

        $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)',
                $table,
                implode(', ' ,array_keys($params)),
                ':' . implode(', :',array_keys($params))
            );

        $statement = $this->conn->prepare($sql);

        // die(var_dump($sql));
        $statement->execute($params);
    }
}