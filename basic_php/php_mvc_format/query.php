<?php

//this file creates the query class we use to make queries

class Query{

  protected $pdo;

  public function __construct($pdo){
    $this->pdo = $pdo;
  }

  public function all($table){
    $query = $this->pdo->prepare("Select * From $table");
    $query->execute();
    return $query;
  }


}

//$config was created in the database.php file
$query = new Query(Connect::make($config['database']));
