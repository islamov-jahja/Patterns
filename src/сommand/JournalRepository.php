<?php


namespace command;


use command\interfaces\IJournalRepository;

class JournalRepository implements IJournalRepository
{

    public function create(int $journalType, string $text)
    {
        var_dump("created record in journal table");
    }
}