<?php

namespace strategy;

use enums\UserTypeEnum;
use strategy\interfaces\UserInterface;

class Developer implements UserInterface
{
    public function __construct(private int $countOfWorks){}
    public function getCountOfHoursOfWork(): int
    {
        return $this->countOfWorks;
    }

    public function getType(): int
    {
        return UserTypeEnum::DEVELOPER;
    }
}