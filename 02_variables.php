<?php

// What is a variable

// Variable types


// Declare variables

$name = "mahi";
$age = 24;
$isMale = false;
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age .'<br>';
echo $isMale. '<br>';
echo $height;

// Print types of the variables
echo getType($name);
echo getType($age);
echo gettype($isMale);
echo getType($height);


// Print the whole variable
echo '<br>';
var_dump($isMale);

// Change the value of the variable
$name = 256;
echo getType($name);

// Print type of the variable
 is_string($name). '<br>';

// Variable checking functions
echo '<br>';
echo isset($name). '<br>';

// Check if variable is defined

// Constants
define('PI', 3014);
echo PI .'<br>';
// Using PHP built-in constants
echo PHP_INT_MAX.'<br>';