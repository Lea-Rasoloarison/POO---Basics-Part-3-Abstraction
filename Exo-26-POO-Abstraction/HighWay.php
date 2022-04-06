<?php

require_once 'vehicle.php';

abstract class HighWay{

    abstract public function addVehicle(Vehicle $vehicle);

// Définition du véhicule

    public function getcurrentVehicles(): string
{
    return $this->currentVehicles;
}

    public function setcurrentVehicles(string $currentVehicles): string
{
    $this->currentVehicles = $currentVehicles;
}

// Définition du nombre de voies

    public function getLane(): int
{
    return $this->lane;
}

    public function setlane(int $lane): int
{
    $this->lane = $lane;
}

// Définition du nombre de voies

    public function getmaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setmaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }


    public function __construct(int $lane, int $maxSpeed)
    {
        $this->lane = $lane;
        $this->maxSpeed = $maxSpeed;
    }


}