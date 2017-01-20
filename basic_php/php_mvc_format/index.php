<?php


require 'database/database.php';
require 'query.php';

$findAll = $query->all('first_table')->fetchAll(PDO::FETCH_OBJ);
// var_dump($findAll);


require 'view.php';
