<?php

require_once 'Highway.php';

class PedestrianWay extends Highway
{
    public function addVehicle($vehicle): Vehicle
    {
        if ($vehicle instanceof Vehicle) {
            if ($vehicle instanceof Bike or $vehicle instanceof Skateboard) {
                if (in_array($vehicle, $this->currentVehicles)) {
                    return $vehicle;
                } else {
                    $this->currentVehicles[] = $vehicle;
                    return $vehicle;
                }
            }
        }
        return $vehicle;
    }
    public function __construct()
    {
        parent::__construct(1, 10);
    }
}
