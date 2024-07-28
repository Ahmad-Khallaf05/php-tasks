<?php
class Car {
    public $make;
    public $model;
    public $vin;

    public function __construct($make, $model, $vin) {
        $this->make = $make;
        $this->model = $model;
        $this->vin = $vin;
    }

    public function __destruct() {
        echo "Car with VIN {$this->vin} is being destroyed.<hr>";
    }

    public function getDetails() {
        echo $this->make," / ";
        echo $this->model," / ";
        echo $this->vin,"<hr>";
    }
}

class Inventory {
    public $cars = array();

    public function addCar(Car $car) {
        $this->cars[] = $car;
    }

    public function removeCarByVin($vin) {
        foreach ($this->cars as $index => $car) {
            if ($car->vin === $vin) {
                unset($this->cars[$index]);
                $this->cars = array_values($this->cars);
            }
        }
    }

    public function listCars() {
        foreach ($this->cars as $car) {
            echo $car->getDetails() . "<hr>";
        }
    }
}



$car1 = new Car('Toyota', 'Corolla', '125548654899');
$car2 = new Car('porsche', 'gt3rs', '818917091798');
$inventory = new Inventory();
$inventory->addCar($car1);
$inventory->addCar($car2);
$inventory->removeCarByVin(125548654899);
$inventory->listCars();

?>

