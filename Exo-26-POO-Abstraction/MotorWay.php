<?php

require_once 'HighWay.php';
require_once 'Vehicle.php';


final class MotorWay extends HighWay
{

    protected int $maxSpeed = 130;
    protected int $lane = 4;


    public function addVehicle(Vehicle $vehicle)
    {
        if (!$vehicle instanceof Bike || !$vehicle instanceof Skateboard) {

            $this->addVehicle($vehicle);
        }
    }
}

?>