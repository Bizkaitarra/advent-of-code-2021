<?php

namespace AOC\Day1;

class Day1
{
    private array $measures;

    public function __construct(array $measures)
    {
        $this->measures = $measures;
    }

    public function getIncreases(): int
    {
        return $this->calculateIncreases($this->measures);
    }

    public function getAccumulatedIncreases(int $groupSize): int
    {
        $accumulatedMeasureList = [];
        for ($i = 0; $i <= count($this->measures)-$groupSize; $i++) {

            $accumulatedMeasure = $this->measures[$i] + $this->measures[$i+1] + $this->measures[$i+2];
            $accumulatedMeasureList[] = $accumulatedMeasure;
        }
        return $this->calculateIncreases($accumulatedMeasureList);
    }

    private function calculateIncreases(array $measures): int
    {
        $increases = 0;
        for ($i = 1; $i < count($measures); $i++) {
            $previousMeasure = $measures[$i - 1];
            $currentMeasure = $measures[$i];
            if ($previousMeasure < $currentMeasure) {
                $increases++;
            }
        }
        return $increases;
    }
}
