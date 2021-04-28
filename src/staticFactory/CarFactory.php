<?php
namespace staticFactory;

use abstractFactory\interfaces\CarFactoryInterface;
use JetBrains\PhpStorm\Pure;
use staticFactory\interfaces\CarInterface;

class CarFactory
{
    #[Pure] public static function build(string $typeOfCar): CarInterface
    {
        return match ($typeOfCar){
            Nissan::class => new Nissan(),
            Ford::class => new Ford()
        };
    }
}