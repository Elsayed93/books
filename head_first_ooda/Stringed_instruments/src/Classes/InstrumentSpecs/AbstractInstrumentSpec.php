<?php

namespace App\Classes\InstrumentSpecs;

abstract class AbstractInstrumentSpec
{
    abstract function getModel(): string;

    abstract function setBuilder($builder): void;

    abstract function getBuilder(): string;

    abstract function setType($type): void;

    abstract function getType(): string;

    abstract function setBackWood($backWood): void;

    abstract function getBackWood(): string;

    abstract function setTopWood($topWood): void;

    abstract function getTopWood(): string;
}
