<?php

namespace command;

use command\interfaces\ICommand;
use command\interfaces\IJournalRepository;

class JournalWriteCommand implements ICommand
{
    public function __construct(
        private IJournalRepository $journalRepository,
        private int $journalType,
        private string $text
    ){}

    public function execute(): void
    {
        $this->journalRepository->create($this->journalType, $this->text);
    }
}