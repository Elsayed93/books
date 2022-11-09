<?php

use App\classes\Guitar;
use App\classes\Inventory;
use App\test\FindGuitars;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';


$guitar1 = new Guitar('serial1', 100,  'model1');
$guitar1->setBuilder('builder1');
$guitar1->setType('type1');
$guitar1->setTopWood('wood1');
$guitar1->setBackWood('wood1');


$guitar2 = new Guitar('serial2', 200,  'model2');
$guitar2->setBuilder('builder2');
$guitar2->setType('type2');
$guitar2->setTopWood('wood2');
$guitar2->setBackWood('wood2');

$guitar3 = new Guitar('serial3', 300,  'model2');
$guitar3->setBuilder('builder2');
$guitar3->setType('type2');
$guitar3->setTopWood('wood2');
$guitar3->setBackWood('wood2');


$inventory1 = new Inventory();
$inventory1->addGuitar($guitar1);
$inventory1->addGuitar($guitar2);
$inventory1->addGuitar($guitar3);


$test = new FindGuitars();
// var_dump($test->test($inventory1));
echo($test->test($inventory1));
