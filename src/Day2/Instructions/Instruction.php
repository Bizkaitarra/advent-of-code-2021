<?php

namespace AOC\Day2\Instructions;

use AOC\Day2\Position;

abstract class Instruction
{
    protected int $size;
    public abstract function moveFromCurrentPosition(Position $currentPosition):Position;
}
