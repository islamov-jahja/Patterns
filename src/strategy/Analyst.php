<?php


namespace strategy;


use enums\UserTypeEnum;
use strategy\interfaces\UserInterface;

class Analyst implements UserInterface
{

    public function __construct(private int $countOfHoursOfWork)
    {}
    public function getType(): int
    {
        return UserTypeEnum::ANALYST;
    }

    public function getCountOfHoursOfWork(): int
    {
        return $this->countOfHoursOfWork;
    }
}