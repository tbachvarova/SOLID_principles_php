<?php

/**
 *  In this example, we have an interface ShapeInterface that defines a area() method.
 * The Triangle and Circle classes implement the ShapeInterface interface and define their respective
 * area calculation logic.

The AreaCalculator class accepts an array of ShapeInterface objects,
 * and calculates the total area by iterating over each object and calling its area() method.
 * This adheres to the OCP, as the AreaCalculator class is open for extension, but closed for modification.
 * We can easily add new shapes by creating a new class that implements the ShapeInterface interface,
 * without having to modify the AreaCalculator class.
 *
 */


interface ShapeInterface
{
    public function area();
}


class Triangle implements ShapeInterface
{
    public $first_line;
    public $second_line;
    public $third_line;

    public function __construct(int $first_line, int $second_line, int $third_line)
    {
        $this->first_line = $first_line;
        $this->second_line = $second_line;
        $this->third_line = $third_line;
    }

    public function area()
    {
        $base = $this->circumference() / 2;
        return sqrt($base * ($base - $this->first_line) * ($base - $this->second_line) * ($base - $this->third_line));
    }
}


class Circle implements ShapeInterface
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
}


class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = [])
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        foreach ($this->shapes as $shape) {
            if (!is_a($shape, ShapeInterface::class)) {
                throw new Exception("Worng Shape type");
            }
            $area[] = $shape->area();
        }

        return array_sum($area);
    }

}

