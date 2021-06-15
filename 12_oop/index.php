<?php

// What is class and instance

// Create Person class in Person.php
require_once "Person.php";
require_once "Student.php";

$std = new Student('Ajwad',26,125);

echo '<pre>';
var_dump($std);
echo '</pre>';

// $per = new Person('Mahi', 25);
// echo $per-> age. '<br>';
// echo $per-> name;

// $per-> setSalary(400);
// echo '<pre>';;
// var_dump($per);
// echo '</pre>';


// $per2 = new Person('Asha', 24);


// echo $per->getSalary().'<br>';
// echo Person ::getCounter();

// $per2->setSalary(800);
// echo '<pre>';
// var_dump($per2);
// echo '</pre>';

// echo $per2->getSalary();

// Create instance of Person

// Using setter and getter