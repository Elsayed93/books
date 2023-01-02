<?php

declare(strict_types=1);

namespace App\Classes\Instruments;

use App\Classes\InstrumentSpecs\MandolinSpec;

class Mandolin extends AbstractInstrument
{

    private string $serialNumber;
    private float $price;
    private MandolinSpec $mandolinSpec;

    public function __construct(string $serialNumber, float $price, MandolinSpec $mandolinSpec)
    {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->mandolinSpec = $mandolinSpec;
    }


    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getMandolinSpec()
    {
        return $this->mandolinSpec;
    }
}
