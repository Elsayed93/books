<?php

namespace App\test;

use App\classes\Guitar;
use App\classes\Inventory;

class FindGuitars
{

    public function test(Inventory $inverntory)
    {
        $wantedGuitar = new Guitar('', 0, 'model2');
        $wantedGuitar->setBuilder('builder2');
        $wantedGuitar->setType('type2');
        $wantedGuitar->setTopWood('wood2');
        $wantedGuitar->setBackWood('wood2');


        $matchingGuitars = $inverntory->search($wantedGuitar);

        if ($matchingGuitars) {
            $userMessage = 'You might like these guitars: <hr>';

            foreach ($matchingGuitars as $key => $matchingGuitar) {

                $userMessage .= ' ' . $matchingGuitar->getBuilder() . ' ' . $matchingGuitar->getModel() . ' ' . $matchingGuitar->getType() . '<br>';
            }

            return $userMessage;
        } else {
            return 'Theres is no guitar for you';
        }
    }
}
