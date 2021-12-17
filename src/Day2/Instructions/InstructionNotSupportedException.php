<?php

namespace AOC\Day2\Instructions;
class InstructionNotSupportedException extends \LogicException
{
    public function __construct(string $instruction)
    {
        parent::__construct('Instruction %s is not supported.', $instruction);
    }
}
