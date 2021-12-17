<?php

namespace AOC\Day3;

class BinaryPosition
{
    private int $ones;
    private int $zeros;

    public function __construct()
    {
        $this->ones = 0;
        $this->zeros = 0;
    }

    public function addBinaryNumber(string $number) {
        if ($number === '0') {
            $this->zeros++;
        } else {
            $this->ones++;
        }
    }

    public function getMostCommonDigit(): int
    {
        if ($this->zeros > $this->ones) {
            return 0;
        }
        return 1;
    }

    public function getLessCommonDigit(): int
    {
        if ($this->zeros > $this->ones) {
            return 1;
        }
        return 0;
    }
}
