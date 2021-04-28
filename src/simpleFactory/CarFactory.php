<?php

namespace simpleFactory;

use JetBrains\PhpStorm\Pure;
use staticFactory\Ford;
use staticFactory\Nissan;

class CarFactory
{
    #[Pure] public function build(string $type)
    {
        return match ($type){
          Nissan::class => new Nissan(),
          Ford::class => new Ford()
        };
    }
}