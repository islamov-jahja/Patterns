<?php


namespace command\interfaces;


interface IJournalRepository
{
    public function create(int $journalType, string $text);
}