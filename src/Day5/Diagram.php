<?php

namespace AOC\Day5;

class Diagram
{
    private array $lines;

    public function __construct(array $values)
    {
        foreach ($values as $row) {
            $points = explode('->', trim($row));
            $point1 = explode(',', $points[0]);
            $point2 = explode(',', $points[1]);
            $this->lines [] = new Line((int)$point1[0], (int)$point1[1],(int)$point2[0], (int)$point2[1]);
        }
    }

    public function getPointsThatAreInMoreThanOneLine($excludeDiagonals = true): int
    {
        $points = [];
        $countedPoints = [];
        $moreThanOneLinePoints = 0;
        /** @var Line $line */
        foreach ($this->lines as $line) {
            if (!$excludeDiagonals || $line->isHorizontalOrVerticalLine()) {
                $points = array_merge ($points, $line->getAllPoints());
            }
        }
        /** @var Point $point */
        foreach ($points as $point) {
            if (!array_key_exists($point->getIndex(), $countedPoints)) {
                $countedPoints[$point->getIndex()] = 0;
            }
            $countedPoints[$point->getIndex()]++;
            if ($countedPoints[$point->getIndex()] === 2) {
                $moreThanOneLinePoints++;
            }
        }
//        $pointsWithMoreThanOne = [];
//        foreach ($countedPoints as $key => $value) {
//            if ($value > 1) {
//                $pointsWithMoreThanOne[$key] = $value;
//            }
//        }
        return $moreThanOneLinePoints;
    }
}
