<?php

namespace App\classes;

use App\classes\Guitar;

class Inventory
{
    private array $guitars;

    public function __construct()
    {
        $this->guitars = [];
    }

    public function listAllGuitars(): array
    {
        return $this->guitars;
    }

    public function addGuitar(Guitar $guitar): void
    {
        array_push($this->guitars, $guitar);
    }

    public function getGuitar(string $serialNumber): Guitar
    {
        $guitarsLength = count($this->guitars);

        for ($i = 0; $i < $guitarsLength; $i++) {
            if ($serialNumber == $this->guitars[$i]->getSerialNumber()) {
                return $this->guitars[$i];
            }
        }

        return null;
    }

    public function search(GuitarSpec $searchGuitar): array
    {


        $matchingGuitars = [];
        for ($i = 0, $guitarsLength = count($this->guitars); $i < $guitarsLength; $i++) {

            $isMatch =  $searchGuitar->match($this->guitars[$i]);
            if ($isMatch) {
                array_push($matchingGuitars, $this->guitars[$i]);
            }
        }

        return $matchingGuitars;
    }
}
