<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="12.php">12</a>
  </body>
</html>

<?php
session_start();
$_SESSION["sesja"] = "Hello World";
?>