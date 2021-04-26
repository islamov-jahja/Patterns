<?php

namespace eventChannel\interfaces;

interface EventChannelInterface
{
    public function publish(string $branch, array $changes): void;
    public function subscribe(string $branch, SubscriberInterface $subscriber): void;
}