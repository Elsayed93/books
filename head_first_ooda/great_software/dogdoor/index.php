<?php

use App\Test\DogDoorSimulator;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';


$test = new DogDoorSimulator();
echo($test->test());
