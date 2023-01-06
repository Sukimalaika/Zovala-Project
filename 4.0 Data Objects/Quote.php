<?php
require_once "Classloader.php";
class Quote extends Database implements Crud{

    public function __construct(){
        parent::__construct();//call my parent's constructor
    }
    public function insert(){
        //form - pass data
        $sql = "INSERT INTO quote(quote,author,dob,dod,category
        VALUES('Enjoy life',
        'Tim Keller',1950,'self-esteem') ";

        //execute the query
        $this->connection->query($sql);
    }
    public function get ($id = 0){
        //if id is set, then we return one quote get(1)
        //security - SQL INJECTION
         if ($id != 0)
            $sql = "SELECT * FROM quote WHERE qid=$id";
         else
          $sql = "SELECT * FROM quote";

          //execute the query

          $results = $this->connection->query($sql);

          //get resultset
          if ($id != 0)
              return $results->fetch_assoc();
           else
           return $results->fetch_all(MYSQLI_ASSOC);   
        //else we return all  the quotes
    }
    public function delete ($id){
        try{
            if($this->get ($id)){
                $sql = "DELETE FROM quote WHERE qid=$id";
            //execute query
            $this->connection->query($sql);
            echo "Record deleted successfully ";
            }else{
                echo "Record does not exist";
            }
        }catch(Exception $e){
            //the user will see this message
            echo "something went wrong, contact your administrator";
            //logging
        }
        
       
    }
}
$class_db =  new Quote();
//$class_db->insert();
//var_dump($class_db -> get());
$singleQuote = $test->get(5);//a simple array(assoc)
echo '<p>' .$singleQuote['qid'].'</p>';
echo '<p>' .$singleQuote['quote'].'</p>';
echo '<p>' .$singleQuote['author'].'</p>';

$allQuotes = $test->get();//2d array
foreach($allQuotes as $quotes){
    echo '<p>'.$quote['qid'].'</p>';
    echo '<p>'.$quote['quote'].'</p>';
    echo '<p>'.$quote['author'].'</p>';
}
//testing delete
$class_db->delete(5);