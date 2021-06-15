<?php

class Person{
    public $name;
    public int $age;
    private int $salary;
    public static $counter=0;

    public function __construct($name, $age){
        $this -> name = $name;
        $this -> age = $age;
        self::$counter++;
    }

    public function setSalary($salary){
        $this->salary = $salary;
    }

    public function getSalary(){
        return $this -> salary;
    }

    public static function getCounter(){
        return self::$counter++;
    }
}