<?php
/**
 * In this example, we have a Rectangle class that has setWidth(), setHeight(), and area() methods.
 * We also have a Square class that extends the Rectangle class, and overrides the setWidth() and setHeight() methods
 * to ensure that the width and height are always equal.
 *
 * The printArea() function takes a Rectangle object as a parameter and calculates its area by setting its width and height
 * and calling the area() method. Both the Rectangle and Square objects can be passed to this function,
 * since the Square class inherits from the Rectangle class and is substitutable for it.
 *
 * This adheres to the Liskov Substitution Principle, as the Square class can be used wherever a Rectangle object is
 * expected, without causing any unexpected behavior or violating the behavior of the Rectangle class.
 *
 */

class Rectangle
{
    protected $width;
    protected $height;

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

class Square extends Rectangle
{
    public function setWidth($width)
    {
        $this->width = $width;
        $this->height = $width;
    }

    public function setHeight($height)
    {
        $this->width = $height;
        $this->height = $height;
    }
}

function printArea(Rectangle $rectangle)
{
    $rectangle->setWidth(4);
    $rectangle->setHeight(5);
    echo "Area: " . $rectangle->area() . "<br>";
}

$rectangle = new Rectangle();
$square = new Square();
printArea($rectangle); // prints "Area: 20"
printArea($square); // prints "Area: 20"
