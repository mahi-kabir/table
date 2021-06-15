<?php
require_once "Person.php";

class Student extends Person{
    public string $id;

    public function __construct($name, $age, $id){
        $this -> id = $id;
        parent::__construct($name,$age);
    }
}