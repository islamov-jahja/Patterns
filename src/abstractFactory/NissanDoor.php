<?php


namespace abstractFactory;


use abstractFactory\interfaces\DoorInterface;

class NissanDoor implements DoorInterface
{
    private string $color = 'black';

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}