<?php

namespace App\Test;

use App\Classes\DogDoor;
use App\Classes\Remote;

class DogDoorSimulator
{


    public function test(): void
    {
        $door = new DogDoor();
        $remote = new Remote($door);

        echo ("Fido barks to go outside...");
        echo "<br>";
        $remote->pressButton();
        echo ("Fido has gone outside...");
        echo "<br>";

        $door->close();

        echo "<br>";
        // $remote->pressButton();

        echo ("Fido’s all done...");
        // echo "<br>";
        $remote->pressButton();

        echo ("Fido’s back inside...");
        echo "<br>";
        $door->close();

        // $remote->pressButton();
    }
}
