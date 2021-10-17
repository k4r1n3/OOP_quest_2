<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $storageCapacity;
    private int $load;


    public function __construct(string $color, int $nbSeats, string $energy, int $load, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->storageCapacity = $storageCapacity;
        $this->load = $load;
    }


    public function getLoad(): int
    {
        return $this->load;
    }


    public function setLoad(int $load): void
    {
        $this->load = $load;
    }


    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }


    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }


    public function fullStorage(int $storageCapacity): string
    {
        if ($this->$fullStorage === $storageCapacity) {
            return "The truck is full";
        } else {
            return "The truck is filling";
        }
    }
}
