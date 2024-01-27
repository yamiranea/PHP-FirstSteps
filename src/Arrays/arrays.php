<?php
// Create an array of 10 numbers.

$numbers = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);

// Get the length of the array and print on screen and console.
echo count($numbers) . "\n";

// Add a string value to the previously created array and print on screen.

array_push($numbers, " even numbers");
print_r($numbers) . "\n";

// Create a new array and concatenate it with the previous one and print it on the screen.
$letters = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j");

$new_array = array_merge($numbers, $letters);
print_r($new_array) . "\n";

// Create a function that prints on console and screen all the numbers of an array in a list.

function printNumbers($numbersArray)
{
    echo "Numbers on screen:\n";
    echo "<ul>";
    foreach ($numbersArray as $number) {
        echo "<li>$number</li>";
    }
    echo "</ul>";

    // Imprimir en consola
    echo "Numbers in console:\n";
    foreach ($numbersArray as $number) {
        echo "$number\n";
    }
}

$numbersArray = [1, 2, 3, 4, 5];
printNumbers($numbersArray);

// Create a function that adds a number to the array.

function addNumber(&$numbersArray)
{
    (array_push($numbersArray, 6));
};

addNumber($numbersArray);
print_r($numbersArray);
