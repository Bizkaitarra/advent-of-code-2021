<?php

namespace AOC\Day4;

class Number
{
    private bool $isMark;
    private int $value;

    public function __construct(int $value)
    {
        $this->isMark = false;
        $this->value = $value;
    }

    public function mark() {
        $this->isMark = true;
    }

    public function isMark(): bool
    {
        return $this->isMark;
    }

    public function getValue(): int
    {
        return $this->value;
    }



}
