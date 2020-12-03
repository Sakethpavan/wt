<?php
$value1 = $_POST ["Value1"];
$value2 = $_POST ["Value2"];
if(isset($_POST["Add"])) {
	echo "The Addition is : ".($value1 + $value2);
}
if(isset($_POST["Sub"])) {
	echo "The Subtraction is : ".($value1 - $value2);
}
if(isset($_POST["Mul"])) {
	echo "The Multiplication is : ".($value1 * $value2);
}
if(isset($_POST["Div"])) {
	echo "The Division is : ".($value1 / $value2);
}
?>
