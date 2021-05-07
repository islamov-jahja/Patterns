<?php

namespace strategy\interfaces;

interface CalculateStrategyInterface
{
    public function calculate(UserInterface $user): int;
}