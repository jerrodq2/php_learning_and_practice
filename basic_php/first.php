<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Hello World</h1>
    <h1>
      <?php
       $test = 'Second World';
        //  $test is a variable, anything with a dollar sign is a variable
        echo "This is the $test";
          // double quotation marks will evaluate variables for what they are, single quotes will read things literatlly and it would literally print out 'This is the $test'
        echo ', for php in the ' . $test //using a space . and second space is for concatenating or adding on to a string, similar to += in javascript
      ?>
    </h1>

    <h3>
      <?php
        $name = $_GET['name']; //the _GET grabs a url variable, so the normal route is localhost:5000, but if it is localhost:5000?name=John, then $name is equal to John. Whithout the url variable though, the echo line below shows this:    Notice: Undefined index: name in /Users/jerrodq2/Desktop/php/test.php on line 20
        echo $name;
        // echo 'Url variable name = ' . $_GET['name'];  //this line works just like the echo above, just a one liner that uses string concatenation

      ?>
    </h3>


    <h3>Last test: <?= 'Hey there ' . $_GET['name'];?></h3>
    <!-- The h3 uses this the < ?= (without the space) which is a short hand in php for echoing out some text -->


    <h4><?php $name = htmlspecialchars($_GET['name']);
        //using the built in function htmlspecialchars() it will ignore whatever html you put in the url. For example, if after localhost:5000/ if they typed ?name= <small>John</small>, php will read that html and John will appear smaller. But in this line, with the built in function, name will not be equal to John in small text but it will literally be equal to '<small>John</small>', this is an example of security so users can't manipulate your data
      echo $name;
     ?></h4>
  </body>
</html>
