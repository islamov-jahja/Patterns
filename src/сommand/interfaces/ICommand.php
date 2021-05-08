<?php

namespace command\interfaces;

interface ICommand
{
    public function execute(): void;
}