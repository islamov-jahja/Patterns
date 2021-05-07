<?php

namespace strategy\interfaces;

interface UserInterface
{
    public function getType(): int;
    public function getCountOfHoursOfWork(): int;
}