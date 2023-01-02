<?php

declare(strict_types=1);

namespace App\Classes\InstrumentSpecs;

use Exception;

class GuitarSpec extends AbstractInstrumentSpec
{
    private $builder, $model, $type, $backWood, $topWood;

    private int $numStrings;

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

        $searchedBuilder = $this->getBuilder();
        $searchedModel = $this->getModel();
        $searchedType = $this->getType();
        $searchedBackWood = $this->getBackWood();
        $searchedTopWood = $this->getTopWood();
        $searchedNumOfStrings = $this->getNumStrings();

        if (($searchedBuilder != null) && ($searchedBuilder != "") && !(strtolower($searchedBuilder)  == strtolower($inventoryGuitar->getGuitarSpec()->getBuilder()))) {
            return false;
        }

        if (($searchedModel != null) && ($searchedModel != "") && !(strtolower($searchedModel)  == strtolower($inventoryGuitar->getGuitarSpec()->getModel()))) {
            return false;
        }

        if (($searchedType != null) && ($searchedType != "") && !(strtolower($searchedType)  == strtolower($inventoryGuitar->getGuitarSpec()->getType()))) {
            return false;
        }

        if (($searchedBackWood != null) && ($searchedBackWood != "") && !(strtolower($searchedBackWood)  == strtolower($inventoryGuitar->getGuitarSpec()->getBackWood()))) {
            return false;
        }

        if (($searchedTopWood != null) && ($searchedTopWood != "") && !(strtolower($searchedTopWood)  == strtolower($inventoryGuitar->getGuitarSpec()->getTopWood()))) {
            return false;
        }

        if (($searchedNumOfStrings != null) && ($searchedNumOfStrings != "") && !($searchedNumOfStrings  == $inventoryGuitar->getGuitarSpec()->getNumStrings())) {
            return false;
        }

        return true;
    }
}
