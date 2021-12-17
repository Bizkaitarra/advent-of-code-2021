<?php

namespace AOC\Day3;

class Day3
{
    private array $binaryValues;

    public function __construct(array $binaryValues)
    {
        $this->binaryValues = $binaryValues;
    }

    public function getConsumption(): int
    {
        $binaryValues = $this->calculateBinaryPositions();
        $gamma = $this->getGamma($binaryValues);
        $epsilon = $this->getEpsilon($binaryValues);
        return $gamma * $epsilon;
    }

    public function calculateBinaryPositions(): array
    {
        $binaryValues = [];
        foreach ($this->binaryValues as $binaryValue) {
            $bits = str_split($binaryValue);
            foreach ($bits as $key => $bit) {
                if (!array_key_exists($key, $binaryValues) || !$binaryValues[$key] instanceof BinaryPosition) {
                   $binaryValues[$key] = new BinaryPosition();
                }
                $binaryValues[$key]->addBinaryNumber($bit);
            }
        }
        return $binaryValues;
    }

    private function getGamma(array $binaryValues): int
    {
        $binaryNumber = '';
        /** @var BinaryPosition $binaryPosition */
        foreach ($binaryValues as $binaryPosition) {
            $binaryNumber.= $binaryPosition->getMostCommonDigit();
        }
        return bindec($binaryNumber);
    }

    private function getEpsilon(array $binaryValues): int
    {
        $binaryNumber = '';
        /** @var BinaryPosition $binaryPosition */
        foreach ($binaryValues as $binaryPosition) {
            $binaryNumber.= $binaryPosition->getLessCommonDigit();
        }
        return bindec($binaryNumber);
    }


}
