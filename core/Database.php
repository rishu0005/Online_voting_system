<?php 

class Database{
    public $pdo;
    // public $dsn;

    public function __construct($DB_HOST, $DB_USER , $DB_PASS, $DB_NAME){
        
        try{
            $this->pdo = new PDO("mysql:host=$DB_HOST;user=$DB_USER;password=$DB_PASS;dbname=$DB_NAME");
            // echo "Connection is made for $DB_NAME";
        }
        catch(PDOException $e){
            echo "connection failed : " . $e->getMessage();
        }

    }

    
} 