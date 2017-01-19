<?php
//                  ONE WAY TO CONNECT TO THE DATABASE
// try {
//   $pdo = new PDO('mysql:host=127.0.0.1;dbname=test_db', 'root', '');
// } catch(PDOException $e){
//   echo "Could not connect due to:";
//   die($e->getMessage());
// }

class Connect{
  public static function make(){
    // a public static function means that we can call it without creating a new instance, see below
    try {
      return new PDO('mysql:host=127.0.0.1;dbname=test_db', 'root', '');
    } catch(PDOException $e){
      echo "Could not connect due to:";
      die($e->getMessage());
    }

  }
}
//if the make function wasn't static, we would have to create an instance first ($i = new Connect()) and call the make method on that instance. Since it is static, we can call it directly from the calls using the squal dots (Class::Method;)
// $pdo = Connect::make();

//making queries through a class
class Query{

  protected $pdo;

  public function __construct($pdo){
    $this->pdo = $pdo;
  }

  public function all($table){
    $query = $this->pdo->prepare("Select * FROM $table");
    $query->execute();
    return $query;
  }
}

$query = new Query(Connect::make());
//have to pass in a connection so the class has access to it


// way to make query through a function
// function query($pdo, $str){
//   $query = $pdo->prepare($str);
//   $query->execute();
//   return $query;
// }



$findAll = $query->all('first_table')->fetchAll(PDO::FETCH_OBJ);
// var_dump($findAll[0]->name);
//the fatchAll returns an array filled with associative arrays.


require 'refactoring.php';
