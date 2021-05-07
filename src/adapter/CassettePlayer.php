<?php


namespace adapter;


use adapter\interfaces\CassettePlayerInterface;

class CassettePlayer implements CassettePlayerInterface
{

    public function playMusic(): void
    {
        var_dump('music');
    }
}