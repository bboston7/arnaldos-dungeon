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
        <p class=quote><?=$line?></p>
<?php
      }
?>
    <hr/>
    <h2>What is this?</h2>
    <p>
      This site catalogs what little information we have about Arnaldo's
      Dungeon.
      If you know something about The Dungeon that we don't, you can add it to
      the virtual dungeon yourself
      <a href="https://github.com/bboston7/arnaldos-dungeon">on github</a>
      or email it to
      <a href="mailto:dungeon@untitled.earth">dungeon@untitled.earth</a>.
    </p>
  </body>
</html>
