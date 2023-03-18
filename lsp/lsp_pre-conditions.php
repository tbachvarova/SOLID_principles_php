<?php

/**
 * Here's an example for the Liskov Substitution Principle (LSP)
 * requirement that "Pre-conditions cannot be strengthened in a subtype, but they can be weakened."

 * Let's consider a Vehicle base class with a start() method that requires the fuel parameter
 * to be greater than or equal to 0:
 */

class Vehicle {
    public function start($fuel) {
        if ($fuel < 0) {
            throw new InvalidArgumentException("Fuel must be greater than or equal to 0.");
        }
        // start the vehicle
    }
}

/*
 * Now, let's say we have a Car subclass that inherits from Vehicle and has its own start() method
 * that requires the fuel parameter to be greater than or equal to 5:
 *
 * */

class Car extends Vehicle {
    public function start($fuel) {
        if ($fuel < 5) {
            throw new InvalidArgumentException("Fuel must be greater than or equal to 5.");
        }
        // start the car
    }
}


/* In this case, the pre-condition of the Vehicle class is that the fuel parameter must be greater than or equal to 0.
* However, the Car subclass has a stronger pre-condition that the fuel parameter must be greater than or equal to 5.
* !!! This violates the LSP, as code written against the Vehicle base class may not work correctly when a Car object
* is substituted for it.
*
* To satisfy the LSP, the pre-conditions of a subtype must be weakened or maintained at the same level
* as those of the base type, but they cannot be strengthened.
* Therefore, in this case, the start() method of the Car subclass should only have a pre-condition
* that is weaker than or equal to the start() method of the Vehicle base class.
*/