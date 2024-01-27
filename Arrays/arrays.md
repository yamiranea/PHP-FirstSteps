## PHP Arrays

- Create an array of 10 numbers
- Get the length of the array and print on screen and console.

  ```php
  $numbers = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);

  echo count($numbers);
  ```

- Add a string value to the previously created array and print on screen.

```php
array_push($numbers, " even numbers");
print_r($numbers);
```

- Create a new array and concatenate it with the previous one and print it on the screen.

  ```php
  $letters = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j");

  $new_array = array_merge($numbers, $letters);
  print_r($new_array);

  ```

- Create a function that prints on console and screen all the numbers of an array in a list.

```php
   function printNumbers($numbersArray)
   {
   echo "Numbers on screen:";
   echo "<ul>";
   foreach ($numbersArray as $number) {
   echo "<li>$number</li>";
   }
   echo "</ul>";

   // Imprimir en consola
   echo "Numbers in console:";
   foreach ($numbersArray as $number) {
   echo "$number";
   }
   }

   $numbersArray = [1, 2, 3, 4, 5];
   printNumbers($numbersArray);
```

- Create a function that adds a number to the array.

```php
    function addNumber(&$numbersArray)
    {
    (array_push($numbersArray, 6));
    };

    addNumber($numbersArray);
    print_r($numbersArray);
```
