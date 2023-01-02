<?php

declare(strict_types=1);

namespace App\Classes\Instruments;

use App\Classes\InstrumentSpecs\GuitarSpec;

class Guitar extends AbstractInstrument
{

    private string $serialNumber;
    private float $price;
    private GuitarSpec $guitarSpec;

    public function __construct(string $serialNumber, float $price, GuitarSpec $guitarSpec)
    {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->guitarSpec = $guitarSpec;
    }


    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getGuitarSpec()
    {
        return $this->guitarSpec;
    }
}
