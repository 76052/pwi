<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hej, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Witaj na stronie.</h1>
    </div>
    <p>
        <a href="index1.php" class="btn btn-warning">Idź do strony głównej</a>
        <a href="logout.php" class="btn btn-danger">Wyloguj się</a>
    </p>
</body>
</html>