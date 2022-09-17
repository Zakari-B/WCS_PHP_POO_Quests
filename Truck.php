<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;

    private int $energyLevel = 0;

    private int $storageCapacity;

    private int $storage;

    public function __construct(string $color, int $nbSeats, int $nbWheels, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats, $nbWheels);
        $this->setEnergy($energy);
        $this->setStorageCapacity($storageCapacity);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
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

    public function getStorage(): int
    {
        return $this->storage;
    }

    public function getStorageState(): string
    {
        if ($this->storage === $this->storageCapacity) {
            return "Full";
        } else {
            return "In filling";
        }
    }

    public function setStorage(int $storage): void
    {
        if ($storage >= 0) {
            $this->storage = $storage;
        }
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    private function setStorageCapacity(int $storageCapacity): void
    {
        if ($storageCapacity >= 0) {
            $this->storageCapacity = $storageCapacity;
        }
    }
}
