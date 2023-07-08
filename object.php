<?php
class User 
{
    public $name, $password;

    function __construct(){
        //constructor statements goes here
    }
           
    final function save_user(){ //method 
        echo  "Save User code goes here";
    }
    function get_password(){ // method
        return $this -> password;
    }
}

$object = new User;
print_r($object); echo "<br>";

$object -> name = "joe";
$object -> password = "mypass";
print_r($object); echo "<br>";

$object -> save_user();echo "<br>";
$pass = $object -> get_password();
echo $pass;

$object1 = new User;
print_r($object1); echo "<br>";
$object1 -> name = "joey";
$object1 -> password = "mypass11";
print_r($object1); echo "<br>";

class Subscriber extends User{
    public $phone, $email;

    function display(){
        echo "Name: " . $this->name . "<br>";
        echo "Pass: " . $this->password . "<br>";
        echo "phone: " . $this->phone;
        echo "Email: " . $this->email;
    }

    function show(){
        parent::save_user();
        //self::display();
    }

}

$object2 = new Subscriber;
print_r($object2);echo "<br>";
$object2->phone = "012 345 6789"."<br>";
$object2->email = "fred@bloggs.com";
$object2->display();echo "<br>";
$object2->show();

?>