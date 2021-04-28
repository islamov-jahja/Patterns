<?php

namespace abstractFactory\interfaces;

interface DoorInterface
{
    public function setColor(string $color);
    public function getColor(): string;
}