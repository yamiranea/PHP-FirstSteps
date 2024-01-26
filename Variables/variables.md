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
