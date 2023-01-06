<?php

//constants
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","class_db");
define("DB_PORT","3306");

require_once 'vendor/autoload.php';

// Using Medoo namespace.

use Illuminate\Support\Facades\DB;
use Medoo\Medoo;
 
// Connect the database.
$database = new Medoo([
    'type' => 'mysql',
    'host' => DB_HOST,
    'database' => DB_NAME,
    'username' => DB_USER,
    'password' => DB_PASS
]);

//Insert
var_dump($database->select('role',['id','name'],['id'=>2] ));