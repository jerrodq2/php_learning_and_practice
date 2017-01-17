<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Task for the day</h1>

    <ul>
      <?php foreach ($homework as $key => $value) : ?>
        <li><strong><?= ucwords($key)?>: <?= $value ?></strong></li>
      <?php endforeach ?>
    </ul>

    <h1>Other format</h1>
    <ul>
      <li><strong>Title: <?= $homework['title'] ?></strong></li>
      <li><strong>Due date: <?= $homework['due'] ?></strong></li>
      <li><strong>Assigned to: <?= $homework['assigned_to'] ?></strong></li>
        <li><strong>Completed: <?= $homework['completed']? 'Complete' : 'Incomplete' ?></strong></li>
    </ul>


  </body>
</html>
