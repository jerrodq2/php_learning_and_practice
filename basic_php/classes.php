<?php
class Product{

  protected $name;
  // using protected means that the name propery has a protected visibility, you can't access it. It has a default name of 'name'

  public $last;
  private $final;


  public function __construct($name = 'name'){
    $this->name=$name;
    // __construct is the constructor method, anything in here is automatically triggered upon instantiation or when the instance is created
  }

  public function show(){
    var_dump($this);
  }

  public function setFinal($data){
    $this->final = $data;
  }
}

$a = new Product('car');
$b = new Product();
$b->last='l';//this is how you set attributes of a class in php, only if they are public

// $b->final='f'; //this breaks, it is private, so I can't set or access it
$b->setFinal('eh'); //this is how you set or access a private attribute, using a pre-written public method

var_dump($a);
$b->show(); //this -> is how you access methods or attributes of classes in php
