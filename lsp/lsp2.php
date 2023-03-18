<?php

/**
 * In this example, we have an abstract Bird class with an abstract fly method that must be implemented by any subclass of Bird.
 * The Pigeon class extends Bird and implements its fly method to make a pigeon fly.
 * The Ostrich class also extends Bird, but as ostriches are flightless birds, its fly method throws an exception
 * to indicate that ostriches can't fly.
 *
 * This example adheres to the Liskov Substitution Principle because the Pigeon and Ostrich classes can be used interchangeably
 * with the Bird class without affecting the correctness of the program.
 *
 * Any code that relies on the Bird class's fly method can also use objects of type Pigeon or Ostrich
 * without causing any unexpected behavior or violating any input parameter requirements.
 *
 * Note that the Ostrich class's fly method throws an exception instead of implementing the method as expected,
 * but this is not a violation of the Liskov Substitution Principle
 * because it is a valid behavior for an object of type Ostrich.
 */


abstract class Bird {
    abstract public function fly();
}

class Pigeon extends Bird {
    public function fly() {
        // Code to make pigeon fly
    }
}

class Ostrich extends Bird {
    public function fly() {
        throw new Exception("Ostriches can't fly");
    }
}
