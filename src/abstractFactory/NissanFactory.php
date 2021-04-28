<?php


namespace abstractFactory;


use abstractFactory\interfaces\CarFactoryInterface;
use abstractFactory\interfaces\DoorInterface;
use abstractFactory\interfaces\MirrorInterface;
use JetBrains\PhpStorm\Pure;

class NissanFactory implements CarFactoryInterface
{

    #[Pure] public function getDoor(): DoorInterface
    {
        return new NissanDoor();
    }

    #[Pure] public function mirror(): MirrorInterface
    {
        return new NissanMirror();
    }
}