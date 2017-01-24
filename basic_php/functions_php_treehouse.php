<?php

$user = 'Mike';

function isMike(){
  global $user;//need to do this so the function has access to an outside variable
  if($user == 'Mike'){
    echo "is Mike";
  } else {
    echo "not Mike";
  }
}

// isMike();
//  ARGUMENTS ****************************************
function printName($name){
  var_dump($name);
}
// printName('Jack');


//  USING FUNCTIONS WITH ARRAYS ****************************************
function multipleNames($arr){
  if(!is_array($arr)){
    echo "not array";
  } else {
    foreach ($arr as $val) {
      echo "$val" . "\n";
    }
  }
}
// multipleNames(['jack', 'brown']);


//  DEFAULT VALUES FOR ARGUMENTS ****************************************
function friend($name = 'friend'){
  echo "hey $name";
}
// friend('john');
// friend();


//  OPTIONAL VALUES FOR ARGUMENTS ****************************************
function greeting($name='John', $timeOfDay = Null){
  if($timeOfDay){
    echo "hey $name, it is $timeOfDay";
  } else {
    echo "hey $name, it is noon";
  }
}
// greeting('Jenn', '5pm');
// greeting('Jenn');

// VARIABLES NAMED AFTER FUNCTIONS ****************************************
function hello(){
  echo "hello";
}
$func = 'hello';
// $func();
//since the variable $func's value is equal to the name of a function (hello and 'hello'), I can call the function with the same name by calling the variable as you would a function. So, since $func is equal to 'hello', if I do $func(); it looks for a function named after the variable's value (hello) and calls it.



// CLOSURES ****************************************
$greet = function(){
  echo "hello there \n";
};
//closures are functions without names. this is one example
// $greet();

$name = 'john';
$secondGreet = function() use ($name){
  //we need to use the use keyword with closures so they can use variables outside of their scope
  echo "hello there $name \n";
};
// $secondGreet();


// ********************************* BUILT IN FUNCTIONS *********************************
// STRINGS ****************************************

//string length
$str = 'hey there, how are you doing?';
echo strlen($str) . "\n";

//substring
echo substr($str, 3) . "\n";//pass in the string and where the substring should start
echo substr($str, 0, 5) . "\n"; //third argument is optional, says how far the substring goes


//string position
echo strpos($str, 'there') . "\n";//finds the start of the 2 argument in the string, and returns the index it starts at, so this would return 4, since the t in 'there' is at index 4
echo strpos($str, 'z') . "\n";//returns nothing if not found




// ARRAYS ****************************************
$arr = [1,2,3,4,5];
