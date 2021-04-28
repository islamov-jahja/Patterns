<?php


namespace staticFactory;


use staticFactory\interfaces\CarInterface;

class Ford implements CarInterface
{

    public function startEngine(): void
    {
        var_dump('вун вун по фордски');
    }
}