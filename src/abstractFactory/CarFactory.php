<?php


namespace abstractFactory;


use abstractFactory\interfaces\CarFactoryInterface;

class CarFactory
{
    /**
     * @throws \Exception
     */
    public function getFactory(string $className): CarFactoryInterface
    {
        return match ($className) {
            FordFactory::class => new FordFactory(),
            NissanFactory::class => new NissanFactory(),
            default => throw new \Exception(message: 'factory not found'),
        };
    }
}