<?php

class Connection
{
    /**
     * @param $config
     * @return PDO
     */
    public static function make($config)
    {

        try {
            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['option']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}