<?php


namespace factoryMethod;


use abstractFactory\FordDoor;
use abstractFactory\interfaces\DoorInterface;
use JetBrains\PhpStorm\Pure;

class FordCarShop extends CarShop
{

    #[Pure] function getDoor(): DoorInterface
    {
        return new FordDoor();
    }
}