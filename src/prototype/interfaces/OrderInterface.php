<?php

namespace protoype\interfaces;

interface OrderInterface
{
    public function getClient(): ClientInterface;
}