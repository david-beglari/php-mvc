<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 1/1/18
 * Time: 12:55 PM
 */

class Connection
{

    public static function make($config)
    {

        try{
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['option']
            );
        } catch (PDOException $e){
            die($e->getMessage());
        }
    }
}