<?php
/* The ISP (Interface Segregation Principle) is object-oriented programming principle suggests that
 * clients should not be forced to demand on methods they don't use.
 *
 * In PHP, an example of violating the ISP could be a class that implements too many methods
 * that are not relevant to some of its clients.
 *
 * Here is an example of Vehicle interface that VIOLATES the ISP principle:
 * */

interface Vehicle {
    public function start();
    public function stop();
    public function accelerate();
    public function brake();
    public function fly();
    public function sail();
}

class Car implements Vehicle {
    public function start() {
        // Start the car
    }

    public function stop() {
        // Stop the car
    }

    public function accelerate() {
        // Accelerate the car
    }

    public function brake() {
        // Brake the car
    }

    public function fly() {
        // This method is not relevant to cars, and violates the ISP principle
    }
    public function sail() {
        // This method is NOT relevant to cars, and violates the ISP principle
    }

}

class Airplane implements Vehicle {
    public function start() {
        // Start the airplane
    }

    public function stop() {
        // Stop the airplane
    }

    public function accelerate() {
        // Accelerate the airplane
    }

    public function brake() {
        // Brake the airplane
    }

    public function fly() {
        // Fly the airplane
    }

    public function sail() {
        // This method is NOT relevant to cars, and violates the ISP principle
    }
}


class Boat implements Vehicle {
    public function start() {
        // Start the airplane
    }

    public function stop() {
        // Stop the airplane
    }

    public function accelerate() {
        // Accelerate the airplane
    }

    public function brake() {
        // Brake the airplane
    }

    public function fly() {
        // This method is NOT relevant to cars, and violates the ISP principle
    }

    public function sail() {
        // Sail the boat
    }
}


/*
In this example, the Vehicle interface defines two methods called fly() and sail().
However, these methods are only relevant to airplanes or sailing objects, not cars.
Therefore, any class is forced to implement a method that it does not need, which violates the ISP principle
- Car class - can't fly() or sail()
- Airplane class - can't sail()
- Boat class - can't fly()

To fix this, we should separate the Vehicle interface into three separate interfaces:
 for land vehicles, for air and sailing vehicles.

 Here's an updated example:
*/

interface VehicleInterface {
    public function start();
    public function stop();
    public function accelerate();
    public function brake();
}

interface LandVehicleInterface extends VehicleInterface {
    public function start();

}

interface AirVehicleInterface extends VehicleInterface{
    public function fly();
}

interface SailVehicleInterface extends VehicleInterface{
    public function sail();
}

class Automobile implements LandVehicleInterface {
    public function start() {
        // Start the Automobile
    }

    public function stop() {
        // Stop the Automobile
    }

    public function accelerate() {
        // Accelerate the Automobile
    }

    public function brake() {
        // Brake the Automobile
    }
}

class Plane implements AirVehicleInterface {
    public function start() {
        // Start the Plane
    }

    public function stop() {
        // Stop the Plane
    }

    public function accelerate() {
        // Accelerate the Plane
    }

    public function brake() {
        // Brake the Plane
    }

    public function fly() {
        // Fly the Plane
    }
}

class Ship implements SailVehicleInterface {
    public function start() {
        // Start the Ship
    }

    public function stop() {
        // Stop the Ship
    }

    public function accelerate() {
        // Accelerate the Ship
    }

    public function brake() {
        // Brake the Ship
    }

    public function sail()
    {
        // Sail the Ship
    }
}