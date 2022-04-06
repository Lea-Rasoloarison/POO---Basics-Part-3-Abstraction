<?php

require_once 'HighWay.php';
require_once 'Vehicle.php';


final class MotorWay extends HighWay
{

    protected int $maxSpeed = 130;
    protected int $lane = 4;


    public function addVehicle(Vehicle $vehicle): string
    {
        if ($vehicle instanceof Vehicle) {
            return 'circulation autorisé pour ' . $this;
        } else {
            return 'circulation interdite';
        }
    }
}

?>