<?php

// Car.php

class Car_Old
{

    private int $nbWheels = 4;

    private int $currentSpeed = 0;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel = 0;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward(): string
    {
        $this->currentSpeed = 30;

        return "Forward !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake ! ";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start()
    {
        return "Car started, let's drive !";
    }

    public function getNbWheels(): string
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $wheels): void
    {
        if ($wheels >= 0) {
            $this->nbWheels = $wheels;
        }
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): string
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $seats): void
    {
        if ($seats >= 1) {
            $this->nbSeats = $seats;
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
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
}
