<?php

namespace strategy;
use enums\UserTypeEnum;
use http\Client\Curl\User;
use strategy\interfaces\CalculateStrategyInterface;
use strategy\interfaces\UserInterface;
use strategy\strategies\AnalystSalaryCalculateStrategy;
use strategy\strategies\DeveloperSalaryCalculateStrategy;

class Accountant
{
    private CalculateStrategyInterface $strategy;

    /**@var UserInterface[] $users */
    public function getSumOfSalaries(array $users): int
    {
        $sum = 0;

        foreach ($users as $user){
            $this->setStrategy($user->getType());
            $sum +=$this->strategy->calculate($user);
        }

        return $sum;
    }

    private function setStrategy(int $userTypeEnum)
    {
        match ($userTypeEnum){
            UserTypeEnum::ANALYST => $this->strategy = new AnalystSalaryCalculateStrategy(),
            UserTypeEnum::DEVELOPER => $this->strategy = new DeveloperSalaryCalculateStrategy()
        };
    }
}