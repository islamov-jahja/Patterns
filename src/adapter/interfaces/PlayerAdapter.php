<?php


namespace adapter\interfaces;


use adapter\DvdPlayer;
use JetBrains\PhpStorm\Pure;

class PlayerAdapter implements CassettePlayerInterface
{
    private DvdPlayerInterface $player;

    #[Pure] public function __construct()
    {
        $this->player = new DvdPlayer();
    }
    public function playMusic(): void
    {
        $this->player->playMp4Music();
    }
}