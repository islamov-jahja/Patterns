<?php


namespace delegation;


class WhereAreYouFromWriter implements TextWriterInterface
{

    public function write(): void
    {
        var_dump("where are you");
    }
}