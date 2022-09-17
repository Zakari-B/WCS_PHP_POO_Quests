<?php

// Car.php
require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;

    private int $energyLevel = 0;

    private bool $hasParkBrake = true;
    private bool $headLights = false;

    public function __construct(string $color, int $nbSeats, int $nbWheels, string $energy)
    {
        parent::__construct($color, $nbSeats, $nbWheels);
        $this->setEnergy($energy);
    }

    public function start()
    {
        try {
            if ($this->hasParkBrake) {
                throw new Exception("You forgot the park brake");
            }
            echo "Car started, let's drive !" . PHP_EOL;
        } catch (Exception $e) {
            echo 'Exception received  : ' . $e->getMessage() . PHP_EOL;
        } finally {
            echo "Ma voiture roule comme un donut" . PHP_EOL;
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): string
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        if ($energyLevel >= 0) {
            $this->energyLevel = $energyLevel;
        }
    }

    public function getParkBrake(): string
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake(): void
    {
        $this->hasParkBrake = !$this->hasParkBrake;
    }

    public function switchOn(): bool
    {
        $this->headLights = true;
        return $this->headLights;
    }
    public function switchOff(): bool
    {
        $this->headLights = false;
        return $this->headLights;
    }
}

// Challenge 4 : Exceptions
// $car = new Car('green', 4, 4, 'electric');
// echo $car->start();
// $car->setParkBrake();
// echo $car->start();
