<?php

namespace AOC\Day6;

class Aquarius
{
    private array $lanternFishes;

    public function __construct(array $lanternFishesCounters)
    {
        foreach ($lanternFishesCounters as $lanternFishCounter) {
            $this->lanternFishes[] = new LanternFish($lanternFishCounter);
        }
    }

    public function getHowManyLanterFishesAreAfterDays(int $days): int
    {
        $currentFishes = $this->lanternFishes;
        fwrite(STDERR, sprintf("\nDay %s are %s LanternFishes",0, count($currentFishes)));
        for ($i=0; $i<$days; $i++) {
            $nextFishes = [];
            /** @var LanternFish $fish */
            foreach ($currentFishes as $fish) {
                $nextFishes = array_merge($nextFishes, $fish->passOneDay());
            }
            fwrite(STDERR, sprintf("\nDay %s are %s LanternFishes",$i+1, count($nextFishes)));
            $currentFishes = $nextFishes;
        }
        return count($currentFishes);
    }

}
