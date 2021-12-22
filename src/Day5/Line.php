<?php

namespace AOC\Day5;

class Line
{
    private Point $firstPoint;
    private Point $secondPoint;

    public function __construct(int $x1, int $y1, int $x2, int $y2)
    {
        $this->firstPoint = new Point($x1, $y1);
        $this->secondPoint = new Point($x2, $y2);
    }

    public function isHorizontalOrVerticalLine(): bool
    {
        return
            $this->firstPoint->getX() === $this->secondPoint->getX() ||
            $this->firstPoint->getY() === $this->secondPoint->getY();
    }

    public function getAllPoints(): array
    {
        $x1 = $this->firstPoint->getX();
        $x2 = $this->secondPoint->getX();
        $y1 = $this->firstPoint->getY();
        $y2 = $this->secondPoint->getY();

        if ($this->isHorizontalOrVerticalLine()) {
            return array_merge(
                [$this->firstPoint, $this->secondPoint],
                $this->getXAxisPointsBetween($x1, $x2, $y1),
                $this->getYAxisPointsBetween($y1, $y2, $x1)
            );
        }
        return $this->getXAxisPointsBetweenDiagonal($x1, $x2, $y1, $y2);
    }

    private function getXAxisPointsBetweenDiagonal(int $x1, int $x2, int $y1, int $y2): array
    {
        $points = [];
        $xPoints = range($x1, $x2);
        $yPoints = range($y1, $y2);
        //$yPoints and $xPoints should have same size as it is 45 degree diagonal
        for ($i=0; $i < count($xPoints); $i++) {
            $points[] = new Point($xPoints[$i], $yPoints[$i]);
        }
        return $points;
    }

    private function getXAxisPointsBetween(int $x1, int $x2, int $y): array
    {
        $points = [];
        $greaterX = null;
        $lessX = null;
        if ($x1 > $x2) {
            $greaterX = $x1;
            $lessX = $x2;
        } elseif ($x2 > $x1) {
            $greaterX = $x2;
            $lessX = $x1;
        }
        if ($greaterX !== null) {
            for ($x = $lessX+1; $x < $greaterX; $x++) {
                $points[] = new Point($x, $y);
            }
        }
        return $points;
    }

    private function getYAxisPointsBetween(int $y1, int $y2, int $x): array
    {
        $points = [];
        $greaterY = null;
        $lessY = null;
        if ($y1 > $y2) {
            $greaterY = $y1;
            $lessY = $y2;
        } elseif ($y2 > $y1) {
            $greaterY = $y2;
            $lessY = $y1;
        }
        if ($greaterY !== null) {
            for ($y = $lessY+1; $y < $greaterY; $y++) {
                $points[] = new Point($x, $y);
            }
        }
        return $points;
    }


}
