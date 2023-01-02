<?php

namespace App\Test;

use App\Classes\Bark;
use App\Classes\BarkRecognizer;
use App\Classes\DogDoor;
use App\Classes\Remote;

class DogDoorSimulator
{

    public function test(): void
    {
        $door = new DogDoor();
        $door->addAllowedBarkObj(new Bark('Fido Bark1'));
        $door->addAllowedBarkObj(new Bark('Fido Bark2'));

        $barkRecognizer = new BarkRecognizer($door);
        $remote = new Remote($door);

        echo ("Fido barks to go outside...");
        // echo "<br>";
        // $remote->pressButton();
        $recognizer = $barkRecognizer->recognize(new Bark('Fido Bark1'));

        if (isset($recognizer['status']) && $recognizer['status'] === 'error') {
            var_dump($recognizer['message']);
            return;
        }

        echo ("Fido has gone outside...");
        echo "<br>";

        echo ("Fido’s all done...");
        echo "<br>";


        echo ("Fido’s back inside...");
        echo "<br>";

        sleep(2);
        $door->close(); // this step means the door close automatically        
    }
}
