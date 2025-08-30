<?php 
// ## PHP Lab Problems: Arrays

# 3. Create an array of 7 days of the week and display today’s day by using the current date function.

$daysOfWeek = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
echo "Today is " . $daysOfWeek[date("w")] . "\n";

echo "\n";

# 6. Create an associative array for a person (name, age, email) and display the data in a formatted way.

$person = array(
    "name" => "Maryam Tarek",
    "age" => 21,
    "email" => "maryam@gmail.com"
);

echo "Name: " . $person["name"] . "\n";
echo "Age: " . $person["age"] . "\n";
echo "Email: " . $person["email"] . "\n";

echo "\n";

# 9. Create a 2D array of products (id, name, price). Use a loop to find and display the product with the highest price.

$products = array(
    array("id" => 1, "name" => "Product A", "price" => 10.99),
    array("id" => 2, "name" => "Product B", "price" => 15.99),
    array("id" => 3, "name" => "Product C", "price" => 7.99)
);

$highestProduct = array("price" => 0);

foreach ($products as $product) {
    if ($product["price"] > $highestProduct["price"]) 
        $highestProduct = $product;
}

echo "Product with the highest price:\n";
echo "ID: " . $highestProduct["id"] . "\n";
echo "Name: " . $highestProduct["name"] . "\n";
echo "Price: " . $highestProduct["price"] . "\n";

echo "\n";

// ## PHP Lab Problems (15 Tasks)

# Q1: Arithmetic & Assignment Operators
# A bookstore sells a book for 120 EGP. Add 20 EGP delivery fee, apply 10% discount, and print the final price.

$bookPrice = 120;
$deliveryFee = 20;
$discount = 0.1;

$finalPrice = ($bookPrice + $deliveryFee) * (1 - $discount);
echo "The final price is: " . $finalPrice . " EGP\n";

echo "\n";

# Q2: Comparison & Logical Operators
# Check if a grade (0–100) is Pass (≥50) or Fail (<50).

$grade = 75;

if ($grade >= 50) {
    echo "Pass";
} else {
    echo "Fail";
}

echo "\n\n";

# Q3: String Operators
# Concatenate 'Omar' and 'Ali' → 'Welcome Omar Ali to PHP class.'

echo "Welcome " . "Omar" . " " . "Ali" . " to PHP class.\n";

echo "\n";

# Q4: Increment/Decrement Operators
# Print countdown from 5 to 1 using --.

$count = 5;
while ($count > 0) {
    echo $count--;
}

echo "\n\n";

# Q5: If statement
# Check if a number is even.

$number = 4;

if ($number % 2 == 0) {
    echo $number . " is even.";
} else {
    echo $number . " is odd.";
}

echo "\n\n";

# Q6: If Elseif Else
/*
Marks evaluation:
- ≥90 → Excellent
- ≥75 → Very Good
- ≥50 → Pass
- Else → Fail
*/

$mark = 85;

if ($mark >= 90) {
    echo "Excellent";
} elseif ($mark >= 75) {
    echo "Very Good";
} elseif ($mark >= 50) {
    echo "Pass";
} else {
    echo "Fail";
}

echo "\n\n";

# Q7: Switch Statement
# Day of the week
$day = 3;

switch ($day) {
    case 1:
        echo "Saturday";
        break;
    case 2:
        echo "Sunday";
        break;
    case 3:
        echo "Monday";
        break;
    case 4:
        echo "Tuesday";
        break;
    case 5:
        echo "Wednesday";
        break;
    case 6:
        echo "Thursday";
        break;
    case 7:
        echo "Friday";
        break;
    default:
        echo "Invalid day";
}

echo "\n\n";

# Q8: While Loop
# Print even numbers from 2-20

$number = 2;
while ($number <= 20) {
    echo $number . " ";
    $number += 2;
}

echo "\n\n";

# Q9: Do While Loop
# Number guessing game (1–5) until correct.

$correctNumber = 3;
$guess = 0;

do {
    $guess = rand(1, 5);
    echo "Guess: " . $guess . "\n";
} while ($guess !== $correctNumber);

echo "Correct! The number was " . $correctNumber . "\n";

echo "\n";

# Q10: For Loop factorial
# Multiplication table of 5.

// factorial
$factorial = 1;
for ($i = 5; $i > 1; $i--) {
    echo $factorial . " * " . $i . " = " . ($factorial * $i) . "\n";
    $factorial *= $i;
}

function recursion_factorial($num) {
    if ($num === 0) {
        return 1;
    }
    return $num * recursion_factorial($num - 1);
}

echo "Factorial of 5 is: " . $factorial . "\n\n";

// multiplication table
echo "Multiplication table of 5:\n";
for ($i = 1; $i <= 10; $i++) {
    echo "5 x " . $i . " = " . (5 * $i) . "\n";
}

echo "\n";

# Q11: Foreach & Arrays
# Display 5 student names using foreach.

$students = array("Maryam", "Muhammad", "Janna", "Sara", "Ahmed");

foreach ($students as $student) {
    echo "Student Name: " . $student . "\n";
}

echo "\n";

# Q12: Superglobals
/*
- $_GET → read ?name=Omar → 'Welcome Omar'
- $_POST → login form (username/password)
- $_SERVER → print script name
- $_SESSION → store login username
- $_COOKIE → remember preferred background color
*/



# Q14: User-Defined Function
# Create a function calculateArea($radius) that returns the area of a circle. Call it with radius 5.

function calculateArea($radius) {
    return 3.14 * $radius * $radius;
}

echo "Area of circle with radius 5 is: " . calculateArea(5);

echo "\n";