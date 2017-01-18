<?php
// PDO class is an interface to contact to the database

class Names{
  public $name;
}


try {
  $pdo = new PDO('mysql:host=127.0.0.1;dbname=test_db', 'root', '');
  // new PDO('whichdatabase:host=127.0.0.1;dbname=ExampleNAME', 'username', 'password');
} catch (PDOException $e){
  die('Could not connect.');
  // die($e->getMessage()); //this would return the actual message of what went wrong
}
//we could put this try block into a function and separate file to look cleaner


$statement = $pdo->prepare('select * from first_table'); // preparing the query
$statement->execute(); //executing the query

// var_dump($statement->fetchAll()); //using the fetchall returns both an associative array and an indexed array into one, so each column is duplicated, (ex: ['name']=>'John', [0] =>'John')
$results = $statement->fetchAll(PDO::FETCH_OBJ); //using PDO::FETCH_OBJ(object) specifices what we are fetching (in an object) so we don't get duplicate values(ex: ['name']=>'John' && [0] =>'John', becomes just ['name']=>'John') the info isn't duplicated




function prepareAndExecute($pdo, $str){// need to pass in the pdo instance, doesn't have access to it otherwise
  $query = $pdo->prepare($str);
  $query->execute(); //having the return statement here caused error
  return $query;
}
$second = prepareAndExecute($pdo, 'select * from first_table'); // just an example of a simple reusable function for queries

//had to prepare and execute a second query, not sure why, I guess statement can only be executed/used once
$class_results = $second->fetchAll(PDO::FETCH_CLASS, 'Names'); //same as the fetch above, but we fetch it using the class we created

// var_dump($results[0]->name);// returns this:  string(4) "john"


require 'index_pdo.php';
