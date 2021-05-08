<?php


namespace facade;


use facade\interfaces\ComputerInterface;

/*можно как скрывать сложную логику, так и при использовании какой либо библиотекой ограничиться только нужными методами,
добавив еще какую то логику поверх */
class ComputerFacade
{
    public function __construct(private ComputerInterface $computer){}

    public function on()
    {
        $this->computer->plugTheCableIntoTheSocket();
        $this->computer->pressToPowerButton();
    }
}