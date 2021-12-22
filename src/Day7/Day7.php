<?php

namespace AOC\Day7;

class Day7
{
    private array $crabs;

    public function __construct(array $crabs)
    {
        $this->crabs = $crabs;
    }

    public function getOptimusFuelConsumed():int {
        $minNumber = min($this->crabs);
        $maxNumber = max($this->crabs);
        $fuelConsume = [];
        for ($i=$minNumber; $i<=$maxNumber;$i++) {
            $distances = 0;
            foreach ($this->crabs as $crab) {
                $distances += abs($crab-$i);
            }
            $fuelConsume[$i] = $distances;
        }
        return min($fuelConsume);
    }

    public function getOptimusFuelConsumedWithAccumulativeConsume():int {
        $minNumber = min($this->crabs);
        $maxNumber = max($this->crabs);
        $fuelConsume = [];
        for ($i=$minNumber; $i<=$maxNumber;$i++) {
            $distances = 0;
            foreach ($this->crabs as $crab) {
                $distances += array_sum(range(1,abs($crab-$i)));
            }
            $fuelConsume[$i] = $distances;
        }
        return min($fuelConsume);
    }


}
