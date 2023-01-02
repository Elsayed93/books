<?php

namespace App\Classes\Instruments;

abstract class AbstractInstrument
{
    abstract function getSerialNumber(): string;
    abstract function getPrice(): float;
}
