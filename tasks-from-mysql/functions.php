<?php

function getDbConnection() {
    try{
        $conn = new PDO('mysql:host=127.0.0.1;dbname=testing', 'root', 'root');
    } catch(PDOException $ex) {
        die($ex->getMessage());
    }

    return $conn;
}

function getAllTasks(){
    $statement = getDbConnection()->prepare('select * from tasks');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}