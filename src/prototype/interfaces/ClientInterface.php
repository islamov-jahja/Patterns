<?php


namespace protoype\interfaces;


interface ClientInterface
{
    /**@return OrderInterface[]*/
    public function getOrders(): array;
    public function addOrder(OrderInterface $order);
}