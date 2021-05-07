<?php

namespace lazyInitialization\interfaces;

use builder\User;
use staticFactory\Ford;

interface LazyLoadUserInterface
{
    public function getUser(): User;
    public function getCar(): Ford;
}