<?php

namespace abstractFactory\interfaces;

interface CarFactoryInterface
{
    public function getDoor(): DoorInterface;
    public function mirror(): MirrorInterface;
}