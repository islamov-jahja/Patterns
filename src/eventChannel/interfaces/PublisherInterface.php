<?php


namespace eventChannel\interfaces;


interface PublisherInterface
{
    public function publish(array $changes): void;
}