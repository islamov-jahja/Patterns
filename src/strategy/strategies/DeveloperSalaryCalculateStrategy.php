<?php

namespace strategy\strategies;

use strategy\interfaces\CalculateStrategyInterface;
use strategy\interfaces\UserInterface;
class DeveloperSalaryCalculateStrategy implements CalculateStrategyInterface
{
    public function calculate(UserInterface $user): int
    {
        return $user->getType() * 2 + $user->getCountOfHoursOfWork();
    }
}