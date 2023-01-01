<?php

namespace App\Classes;

use Spatie\Async\Pool;

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

        if ($this->dogDoor->isOpen()) {
            $this->dogDoor->close();
        } else {

            $this->dogDoor->open();
        }
    }

}
