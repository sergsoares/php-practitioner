<?php

class Connection
{


    public static function getConnection($config) {
        try{
            return new PDO(
                $config['host'].';dbname='.$config['database'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch(PDOException $ex) {
            die($ex->getMessage());
        }

        return $connection;
    }
}
