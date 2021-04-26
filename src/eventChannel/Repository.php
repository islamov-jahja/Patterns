<?php

namespace eventChannel;

use eventChannel\interfaces\EventChannelInterface;
use eventChannel\interfaces\SubscriberInterface;

class Repository implements EventChannelInterface
{
    private array $branches = [];

    public function __construct(
        private $name
    ){}

    public function getName(): string
    {
        return $this->name;
    }

    public function publish(string $branch, array $changes): void
    {
        /**@var $subscribers SubscriberInterface[]*/
        $subscribers = $this->branches[$branch];
        foreach ($subscribers as $subscriber){
            if ($subscriber !== $this) {
                $subscriber->notify($changes);
            }
        }
    }

    public function subscribe(string $branch, SubscriberInterface $subscriber): void
    {
        $this->branches[$branch][] = $subscriber;
    }
}