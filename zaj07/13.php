<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><?php echo isset($_SESSION["sesja"]) ? $_SESSION["sesja"] : "brak sesji";  ?></h1>
    <a href="14.php">14</a>
  </body>
</html>