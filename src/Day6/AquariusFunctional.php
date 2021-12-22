<?php

namespace AOC\Day6;

class AquariusFunctional
{
    private array $lanternFishes;

    public function __construct(array $lanternFishesCounters)
    {
        for ($i=0;$i<=8;$i++) {
            $this->lanternFishes[$i] = 0;
        }
        foreach ($lanternFishesCounters as $lanternFishCounter) {
            $this->lanternFishes[$lanternFishCounter]++;
        }
    }
    public function getHowManyLanterFishesAreAfterDays(int $days): int
    {
        $currentFishes = $this->lanternFishes;
        fwrite(STDERR, sprintf("\nDay %s are %s LanternFishes",0, count($currentFishes)));
        for ($i=0; $i<$days; $i++) {
            $nextFishes = $this->getEmptyArray();

            for ($j = 8; $j >= 0; $j--) {
                if ($j > 0) {
                    $nextFishes[$j-1] += $currentFishes[$j];
                } else {
                    $nextFishes[8] = $currentFishes[$j];
                    $nextFishes[6] += $currentFishes[$j];
                }
            }
            fwrite(STDERR, sprintf("\nDay %s are %s LanternFishes",$i+1, array_sum($nextFishes)));
            $currentFishes = $nextFishes;
        }

        return array_sum($currentFishes);
    }

    private function getEmptyArray() {
        $array = [];
        for ($i = 0; $i <= 8; $i++) {
            $array[$i] = 0;
        }
        return $array;
    }
}
