<?php

class Connection
{

    private $connection;

    public static function getConnection($config) {
        try{
            
            if(! $connection) {
                return new PDO(
                    $config['host'].';dbname='.$config['database'],
                    $config['username'],
                    $config['password'],
                    $config['options']
                );
            }
        } catch(PDOException $ex) {
            die($ex->getMessage());
        }

        return $connection;
    }
}
