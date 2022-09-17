<?php

abstract class Highway
{
    protected array $currentVehicles = [];

    protected int $nbLane;

    protected int $maxSpeed;

    public function __construct(int $lanes, int $maxSpeed)
    {
        $this->setNbLane($lanes);
        $this->setMaxSpeed($maxSpeed);
    }

    abstract public function addVehicle($vehicle): Vehicle;
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $vehicles): void
    {
        $this->currentVehicles = $vehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $lanes): void
    {
        if ($lanes >= 1) {
            $this->nbLane = $lanes;
        }
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        if ($maxSpeed >= 0) {
            $this->maxSpeed = $maxSpeed;
        }
    }
}
