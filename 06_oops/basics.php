<?php
// Object-Oriented Programming (OOP) in PHP is similar to other languages

// This is a Class
class Player{
    // These are properties
    public $name;
    public $speed = 5;
    
    // These are properties
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}

// This is the object
$player1 = new Player();

// Here we accessing the methods of the object
$player1-> set_name("Billy");
echo $player1->get_name() . 'has speed = ' . $player1->speed;

?>