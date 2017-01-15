<?php

$names = ['jeff', 'john', 'jenn', 4];

// foreach ($names as $n) {
//   echo $n;
//   //simple for loop for the names array, except the variable it iterates is the first thing named
// }

$associativeNames = [ 'age' => 34, 'name' => 'John', 'hobby' => 'bowling'];
//example of an associative Array

$names[] = 'pushedName';
$associativeNames['test'] = 'Just pushing into the array';
// how you push into a regular and associative array


// var_dump($names);
// you can't echo an array directly, it expects a string or a number, but using the var_dump function, it will display the entire array, like so:
// array(5) { [0]=> string(4) "jeff" [1]=> string(4) "john" [2]=> string(4) "jenn" [3]=> int(4) [4]=> string(10) "pushedName" }


// die(); //the die function stops the file from being read past that point, so if we loaded this with the die() function here, it wouldn't load the html from view.php




require 'view.php'

?>
