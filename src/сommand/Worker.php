<?php


namespace command;


use command\interfaces\ICommand;

class Worker
{
    private ICommand $onSave;

    /**
     * @param ICommand $onSave
     */
    public function setOnSave(ICommand $onSave): void
    {
        $this->onSave = $onSave;
    }

    public function save()
    {
        $this->onSave->execute();
    }
}