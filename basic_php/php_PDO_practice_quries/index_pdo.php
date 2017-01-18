<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>PDO TEST</h1>
    <h2>Results for first table</h2>
    <ul>
      <?php foreach ($results as $val) : ?>
        <li>Name is: <?= $val->name ?></li>
      <?php endforeach ?>
    </ul>

    <h2>Results Using a class</h2>
    <ul>
      <?php foreach ($class_results as $val) : ?>
        <li>Name is: <?= $val->name ?></li>
      <?php endforeach ?>
    </ul>
  </body>
</html>
