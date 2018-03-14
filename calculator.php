<!DOCTYPE html>
<head>
<meta charset="utf-8"/>
<title>Calculator</title>
<style>
body{
	width: 760px; /* how wide to make your web page */
	background-color: teal; /* what color to make the background */
	margin: 0 auto;
	padding: 0;
	font:12px/16px Verdana, sans-serif; /* default font */
}
div#intro{
	background-color: #FFF;
	font:24px/32px Arial, sans-serif;
}
div#main{
	background-color: #FFF;
	margin: 0;
	padding: 10px;
}
</style>
</head>
<body><div id="intro">

Enter the calculation you wish to complete.<br>

</div>

<div id="main">
<form method="POST">
	<label>Number 1: <input type="number" name="num1" step="any" /></label> <!--create textbox that accepts first number -->
	<label>Number 2: <input type="number" name="num2" step="any" /></label><br> <!--create textbox that accepts second number -->
	<!--create radio input, user can choose from 1 of the 4 basic arithmetic operations -->
  <input type="radio" name="operation" value="add"> + <br>
  <input type="radio" name="operation" value="subtract"> - <br>
  <input type="radio" name="operation" value="multiply"> * <br>
  <input type="radio" name="operation" value="divide"> / <br>
  <input type="submit" value="Calculate"/> <!--submit form to complete operation -->
</form>

<?php

//create 4 basic arithmetic functions
function add($x, $y){
	return $x + $y;
}

function subtract($x, $y){
	return $x - $y;
}

function multiply($x, $y){
	return $x * $y;
}

function divide($x, $y){
	if($y != 0) {return $x / $y;}
	else {return "Error - divide by 0";} //edge case - cannot divide by zero
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //if calculate button has been pressed, proceed
	$num1 = $_POST['num1']; //store first number entered
	$num2 = $_POST['num2']; //store second number entered
	$operation = $_POST['operation']; //identify which operator user selected, and then do corresponding action & print result
	if($operation == "add") {
  echo add("$num1", "$num2");
}else if($operation == "subtract") {
  echo subtract("$num1", "$num2");
}else if($operation == "multiply") {
  echo multiply("$num1", "$num2");
}else if($operation == "divide") {
  echo divide("$num1", "$num2");
}
}
//https://stackoverflow.com/questions/14747803/how-to-send-radio-button-value-in-php used for reference

?>

</div></body>
</html>