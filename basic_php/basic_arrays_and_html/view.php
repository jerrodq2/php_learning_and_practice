<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>First example</h1>
    <ul>
      <?php
        foreach ($names as $n) {
          echo "<li>$n</li>";
        }
      ?>
    </ul>

    <h1>Second Example: using shorthand in html</h1>
    <ul>
      <?php  foreach ($names as $n) : ?>
        <li><?= $n; ?></li>
      <?php endforeach ?>
    </ul>

    <h1>Using associative Array</h1>
    <ul>
      <?php  foreach ($associativeNames as $n) : ?>
        <li><?= $n; ?></li>
      <?php endforeach ?>
    </ul>

    <h1>Associative Array, accessing the keys</h1>
    <ul>
      <?php  foreach ($associativeNames as $key => $n) : ?>
        <li><?= "The key: $key is equal to $n"; ?></li>
      <?php endforeach ?>
    </ul>

  </body>
</html>
