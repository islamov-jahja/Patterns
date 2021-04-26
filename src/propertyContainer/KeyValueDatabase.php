<?php


namespace propertyContainer;


class KeyValueDatabase extends PropertyContainer
{
    public function __construct(
        private string $databaseName
    ){}

    public function getDatabaseName(): string
    {
        return $this->databaseName;
    }

}