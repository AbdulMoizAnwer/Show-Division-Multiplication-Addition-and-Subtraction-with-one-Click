<?php 
$num1 = $_GET['n1'];
$num2 = $_GET['n2'];
$result = $num1 + $num2;
echo "The addition of number one and number two is ";
echo $result;
echo "<br>";

$num1 = $_GET['n1'];
$num2 = $_GET['n2'];
$result = $num1 - $num2;
echo "The subtraction of number two from number one is "; 
echo $result;
echo "<br>";

$num1 = $_GET['n1'];
$num2 = $_GET['n2'];
$result = $num1 * $num2;
echo "The multiplication of number one and number two is "; 
echo $result;
echo "<br>";

$num1 = $_GET['n1'];
$num2 = $_GET['n2'];
$result = $num1 / $num2;
echo "The division of number one from number two is "; 
echo $result;
echo "<br>";

?>
