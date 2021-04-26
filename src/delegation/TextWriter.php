<?php


namespace delegation;


use JetBrains\PhpStorm\Pure;

class TextWriter implements TextWriterInterface
{
    private TextWriterInterface $writer;

    #[Pure] public function __construct()
    {
        $this->writer = new HelloWorldWriter();
    }

    public function write(): void
    {
        $this->writer->write();
    }

    public function toHelloWorldWriter(): TextWriterInterface
    {
        $this->writer = new HelloWorldWriter();
        return $this;
    }

    public function toWhereAreYouFromWriter(): TextWriterInterface
    {
        $this->writer = new WhereAreYouFromWriter();
        return $this;
    }
}