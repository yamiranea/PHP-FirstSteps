## PHP Variables

### PART 1

- Declare a variable for each data type and assign a value to it
- Display the value of that variable in the console and on the screen. Boolean (printing true or false), an array, and a null value (printing NULL).

  ```php
  String
  $string = "Hello, how are you?";

  Integer
  $age = 20;

  Float
  $pi_number = 3.14;

  Boolean
  $yellow_sun = true;

  Array
  $shopping_list = ["vegetables", "fruits", "dairy", "meat"];

  Null
  $null = null;
  ```

### PART 2

- What type of data are the following variables:

  ```php
  Easy level
  $nombre = "Luna"; //string
  $apellido = "Lovegood"; //string
  $edad = 42; //integer
  $Ravenclaw = true; //boolean

  Medium level
  $average = (8 + 9.5 + 9 + 10 + 8) / 5; //float = 8.9
  $full_name = $name . " " . $last_name; // string = Luna Lovegood
  $test_doing = (bool) 1; // boolean = true

  Advanced level
  $questions_amount = 5 + "5"; // int = 10
  $answers_amount = "5" + 5; // int = 10
  $max_average = $answers_amount / 1.0; // float = 10.0
  $nargles = 3 . "5 nargles"; // string = 35 nargles
  ```

### PART 3

- Assuming these variables, what is the result according to the truth tables?

  ```php
  $is_a_big_cat = true;
  $he_likes_to_eat = true;
  $he_can_fly = false;
  $he_has_2_legs = false;

  $is_a_big_cat && $he_likes_to_eat; //true
  $is_a_big_cat || $he_can_fly; //false
  $he_can_fly || $he_has_2_legs; //false
  !$he_likes_to_eat; //true
  !$he_likes_to_eat || $is_a_big_cat; //true
  ```

### PART 4

- Declare two variables and give them an integer value and print both on the screen.

  ```php
  var_dump($current_year); // RESULT =  int(2024)
  var_dump($past_year); // RESULT =  int(2023)
  ```

- Sums both integer variables and prints on the screen.

  ```php
  echo ("If we add our years variables the result is "  . $current_year + $past_year); // RESULT = 4047
  ```

- Declare two variables and give them a value of 1 and 0 type integer and print the data type on the screen and
  console

  ```php
  $number_one = 1;
  $number_two = 0;

  var_dump($number_one); // RESULT = int(1)
  var_dump($number_two); // RESULT = int(0)
  ```

- Change the data type of the previous variables to Boolean and print the new data type on the screen and console.

  ```php
  $number_one = true;
  $number_two = false;

  echo ($number_one . " has changed his value to " . gettype($number_one)); // 1 has changed his value to boolean

  echo ($number_two . " has changed his value to " . gettype($number_two)); // 0 has changed his value to boolean
  ```

- Create a function that receives two numbers as parameters and returns the sum of them. Print on screen and by console the result

  ```php
  $orange_price = 20;
  $apple_price = 10;

  function getSum($orange_price, $apple_price)
  {
    $fruit_sum = $orange_price + $apple_price;
    return $fruit_sum;
  };

  $fruit_addition = getSum($orange_price, $apple_price);

  echo ("I spent buying fruits " . $fruit_addition . " euros"); // I spent buying fruits 30 euros
  ```

- Create a function that determines whether a number is odd or even. Print to console and screen

```php
  $number = 24;

  if (($number % 2) == 0) {
    echo "The number is even";
  } else {
    echo "The number is odd";
  }; // The number is even
```
