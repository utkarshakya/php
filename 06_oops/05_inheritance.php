<?php
// Inheritance in PHP allows a class (child class) to acquire properties and methods from another class (parent class) using the extends keyword.

class Vehicle {
    public function honk() {
        echo "Honk!";
    }
}

// This is inherited class have the properties and methods of the Vehicle class.
class Car extends Vehicle {
    public function drive() {
        echo "Driving...";
    }
}

$myCar = new Car(); // Note here we create the object of Car class but we can access the method of Vehicle class
$myCar->honk(); // Outputs: Honk!

// This is the inheritance.
// Also here with sub classes, Protected Access Modifier comes in play.
?>

<!-- To Be Continue... -->