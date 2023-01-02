<?php

namespace App\Classes;

class Bark
{

    private string $sound;

    public function __construct(string $sound)
    {
        $this->sound = $sound;
    }

    public function getSound(): string
    {
        return $this->sound;
    }

    public function equals(Bark $bark): bool
    {
        return strtolower($this->sound) == strtolower($bark->sound);
    }

    public function isAllowedBark(Bark $bark): bool
    {
        // var_dump($this);
        // var_dump($bark);
        // die;
        return strtolower($this->sound) == strtolower($bark->sound);
    }
}
