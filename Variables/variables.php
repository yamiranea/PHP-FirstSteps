<?php
echo "<div>";
print_r("<h3>PHP Variables</h3>");

/* 
PART 1 - TASKS:
-Declare a variable for each data type and assign a value to it
-Display the value of that variable in the console and on the screen. Boolean (printing true or false), an array, and a null value (printing NULL).
*/
print_r("<h4>TASK 1: Declare a variable for each data type and assign a value to it. Display the value of that variable in the console and on the screen. Boolean (printing true or false), an array, and a null value (printing NULL).</h4> \n");


// String
$string = "Hello, how are you?";
echo "String: " . $string . "\n" . "<br>";

// Integer
$age = 20;
echo "Integer: " . $age . "\n" . "<br>";

// Float
$pi_number = 3.14;
echo "PI Number: " . $pi_number . "\n" . "<br>";

// Boolean 
$yellow_sun = true;
echo "Yellow sun: " . gettype($yellow_sun) . " is: " . var_export($yellow_sun, true) . "\n" . "<br>";

// Array
$shopping_list = ["vegetables", "fruits", "dairy", "meat"];
print_r($shopping_list) . "\n" . "<br>";
echo "\n";

// Null
$null = null;
echo "Declaring a variable type: " . gettype($null) . "\n" . "<br>";


/* 
PART 2: What type of data are the following variables
*/
print_r("<h4>TASK 2: What type of data are the following variables?</h4> \n");

// Easy
echo "<b>Easy \n </b><br>";

$name = "Luna";
$last_name = "Lovegood";
$age = 42;
$Ravenclaw = true;

$nombre = "Luna";
var_dump($nombre);
echo "\n <br>";
$apellido = "Lovegood";
var_dump($apellido);
echo "\n <br>";
$edad = 42;
var_dump($edad);
echo "\n <br>";
$Ravenclaw = true;
var_dump($Ravenclaw);
echo "\n <br><br>";
