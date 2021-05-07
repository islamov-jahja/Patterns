<?php

namespace adapter;

use adapter\interfaces\DvdPlayerInterface;

class DvdPlayer implements DvdPlayerInterface
{

    public function playMp4Music(): void
    {
        var_dump("mp4 music");
    }
}