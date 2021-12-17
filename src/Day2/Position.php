<?php
namespace AOC\Day2;

class Position
{
    private int $depth;
    private int $horizontalPosition;

    public function __construct(int $depth, int $horizontalPosition)
    {
        $this->depth = $depth;
        $this->horizontalPosition = $horizontalPosition;
    }

    public function getDepth(): int
    {
        return $this->depth;
    }

    public function getHorizontalPosition(): int
    {
        return $this->horizontalPosition;
    }

    public function getCardinalPosition():int {
        return $this->depth * $this->horizontalPosition;
    }
}
