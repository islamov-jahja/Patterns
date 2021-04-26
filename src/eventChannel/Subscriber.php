<?php

namespace eventChannel;

class Subscriber implements \eventChannel\interfaces\SubscriberInterface
{
    public function notify(array $changes)
    {
        var_dump("you need to pull changes: ");
        var_dump($changes);
    }
}