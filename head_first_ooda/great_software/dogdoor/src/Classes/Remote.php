<?php

namespace App\Classes;

class Remote
{
    private DogDoor $dogDoor;

    public function __construct(DogDoor $dogDoor)
    {
        $this->dogDoor = $dogDoor;
    }


    public function pressButton(): void
    {
        echo 'Pressing the remote control button...';

        $this->dogDoor->isOpen() ?  $this->dogDoor->close() : $this->dogDoor->open();
    }
}
