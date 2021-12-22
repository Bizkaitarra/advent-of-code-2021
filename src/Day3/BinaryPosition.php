<?php

namespace AOC\Day3;

class BinaryPosition
{
    private array $ones = [];
    private array $zeros = [];

    public function addBinaryNumber(string $digit, string $number) {
        if ($digit === '0') {
            $this->zeros[] = $number;
        } else {
            $this->ones[] = $number;
        }
    }

    public function getMostCommonDigit(): int
    {
        if (count($this->zeros) > count($this->ones)) {
            return 0;
        }
        return 1;
    }

    public function getLessCommonDigit(): int
    {
        if (count($this->zeros) > count($this->ones)) {
            return 1;
        }
        return 0;
    }

    public function getMostCommonDigitValues(): array
    {
        if ($this->getMostCommonDigit() === 0) {
            return $this->zeros;
        }
        return $this->ones;
    }

    public function getLessCommonDigitValues(): array
    {
        if ($this->getLessCommonDigit() === 0) {
            return $this->zeros;
        }
        return $this->ones;
    }
}
