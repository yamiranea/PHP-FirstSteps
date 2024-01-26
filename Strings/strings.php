<?php
// Convert all characters in the string to uppercase and print on the screen, without modifying the original variable.

$character = "Harry Potter";
$charachter_upper = strtoupper($character) . "\n";
echo $charachter_upper;

// Prints the length of the string variable on the screen.
$length = strlen($character) . "\n";
echo $length;

// Prints on the screen the number of words in the string variable.
$character_words = str_word_count($character) . "\n";
echo $character_words;

// Changes the characters of the string variable to reverse order and prints on the screen, without modifying the original variable.
$characters_reverse = strrev($character) . "\n";
echo $characters_reverse;

// Replace the word 'Harry' in the $character variable to 'Ronald' and print on screen.
$character_name_replaced = str_replace("Harry", "Ronald", $character)
    . "\n";
echo $character_name_replaced;