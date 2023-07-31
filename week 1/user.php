<?php

class User {
    protected $username;
 function set_name($username){
    $this -> username = $username;
}
}

class Admin extends User {
  public function expressYourRole(){
    return "Admin";
  }  
 public function sayHello(){
    return "Hello admin, ".$this -> username."<br>";
 } 
}

$admin1= new Admin;

$admin1 -> set_name("Kamolideen");
echo $admin1 -> sayHello();

$admin1 -> set_name("Munir");
echo $admin1 -> sayHello();

?>