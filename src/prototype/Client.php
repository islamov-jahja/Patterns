<?php

namespace prototype;

use protoype\interfaces\ClientInterface;
use protoype\interfaces\OrderInterface;

class Client implements ClientInterface
{
    /**@var OrderInterface[] $orders*/
    private array $orders;
    public function getOrders(): array
    {
        return $this->orders;
    }

    public function addOrder(OrderInterface $order)
    {
        $this->orders[] = $order;
    }
}