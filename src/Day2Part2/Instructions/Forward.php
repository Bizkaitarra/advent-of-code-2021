<?php

namespace AOC\Day2Part2\Instructions;

use AOC\Day2Part2\Position;

class Forward extends Instruction
{
    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function moveFromCurrentPosition(Position $currentPosition): Position
    {
        return new Position(
            $currentPosition->getDepth() + ($currentPosition->getAim()*$this->size),
            $currentPosition->getHorizontalPosition() + $this->size,
            $currentPosition->getAim()
        );
    }
}
