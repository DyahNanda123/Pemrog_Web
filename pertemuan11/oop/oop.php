<!--Soal 1.1-->
<?php
// class Car
// {
//     public $brand; // properti (variabel) dari kelas Car yang disebut $brand.
//                   //  mendefinisikan merek mobil yang akan disimpan dalam objek.

//     public function startEngine() // metode (fungsi) dari kelas Car yang disebut startEngine().
//                                   // Metode ini mencetak pesan "Engine started!" ketika dipanggil.
//     {
//         echo "Engine started!";
//     }
// }

// $car1 = new Car(); // Membuat objek pertama dari kelas Car dan menyimpannya dalam variabel $car1.

// $car1->brand = "Toyota"; // Mengatur properti $brand dari objek $car1 menjadi "Toyota".

// $car2 = new Car(); // Membuat objek kedua dari kelas Car dan menyimpannya dalam variabel $car2.

// $car2->brand = "Honda"; // Mengatur properti $brand dari objek $car2 menjadi "Honda".

// $car1->startEngine(); // Memanggil metode startEngine() dari objek $car1, yang mencetak "Engine started!".

// echo $car2->brand; // Mencetak merek mobil dari objek $car2, yaitu "Honda".

/////////////////////////////////////////////////
// MEMBUAT INHERITANCE SOAL 1.2
// class Animal
// {
//     protected $name;

//     public function __construct($name)
//     {
//         $this->name = $name;
//     }

//     public function eat()
//     {
//         echo $this->name . " is eating.<br>";
//     }

//     public function sleep()
//     {
//         echo $this->name . " is sleeping.<br";
//     }
// }

// class Cat extends Animal
// {
//     public function meow()
//     {
//         echo $this->name . " says meow!<br>";
//     }
// }

// class Dog extends Animal
// {
//     public function bark()
//     {
//         echo $this->name . " says woof!<br>";
//     }
// }

// $cat = new Cat("Whiskers");
// $dog = new Dog("Buddy");

// $cat->eat();
// $dog->sleep();

// $cat->meow();
// $dog->bark();

/////////////////////////////////////////////////
// membuat Polymorphism - Soal 1.3
// interface Shape{
//     public function calculateArea();
// }

// class Circle implements Shape{
//     private $radius;

//     public function __construct($radius){
//         $this->radius = $radius;
//     }

//     public function calculateArea(){
//         return pi()* pow($this->radius, 2);
//     }
// }

// class Rectangle implements Shape{
//     private $width;
//     private $height;

//     public function __construct($width, $height){
//         $this->width = $width;
//         $this->height = $height;
//     }

//     public function calculateArea()
//     {
//         return $this->width * $this->height;
//     }
// }

// function printArea(Shape $shape){
//     echo "Area: ".$shape->calculateArea()."<br>";
// }

// $circle = new Circle(5);
// $rectangle = new Rectangle(4, 6);

// printArea($circle);
// printArea($rectangle);

/////////////////////////////////////////////////
// Membuat Encapsulation - Soal 1.4
// class Car
// {
//     private $model;
//     private $color;

//     public function __construct($model, $color)
//     {
//         $this->model = $model;
//         $this->color = $color;
//     }

//     public function getModel()
//     {
//         return $this->model;
//     }

//     public function setColor($color)
//     {
//         $this->color = $color;
//     }

//     public function getColor()
//     {
//         return $this->color;
//     }
// }

// $car = new Car("Toyota", "Blue");

// echo "Model: " . $car->getModel() . "<br>";
// echo "Color: " . $car->getColor() . "<br>";

// $car->setColor("Red");

// echo "Updated Color: " . $car->getColor() . "<br>";

//////////////////////////////////////////////////////
// Membuat Abstraction - Soal 1.5
// abstract class Shape
// {
//     abstract public function calculateArea();
// }

// class Circle extends Shape{
//     private $radius;

//     public function __construct($radius){
//         $this->radius = $radius;
//     }

//     public function calculateArea(){
//         return pi()* pow($this->radius, 2);
//     }
// }

// class Rectangle extends Shape{
//     private $width;
//     private $height;

//     public function __construct($width, $height){
//         $this->width = $width;
//         $this->height = $height;
//     }

//     public function calculateArea()
//     {
//         return $this->width * $this->height;
//     }
// }

// $circle = new Circle(5);
// $rectangle = new Rectangle(4,6);

// echo "Area of Circle: " . $circle->calculateArea() . "<br>";
// echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";


//////////////////////////////////////////////////////
// Membuat Interface - Soal 1.6 
// interface Shape{
//     public function calculateArea();
// } 

// interface Color{
//     public function getColor();
// } 

// class Circle implements Shape, Color{
//     private $radius;
//     private $color;

//     public function __construct($radius, $color){
//         $this->radius = $radius;
//         $this->color = $color;
//     }

//     public function calculateArea(){
//         return pi()* pow($this->radius, 2);
//     }

//     public function getColor(){
//         return $this->color;
//     }

// }

// $circle = new Circle(5, "Blue");
// echo "Area of Circle: " . $circle->calculateArea() . "<br>";
// echo "Area of Rectangle: " . $circle->getColor() . "<br>";



//////////////////////////////////////////////////////
// Membuat Contruct dan Destruct - Soal 1.7
// class Car
// {
//     private $brand;

//     public function __construct($brand)
//     {
//         echo "A new car is created. <br>";
//         $this->brand = $brand;
//     }

//     public function getBrand()
//     {
//         return $this->brand;
//     }

//     public function __destruct()
//     {
//       echo "The car is destroyed. <br>";
//     }
// }
// $car = new Car ("Toyota");
// echo "Brand: " . $car->getBrand() . "<br>";



//////////////////////////////////////////////////////
// Membuat Access Modifiers - Soal 1.8
class Animal
{
    public $name;
    protected $age;
    private $color;

    public function __construct($name, $age, $color)
    {
        $this->name  = $name;
        $this->age   = $age;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getColor()
    {
        return $this->color;
    }
}

$animal = new Animal("Dog", 3, "Brown");

echo "Name: " . $animal->name . "<br>";
echo "Age: " . $animal->getAge() . "<br>";
echo "Color: " . $animal->getColor() . "<br>";

?>