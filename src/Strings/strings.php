<?php
// Convert all characters in the string to uppercase and print on the screen, without modifying the original variable.

$character = "Harry Potter";
$charachter_upper = strtoupper($character);
echo $charachter_upper;
echo "\n ";

// Prints the length of the string variable on the screen.
$length = strlen($character);
echo $length;
echo "\n ";

// Prints on the screen the number of words in the string variable.
$character_words = str_word_count($character);
echo $character_words;
echo "\n ";

// Changes the characters of the string variable to reverse order and prints on the screen, without modifying the original variable.
$characters_reverse = strrev($character);
echo $characters_reverse;
echo "\n ";

// Replace the word 'Harry' in the $character variable to 'Ronald' and print on screen.
$character_name_replaced = str_replace("Harry", "Ronald", $character);
echo $character_name_replaced;
echo "\n ";