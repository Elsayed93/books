<?php

namespace App\test;

use App\Classes\InstrumentSpecs\GuitarSpec;
use App\Classes\Inventory;

class FindGuitarsTester
{

    public function test(Inventory $inverntory)
    {
        $wantedGuitarSpec = new GuitarSpec('model2', 12);
        $wantedGuitarSpec->setBuilder('builder2');
        $wantedGuitarSpec->setType('type2');
        $wantedGuitarSpec->setTopWood('wood2');
        $wantedGuitarSpec->setBackWood('wood2');

        $matchingGuitars = $inverntory->search($wantedGuitarSpec);

        if ($matchingGuitars) {
            $userMessage = 'You might like these guitars: <hr>';

            foreach ($matchingGuitars as $key => $matchingGuitar) {

                $userMessage .= ' ' . $matchingGuitar->getGuitarSpec()->getBuilder() . ' ' . $matchingGuitar->getGuitarSpec()->getModel() . ' ' . $matchingGuitar->getGuitarSpec()->getType() . '<br>';
            }

            return $userMessage;
        } else {
            return 'Theres is no guitar for you';
        }
    }
}
