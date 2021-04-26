<?php


namespace delegation;


class HelloWorldWriter implements TextWriterInterface
{

    public function write(): void
    {
        var_dump("hello world");
    }
}