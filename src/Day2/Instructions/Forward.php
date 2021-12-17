<?php

namespace AOC\Day2\Instructions;

use AOC\Day2\Position;

class Forward extends Instruction
{
    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function moveFromCurrentPosition(Position $currentPosition): Position
    {
        return new Position($currentPosition->getDepth(), $currentPosition->getHorizontalPosition() + $this->size);
    }
}
