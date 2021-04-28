<?php


namespace factoryMethod;


use abstractFactory\interfaces\DoorInterface;
use abstractFactory\NissanDoor;
use JetBrains\PhpStorm\Pure;

class NissanCarShop extends CarShop
{

    #[Pure] function getDoor(): DoorInterface
    {
        return new NissanDoor();
    }
}