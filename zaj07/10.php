<?php
if(isset($_POST["wyslij"]) && isset($_POST["liczba1"]) && isset($_POST["liczba2"]))
{
  if($_POST["liczba1"] == "" || $_POST["liczba2"] == "")
    die("Jedna z liczb ma zly format.");
  $num1 = $_POST["liczba1"];
  $num2 = $_POST["liczba2"];
  echo "$num1 + $num2 = " . ($num1 + $num2) . "</br>";
  echo "$num1 - $num2 = " . ($num1 - $num2) . "</br>";
  echo "$num1 * $num2 = " . ($num1 * $num2) . "</br>";
  if($num2 == 0) {
    echo "Liczba numer 2 jest rowna 0.";
  } else {
    echo "$num1 / $num2 = " . ($num1 / $num2) . "</br>";
  }
}
?>