<?php


namespace eventChannel\interfaces;


interface SubscriberInterface
{
    public function notify(array $changes);
}