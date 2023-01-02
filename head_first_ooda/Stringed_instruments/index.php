<?php

use App\Classes\Instruments\Guitar;
use App\Classes\InstrumentSpecs\GuitarSpec;
use App\Classes\Inventory;
use App\test\FindGuitarsTester;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

// guitar 1
$guitar1Specs = new GuitarSpec('model1', 6);
$guitar1Specs->setBuilder('builder1');
$guitar1Specs->setType('type1');
$guitar1Specs->setTopWood('wood1');
$guitar1Specs->setBackWood('wood1');

$guitar1 = new Guitar('serial1', 100, $guitar1Specs);
var_dump($guitar1);
die;

// guitar 2
$guitar2Specs = new GuitarSpec('model2', 6);
$guitar2Specs->setBuilder('builder2');
$guitar2Specs->setType('type2');
$guitar2Specs->setTopWood('wood2');
$guitar2Specs->setBackWood('wood2');

$guitar2 = new Guitar('serial2', 200, $guitar2Specs);


// guitar 3 
$guitar3Specs = new GuitarSpec('model2', 12);
$guitar3Specs->setBuilder('builder2');
$guitar3Specs->setType('type2');
$guitar3Specs->setTopWood('wood2');
$guitar3Specs->setBackWood('wood2');

$guitar3 = new Guitar('serial3', 300, $guitar3Specs);



// inventory
$inventory1 = new Inventory();
$inventory1->addGuitar($guitar1);
$inventory1->addGuitar($guitar2);
$inventory1->addGuitar($guitar3);

// var_dump($inventory1->listAllGuitars());
// exit;

$test = new FindGuitarsTester();
echo ($test->test($inventory1));
