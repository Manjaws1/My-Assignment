<?php

//1.Write a PHP Script to demonstrate the difference between Functional Programming, Procedural Programming and Object-Oriented Programming 
//Funtioncal programming
 echo (22 + 12)."<br>";

 // procedural programming

function add($value1, $value2){
    $sum= $value1 + $value2;
    echo "Sum of two numbers= ".$sum."<br>";  
}

add(22, 12);

//Object Oriented programming
class Add {
    public $value1 = 22;
    public $value2 = 12;

   public function SumofNumber(){
    $sum = $this-> value1 + $this-> value2;
    echo "Sum of two numbers= ".$sum."<br>"; 
   } 
}
$addition = new Add();
$addition-> SumofNumber();


//3.Write an OOP PHP code that declare a class called Fruit, the class should consist of two properties namely ($name and $color). Add two method to the class namely set_name() and get_name() which will set and get $name property respectively. Instantiate this fruit class with four different name of fruit you know.  
class Fruit{ 
    public $name;
    public $color;
 public function set_name($n){
    $this->name=$n;
 }   
 public function get_name(){
    echo "The fruit name is ".$this->name."<br>";
 } 
 }
 
 $object = new Fruit();
 $object->set_name("Orange");
 $object->get_name();
 
 $object->set_name("Apple");
 $object->get_name();
 
 $object->set_name("Banana");
 $object->get_name();
 
 $object->set_name("Watermelon");
 $object->get_name();

?>