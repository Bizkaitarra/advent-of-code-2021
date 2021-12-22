<?php

namespace AOC\Day6;

class LanternFish
{
    private int $counter;

    public function __construct(int $counter)
    {
        $this->counter = $counter;
    }

    public function passOneDay(): array
    {
        if ($this->counter === 0) {
            $this->counter = 6;
            return [$this, new LanternFish(8)];
        }
        $this->counter --;
        return [$this];
    }


}
