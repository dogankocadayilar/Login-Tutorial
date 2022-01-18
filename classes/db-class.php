<?php

class Database
{

    protected function connect()
    {
        try {
            $db = new PDO("mysql:host=localhost;dbname=selfmade", "root", "");
       } catch ( PDOException $e ){
            print $e->getMessage();
       }

       return $db;  
    }
}
