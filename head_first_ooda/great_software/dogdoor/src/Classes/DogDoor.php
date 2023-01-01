<?php

namespace App\Classes;

class DogDoor
{
    private bool $open;
    // private string $ownerDogBark;
    // private Bark $allowedBark;
    private array $allowedBarks = [];

    public function __construct()
    {
        $this->open = false;
    }

    public function open(): void
    {
        echo 'The dog door opens.';
        echo '<br>';
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

    // public function setOwnerDogBark(string $ownerDogBark): void
    // {
    //     $this->ownerDogBark = $ownerDogBark;
    // }

    // public function getOwnerDogBark(): string
    // {
    //     return $this->ownerDogBark;
    // }


    public function addAllowedBarkObj(Bark $allowedBark): void
    {
        array_push($this->allowedBarks, $allowedBark);
    }

    public function getAllowedBarks(): array
    {
        return $this->allowedBarks;
    }
}
