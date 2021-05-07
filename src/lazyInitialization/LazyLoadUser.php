<?php

namespace lazyInitialization;

use builder\User;
use lazyInitialization\interfaces\LazyLoadUserInterface;
use staticFactory\Ford;

class LazyLoadUser implements LazyLoadUserInterface
{
    //суть паттерна в том, что объекты загружаются по мере необходимости
    private User $user;
    private Ford $car;

    public function getUser(): User
    {
        if ($this->user === null){
            $this->user = new User();
        }

        return $this->user;
    }

    public function getCar(): Ford
    {
        if ($this->car === null){
            $this->car = new Ford();
        }

        return $this->car;
    }
}