<?php

namespace App\Classes;

class BarkRecognizer
{

    private DogDoor $dogDoor;

    public function __construct(DogDoor $dogDoor)
    {
        $this->dogDoor = $dogDoor;
    }

    public function recognize(Bark $bark)
    {
        echo "BarkRecognizer: Heard a {$bark->getSound()} ....";

        // open door if the bark is the owner dog bark
        // if ($this->dogDoor->getOwnerDogBark() == $bark) {
        //     $this->dogDoor->open();
        // } else {
        //     echo 'Not valida barking ....';
        // }

        $allowedBarks = $this->dogDoor->getAllowedBarks();

        foreach ($allowedBarks as $key => $allowedBark) {

            if ($allowedBark->isAllowedBark($bark)) {
                $this->dogDoor->open();
                return;
            }
        }

        return [
            'status' => 'error',
            'message' => 'Not valid barking ....',
        ];
    }
}
