<?php

//database config

return [
  'database' => [
    'name' => 'test_db',
    'username' => 'root',
    'password' => '',
    'connection' => 'mysql:host=127.0.0.1',
    'options' => [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]
    //OPTIONS: this last line simply states what it does if there is an error when we try to connect to the database. EXCEPTION gives us more info about what went wrong, most detailed out of the three, we could also use ERRMODE_SILENT to just give us the error codes, or ERRMODE_EXCEPTION to just raise a warning.
  ]


];
