<?php

class Connection
{
    public static function getConnection() {
        try{
            $conn = new PDO('mysql:host=127.0.0.1;dbname=testing', 'root', 'root');
        } catch(PDOException $ex) {
            die($ex->getMessage());
        }

        return $conn;
    }
}
