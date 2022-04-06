<?php

require_once 'HighWay.php';
require_once 'Vehicle.php';

final class ResidentialWay extends HighWay{

    protected int $maxSpeed = 50;
    protected int $lane = 2;


    public function addVehicle(Vehicle $vehicle): string
    {
        if ($vehicle instanceof Vehicle) {
            return 'circulation autorisé pour ' . $this;
        } else {
            return 'circulation interdite';
        }
    }

}
