<?php

require_once 'Highway.php';

class MotorWay extends Highway
{

    public function addVehicle($vehicle): Vehicle
    {
        if ($vehicle instanceof Vehicle) {
            if ($vehicle instanceof Bike or $vehicle instanceof Skateboard) {
                return $vehicle;
            } elseif (in_array($vehicle, $this->currentVehicles)) {
                return $vehicle;
            } else {
                $this->currentVehicles[] = $vehicle;
            }
        }
        return $vehicle;
    }
    public function __construct()
    {
        parent::__construct(4, 130);
    }
}
