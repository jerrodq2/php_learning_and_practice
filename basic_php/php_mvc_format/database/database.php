<?php

//file that creates the connection to the db

$config = require 'config.php';
//this config variable is our connection settings


Class Connect{
  public static function make($config){
    try {
      return new PDO(
        $config['connection'].';dbname='.$config['name'],
        $config['username'],$config['password'],$config['options']
      );
    } catch (PDOException $e) {
      echo "Could not connect due to:";
      die($e->getMessage());
    }

  }
}
