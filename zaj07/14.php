<?php
session_start();
if(isset($_SESSION["sesja"])) {
  session_destroy();
}
?>

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