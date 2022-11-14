<?php

declare(strict_types=1);

namespace App\classes;

use Exception;

class GuitarSpec
{
    private $builder, $model, $type, $backWood, $topWood;

    private int $numStrings;
    // private $getNumStrings(),

    const SUPPORTED_BUILDERS = ['builder1', 'builder2', 'builder3', 'builder4'];
    const SUPPORTED_TYPES = ['type1', 'type2', 'type3', 'type4'];
    const SUPPORTED_WOOD = ['wood1', 'wood2', 'wood3', 'wood4'];

    public function __construct(string $model, int $numStrings)
    {
        $this->model = $model;
        $this->numStrings = $numStrings;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setBuilder($builder): void
    {
        if (!in_array($builder, self::SUPPORTED_BUILDERS)) {
            throw new Exception('Not supported builder');
        } else {
            $this->builder = $builder;
        }
    }

    public function getNumStrings(): int
    {
        return $this->numStrings;
    }

    public function getBuilder(): string
    {
        return $this->builder;
    }

    public function setType($type): void
    {
        if (!in_array($type, self::SUPPORTED_TYPES)) {
            throw new Exception('Not supported type');
        } else {
            $this->type = $type;
        }
    }

    public function getType(): string
    {
        return $this->type;
    }


    public function setBackWood($backWood): void
    {
        if (!in_array($backWood, self::SUPPORTED_WOOD)) {
            throw new Exception('Not supported Wood');
        } else {
            $this->backWood = $backWood;
        }
    }

    public function getBackWood(): string
    {
        return $this->backWood;
    }


    public function setTopWood($topWood): void
    {
        if (!in_array($topWood, self::SUPPORTED_WOOD)) {
            throw new Exception('Not supported Wood');
        } else {
            $this->topWood = $topWood;
        }
    }

    public function getTopWood(): string
    {
        return $this->topWood;
    }


    public function match($inventoryGuitar)
    {

        $builder = $this->getBuilder();
        $model = $this->getModel();
        $type = $this->getType();
        $backWood = $this->getBackWood();
        $topWood = $this->getTopWood();
        $numOfStrings = $this->getNumStrings();

        if (($builder != null) && ($builder != "") && !(strtolower($builder)  == strtolower($inventoryGuitar->getGuitarSpec()->getBuilder()))) {
            return false;
        }

        if (($model != null) && ($model != "") && !(strtolower($model)  == strtolower($inventoryGuitar->getGuitarSpec()->getModel()))) {
            return false;
        }

        if (($type != null) && ($type != "") && !(strtolower($type)  == strtolower($inventoryGuitar->getGuitarSpec()->getType()))) {
            return false;
        }

        if (($backWood != null) && ($backWood != "") && !(strtolower($backWood)  == strtolower($inventoryGuitar->getGuitarSpec()->getBackWood()))) {
            return false;
        }

        if (($topWood != null) && ($topWood != "") && !(strtolower($topWood)  == strtolower($inventoryGuitar->getGuitarSpec()->getTopWood()))) {
            return false;
        }

        if (($numOfStrings != null) && ($numOfStrings != "") && !($numOfStrings  == $inventoryGuitar->getGuitarSpec()->getNumStrings())) {
            return false;
        }

        return true;
    }
}
