<?php

// Bicycle.php
require_once 'Vehicle.php';

class Bike extends Vehicle implements LightableInterface
{

    private bool $headLights = false;

    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10) {
            $this->headLights = true;
            return $this->headLights;
        } else {
            return false;
        }
    }
    public function switchOff(): bool
    {
        $this->headLights = false;
        return $this->headLights;
    }
}
