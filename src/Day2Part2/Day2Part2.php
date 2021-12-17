<?php

namespace AOC\Day2Part2;

use AOC\Day2Part2\Instructions\Instruction;

class Day2Part2
{
    private array $instructions;

    public function __construct(array $instructions)
    {
        foreach ($instructions as $stringInstruction) {
            $this->instructions[] = InstructionFactory::createInstructionFromString($stringInstruction);
        }
    }

    public function getFinalPosition(): int
    {
        $currentPosition = new Position(0,0, 0);

        /** @var Instruction $instruction */
        foreach ($this->instructions as $instruction) {
            $currentPosition = $instruction->moveFromCurrentPosition($currentPosition);
        }

        return $currentPosition->getCardinalPosition();
    }


}
