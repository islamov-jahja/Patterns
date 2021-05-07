<?php


namespace strategy\strategies;


use strategy\interfaces\CalculateStrategyInterface;
use strategy\interfaces\UserInterface;

class AnalystSalaryCalculateStrategy implements CalculateStrategyInterface
{

    public function calculate(UserInterface $user): int
    {
        return $user->getType() * 12 + $user->getCountOfHoursOfWork()/4;
    }
}