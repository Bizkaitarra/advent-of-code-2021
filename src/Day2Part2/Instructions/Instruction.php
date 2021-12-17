<?php

namespace AOC\Day2Part2\Instructions;

use AOC\Day2Part2\Position;

abstract class Instruction
{
    protected int $size;
    public abstract function moveFromCurrentPosition(Position $currentPosition):Position;
}
