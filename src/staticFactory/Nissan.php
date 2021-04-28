<?php


namespace staticFactory;


use staticFactory\interfaces\CarInterface;

class Nissan implements CarInterface
{

    public function startEngine(): void
    {
        var_dump("вун вун по ниссански");
    }
}