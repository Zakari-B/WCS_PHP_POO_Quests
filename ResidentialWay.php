<?php

require_once 'Highway.php';

class ResidentialWay extends Highway
{
    public function addVehicle($vehicle): Vehicle
    {
        if ($vehicle instanceof Vehicle) {
            $this->currentVehicles[] = $vehicle;
            return $vehicle;
        }
        return $vehicle;
    }
    public function __construct()
    {
        parent::__construct(2, 50);
    }
}
