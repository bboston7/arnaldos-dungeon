<?php
  $HISTORY = "history.txt";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Arnaldo's Dungeon</title>
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
    <h1>Arnaldo's Dungeon</h1>
<?php
      $lines = file($HISTORY, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
      foreach ($lines as $line) {
        $line = str_replace("--", "&mdash;", $line);
?>
        <p><?=$line?></p>
<?php
      }
?>
  </body>
</html>
