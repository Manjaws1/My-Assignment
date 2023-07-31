<?php

//1. What is Abstraction 
//Abstraction is a powerful tool that can be used to improve the modularity and readability of PHP code.
//By hiding the implementation details of a class or method, abstraction allows the user to focus on the essential functionality.

//Examples of Abstraction

abstract class  Animal {
    public abstract function speak();
  }


  abstract class Car {
    public abstract function drive();
  }
  
  class SportsCar extends Car {
    public function drive() {
      echo "I'm driving a sports car!";
    }
  }
  
  class Sedan extends Car {
    public function drive() {
      echo "I'm driving a sedan!";
    }
  }

  //2. Write an example of php script to demonstrate the use of  Namespace3.

  namespace Namespace3;
  
  class MyClass {
    public function __construct() {
      echo "This is MyClass from Namespace3";
    }
  }
  
  $myClass = new MyClass();
  
 
  
  //3. Write an OOP program to demonstrate function overloading and function overriding in PHP


class Animal {
  public function speak() {
    echo "Animal speaking";
  }
}

class Dog extends Animal {
  public function speak() {
    echo "Woof!";
  }
}

class Cat extends Animal {
  public function speak() {
    echo "Meow!";
  }
}

$animal = new Animal();
$animal->speak(); // Animal speaking

$dog = new Dog();
$dog->speak(); // Woof!

$cat = new Cat();
$cat->speak(); // Meow!


