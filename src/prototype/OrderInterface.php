<?php

namespace prototype;
use protoype\interfaces\ClientInterface;
use protoype\interfaces\OrderInterface;

class Order implements OrderInterface
{
    public function __construct(private ClientInterface $client){}

    public function getClient(): \protoype\interfaces\ClientInterface
    {
        return $this->client;
    }

    public function __clone(): void
    {
        $this->client->addOrder($this);
    }
}