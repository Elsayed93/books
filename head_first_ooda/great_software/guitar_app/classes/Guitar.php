<?php

declare(strict_types=1);

namespace App\classes;

use Exception;

class Guitar
{

    private string $serialNumber, $builder, $model, $type, $backWood, $topWood;
    private float $price;

    const SUPPORTED_BUILDERS = ['builder1', 'builder2', 'builder3', 'builder4'];
    const SUPPORTED_TYPES = ['type1', 'type2', 'type3', 'type4'];
    const SUPPORTED_WOOD = ['wood1', 'wood2', 'wood3', 'wood4'];


    public function __construct(string $serialNumber, float $price, string $model,)
    {
        $this->serialNumber = $serialNumber;
        $this->model = $model;
        $this->price = $price;
    }

    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }

    public function getPrice(): float
    {
        return $this->price;
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
}
