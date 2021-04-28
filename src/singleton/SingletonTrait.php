<?php

namespace singleton;
trait SingletonTrait
{
    private static $instance;

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(): void{}

    public static function getInstance()
    {
        return static::$instance ?? static::$instance = new static();
    }
}