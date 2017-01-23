<?php

// single line comment
# single line comment

/*
multi
line
comment
*/

/*
 * This is a DocBlock comment, multi line format,
 * with each line starting with a space, *, then another space
 * @author: Jerrod
*/


// VARIABLES: start with a $, followed by an underscore _ or letter abc. Can't start with a number
// var_dump() can be used to tell what type a variable is
//other useful functions: is_int(), is_float(), is_bool(), is_string()
/*   TYPES OF VARIABLES
integer = 1
float = 1.1
string = 'hey'
boolean = true
*/



/*  TYPES OF OPERATORS
Arithmatic: +, -, /, *
you can change a variable as shown below:
$a = 1
$a += 2, changes the variable a to 3
$a -= 2
$a /= 2
$a *= 2
$a ** 2, should be the same as saying 1 to the power of two

STRINGS:
$s = 'hey'
You can concatenate a string as follows:
echo $s . 'there';
You can add to a string as follows:
$s .= 'there'
*/




$a = '5';
$b = 5;

if($a === $b){// triple = is for testing it two things are identical
  echo "exactly the same";
} elseif ($a == $b) {// double = is for testing it two things are similar
  echo "similar";
} else {
  echo "not the same";
}


$dateYear = date('Y'); //equal to the current year
$dateMonth = date('M'); //equal to the current month
$dateDay = date('D'); //equal to the current day
$mod = date("F d Y H:i:s.", getlastmod());
//the date function needs at least one parameter. However, as the $mod variable shows, we can have the first paramter be a format and the second one be a datetime to be formatted. At least with the getlastmod() function. This function saves the date that the file is modified or is updated anytime the file is altered. *****HOWEVER: this funcition only cares about actual code in the file, changes to the comments do nothing (don't count as an update)

echo $dateYear . "\n";
echo $dateMonth . "\n";
echo $dateDay . "\n";
echo $mod . "\n";



// INCLUDING PHP FILES IN HTML
// <?php include 'filename.php'; ? > (no space between ? and >)
