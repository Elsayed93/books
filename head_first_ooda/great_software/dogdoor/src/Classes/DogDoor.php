<?php

namespace App\Classes;

class DogDoor
{
    private bool $open;

    public function __construct()
    {
        $this->open = false;
    }

    public function open(): void
    {
        echo 'The dog door opens.';
        $this->open = true;
    }

    public function close(): void
    {
        echo 'The dog door closes.';
        $this->open = false;
    }


    public function isOpen(): bool
    {
        return $this->open;
    }
}
