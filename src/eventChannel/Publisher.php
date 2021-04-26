<?php


namespace eventChannel;


use eventChannel\interfaces\EventChannelInterface;
use eventChannel\interfaces\PublisherInterface;

class Publisher implements PublisherInterface
{
    public function __construct(
        private string $branch,
        private EventChannelInterface $eventChannel
    )
    {
    }

    public function publish(array $changes): void
    {
        $this->eventChannel->publish($this->branch, $changes);
    }

    public function setBranch(string $branch)
    {
        $this->branch = $branch;
    }

    public function getBranch(): string
    {
        return $this->branch;
    }
}