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

    public function search(Guitar $searchGuitar): array
    {
        $builder = $searchGuitar->getBuilder();
        $model = $searchGuitar->getModel();
        $type = $searchGuitar->getType();
        $backWood = $searchGuitar->getBackWood();
        $topWood = $searchGuitar->getTopWood();
        // var_dump($builder, $model, $type, $backWood, $topWood);

        $guitarsLength = count($this->guitars);

        $matchingGuitars = [];

        for ($i = 0; $i < $guitarsLength; $i++) {

            if (($builder != null) && ($builder != "") && !(strtolower($builder)  == strtolower($this->guitars[$i]->getBuilder()))) {
                continue;
            }

            if (($model != null) && ($model != "") && !(strtolower($model)  == strtolower($this->guitars[$i]->getModel()))) {
                continue;
            }

            if (($type != null) && ($type != "") && !(strtolower($type)  == strtolower($this->guitars[$i]->getType()))) {
                continue;
            }

            if (($backWood != null) && ($backWood != "") && !(strtolower($backWood)  == strtolower($this->guitars[$i]->getBackWood()))) {
                continue;
            }

            if (($topWood != null) && ($topWood != "") && !(strtolower($topWood)  == strtolower($this->guitars[$i]->getTopWood()))) {
                continue;
            }

            array_push($matchingGuitars, $this->guitars[$i]);
        }

        return $matchingGuitars;
    }
}
