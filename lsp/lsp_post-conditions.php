<?php

// Let's consider a theme of "Vehicle". We can start by defining an interface VehicleInterface
// that specifies the basic behavior of a vehicle:
interface VehicleInterface
{
    public function start(): void;

    public function stop(): void;

    public function accelerate(float $speed): void;

    public function brake(): void;
}

// Next, we can define an abstract class AbstractVehicle that implements the VehicleInterface
// and provides default implementations for some methods:

abstract class AbstractVehicle implements VehicleInterface {
    public function start(): void {
        // default implementation
    }

    public function stop(): void {
        // default implementation
    }

    public function brake(): void {
        // default implementation
    }
}

// Now let's consider the principle of "Post-conditions cannot be weakened in a subtype, but they can be strengthened."
// This means that any class that implements the VehicleInterface should not weaken the post-conditions of its methods,
// but it can strengthen them.
//
//For example, let's say we have a class Car that extends AbstractVehicle:

class Car extends AbstractVehicle {
    private bool $engineStarted = false;
    private float $speed = 0;

    public function start(): void {
        parent::start();
        $this->engineStarted = true;
    }

    public function stop(): void {
        parent::stop();
        $this->engineStarted = false;
        $this->speed = 0;
    }

    public function accelerate(float $speed): void {
        $this->speed += $speed;
    }

    public function brake(): void {
        $this->speed = 0;
    }

    public function getCurrentSpeed(): float {
        return $this->speed;
    }
}

// Notice that the Car class strengthens the post-condition of the getCurrentSpeed() method
// by specifying that it returns a float.
// This is a valid use of the LSP, since we are not weakening any post-conditions.
//
//Finally, let's ensure that our implementation conforms to all the SOLID principles.
//
//Single Responsibility Principle (SRP):
// The VehicleInterface and AbstractVehicle classes have a single responsibility of defining the behavior of a vehicle.
//
//Open/Closed Principle (OCP):
// The VehicleInterface and AbstractVehicle classes are open for extension (by allowing new classes to implement them)
// but closed for modification (by not changing their existing implementation).
//
//Liskov Substitution Principle (LSP):
// The Car class extends AbstractVehicle and implements VehicleInterface without weakening any post-conditions.
//
//Interface Segregation Principle (ISP):
// The VehicleInterface defines only the methods that are necessary for a vehicle, and any class that implements
// it must implement all the methods.
//
//Dependency Inversion Principle (DIP):
// The Car class depends on abstractions (AbstractVehicle and VehicleInterface) rather than concrete implementations.