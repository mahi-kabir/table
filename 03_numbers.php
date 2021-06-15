<?php

// Declaring numbers

// Arithmetic operations

// Assignment with math operators

// Increment operator

// Decrement operator

// Number checking functions

// Conversion

// Number functions
echo "floor(2.6) ". floor(2.6).'<br>';
echo "ceil(2.6) ". ceil(2.6).'<br>';
echo "pow(2.6)  ". pow(3,3).'<br>';

// Formatting numbers
$strNum = 40.23;
$num = (int)$strNum;
$str = (string)$num;
echo $str;
$num = 4582365.2654745;
echo number_format($num , 2, '.', ',');

// https://www.php.net/manual/en/ref.math.php
