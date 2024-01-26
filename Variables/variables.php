<?php
echo "<div>";
print_r("<h3>PHP Variables</h3>");

/* 
PART 1 - TASKS:
-Declare a variable for each data type and assign a value to it
-Display the value of that variable in the console and on the screen. Boolean (printing true or false), an array, and a null value (printing NULL).
*/
print_r("<h4>PART 1: Declare a variable for each data type and assign a value to it. Display the value of that variable in the console and on the screen. Boolean (printing true or false), an array, and a null value (printing NULL).</h4> \n");


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
print_r("<h4>PART 2: What type of data are the following variables?</h4> \n");

// Easy level
echo "Easy \n ";

$name = "Luna";
var_dump($name);
echo "\n ";
$last_name = "Lovegood";
var_dump($last_name);
echo "\n ";
$age = 42;
var_dump($age);
echo "\n ";
$Ravenclaw = true;
var_dump($Ravenclaw);
echo "\n ";

// Medium level
echo "Medium level \n ";

$average = (8 + 9.5 + 9 + 10 + 8) / 5;
var_dump($average);
echo "\n";
$full_name = $name . " " . $last_name;
var_dump($full_name);
echo "\n";
$test_doing = (bool) 1;
var_dump($test_doing);
echo "\n";

// Advanced level
echo "Advanced level \n ";

$questions_amount = 5 + "5";
var_dump($questions_amount);
echo "\n ";
$answers_amount = "5" + 5;
var_dump($answers_amount);
echo "\n ";
$max_average = $answers_amount / 1.0;
var_dump($max_average);
echo "\n ";
$nargles = 3 . "5 nargles";
var_dump($nargles);
echo "\n ";

/* 
PART 3 - PART: assuming these variables, what is the result according to the truth tables?
*/
print_r("<h4>PART 3 - TASKS: assuming these variables, what is the result according to the truth tables?.</h4> \n");
$is_a_big_cat = true;
$he_likes_to_eat = true;
$he_can_fly = false;
$he_has_2_legs = false;

var_dump($is_a_big_cat && $he_likes_to_eat);
echo "\n <br>";
var_dump($is_a_big_cat || $he_can_fly);
echo "\n <br>";
var_dump($he_can_fly || $he_has_2_legs);
echo "\n <br>";
var_dump(!$he_likes_to_eat);
echo "\n <br>";
var_dump(!$he_likes_to_eat || $is_a_big_cat);
echo "\n <br>";