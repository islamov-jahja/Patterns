<?php

namespace factoryMethod;

use abstractFactory\interfaces\DoorInterface;

abstract class CarShop
{
    public function sellRedDoor(): DoorInterface
    {
        $door =  $this->getDoor();
        $door->setColor('red');
        return $door;
    }

    abstract function getDoor(): DoorInterface;
}