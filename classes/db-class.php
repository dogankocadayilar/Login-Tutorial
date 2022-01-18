<?php

class Database
{
    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpwd = '';
    private $database = 'selfmade';



    protected function connect()
    {
        try {
            $dsn = "mysql:host=".$this->dbhost.";dbname=".$this->database;
            $db = new PDO($dsn, $this->dbuser, $this->dbpwd);
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        return $db;
    }
}
