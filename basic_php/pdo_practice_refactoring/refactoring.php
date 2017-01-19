<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Refactoring PDO PHP practice</h1>
    <h2>All names in first_table</h2>
    <ul>
      <?php foreach ($findAll as $key) : ?>
        <li>Name: <strong><?=$key->name?></strong></li>
      <?php endforeach ?>
    </ul>
  </body>
</html>
