## PHP STRINGS

- Convert all characters in the string to uppercase and print on the screen, without modifying the original variable.

  ```php
  $character = "Harry Potter";
  $charachter_upper = strtoupper($character);
  echo $charachter_upper;
  //RESULT = HARRY POTTER
  ```

- Prints the length of the string variable on the screen.

  ```php
  $length = strlen($character);
  echo $length;
  //RESULT = 12
  ```

- Prints on the screen the number of words in the string variable.

  ```php
  $character_words = str_word_count($character);
  echo $character_words;
  //RESULT = 2
  ```

- Changes the characters of the string variable to reverse order and prints on the screen, without modifying the original variable.

  ```php
  $characters_reverse = strrev($character);
  echo $characters_reverse;
  //RESULT = rettoP yrraH
  ```

- Replace the word 'Harry' in the $character variable to 'Ronald' and print on screen.

  ```php
  $character_name_replaced = str_replace("Harry", "Ronald", $character);
  echo $character_name_replaced;
  //RESULT = Ronald Potter
  ```
