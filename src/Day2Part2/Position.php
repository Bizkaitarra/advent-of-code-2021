<?php
namespace AOC\Day2Part2;

class Position
{
    private int $depth;
    private int $horizontalPosition;
    private int $aim;

    public function __construct(int $depth, int $horizontalPosition, int $aim)
    {
        $this->depth = $depth;
        $this->horizontalPosition = $horizontalPosition;
        $this->aim = $aim;
    }

    public function getDepth(): int
    {
        return $this->depth;
    }

    public function getHorizontalPosition(): int
    {
        return $this->horizontalPosition;
    }

    public function getAim(): int
    {
        return $this->aim;
    }

    public function getCardinalPosition():int {
        return $this->depth * $this->horizontalPosition;
    }
}
