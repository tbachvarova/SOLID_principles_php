<?php

/* Here is an example of DIP (Dependency Inversion Principle) using a Vehicle class and its dependencies:

 *  In this example, the Vehicle class depends on an Engine interface rather than a specific engine implementation.
 * The GasolineEngine and ElectricEngine classes implement the Engine interface,
 *  which defines the start() and stop() methods.
 *
 * The Vehicle class takes an Engine object as a parameter in its constructor,
 * which allows us to inject different engine implementations into the Vehicle object at runtime.
 *
 * By using an interface instead of a concrete implementation, we can swap out different engine types
 * without changing the Vehicle class itself.
 *
 * This demonstrates the Dependency Inversion Principle in action.
 * */


interface Engine {
    public function start();
    public function stop();
}

class GasolineEngine implements Engine {
    public function start() {
        // start gasoline engine
    }
    public function stop() {
        // stop gasoline engine
    }
}

class ElectricEngine implements Engine {
    public function start() {
        // start electric engine
    }
    public function stop() {
        // stop electric engine
    }
}

class Vehicle {
    protected $engine;
    public function __construct(Engine $engine) {
        $this->engine = $engine;
    }
    public function startEngine() {
        $this->engine->start();
    }
    public function stopEngine() {
        $this->engine->stop();
    }
}

// Usage
$gasolineEngine = new GasolineEngine();
$electricEngine = new ElectricEngine();

$gasolineVehicle = new Vehicle($gasolineEngine);
$electricVehicle = new Vehicle($electricEngine);

$gasolineVehicle->startEngine(); // starts gasoline engine
$electricVehicle->startEngine(); // starts electric engine
