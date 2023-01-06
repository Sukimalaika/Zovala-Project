<?php

//constants
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","class_db");
define("DB_PORT","3306");
class Database{

    public $connection;
    //constructor
    public function __construct(){
          $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_PORT);
          
          //IF things go wrong show an error
          if($this->connection->connect_error){
            echo "something went wrong"
            .$this->connection->connection_error;
            die();//exit
          }
    }
    
        
    
}
//Class_db = new Database();