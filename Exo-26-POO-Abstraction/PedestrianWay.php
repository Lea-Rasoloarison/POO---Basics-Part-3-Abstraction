<?php

require_once 'HighWay.php';
require_once 'Vehicle.php';


final class PedestrianWay extends HighWay
{

    protected int $maxSpeed = 10;
    protected int $lane = 1;


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