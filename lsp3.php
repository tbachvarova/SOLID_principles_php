<?php

class Animal
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function eat(): void
    {
        echo $this->name . " is eating.\n";
    }
}

class Dog extends Animal
{
    public function bark()
    {
        echo $this->name . " is barking.\n";
    }
}

class Cat extends Animal
{
    public function meow()
    {
        echo $this->name . " is meowing.\n";
    }
}

// Let's create some instances of the classes.
$animal = new Animal("Generic Animal");
$dog = new Dog("Fido");
$cat = new Cat("Whiskers");

// Now, let's try calling the getName method and eat method on each instance.
echo $animal->getName() . "\n"; // Outputs "Generic Animal"
echo $dog->getName() . "\n"; // Outputs "Fido"
echo $cat->getName() . "\n"; // Outputs "Whiskers"

$animal->eat(); // Outputs "Generic Animal is eating."
$dog->eat(); // Outputs "Fido is eating."
$cat->eat(); // Outputs "Whiskers is eating."

// This is where we see the Liskov Substitution Principle in action.
//$dog->meow(); // This will generate a fatal error, because the Dog class doesn't have a meow method.
//$cat->bark(); // This will also generate a fatal error, because the Cat class doesn't have a bark method.

// The Dog and Cat classes are still substitutable for their parent Animal class,
// because they both have a getName method and an eat method that behaves as expected.
// However, they have additional methods (bark and meow, respectively) that are specific to their class
// and not present in the parent Animal class.
// So if we try to call these methods on instances of the Animal class (or any other subclass of Animal),
// it will result in a fatal error.
