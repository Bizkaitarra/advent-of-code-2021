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
                $binaryValues[$key]->addBinaryNumber($bit, $binaryValue);
            }
        }
        return $binaryValues;
    }

    public function getLifeSupportRating(): int
    {
        return $this->getOxygenGeneratorRating() * $this->getCO2ScrubberRating();
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

    private function getOxygenGeneratorRating(): int
    {
        $nextValues = null;
        for ($position = 0; $position < strlen($this->binaryValues[0]);$position++) {
            $binaryPosition = new BinaryPosition();
            if ($nextValues === null) {
                $nextValues = $this->binaryValues;
            }
            foreach ($nextValues as $binaryValue) {
                $binaryPosition->addBinaryNumber(substr($binaryValue, $position, 1), $binaryValue);
            }
            $nextValues = $binaryPosition->getMostCommonDigitValues();
            if (count($nextValues) === 1) {
                return bindec($nextValues[0]);
            }
        }
        return bindec($nextValues[0]);
    }

    private function getCO2ScrubberRating(): int
    {
        $nextValues = null;
        for ($position = 0; $position < strlen($this->binaryValues[0]);$position++) {
            $binaryPosition = new BinaryPosition();
            if ($nextValues === null) {
                $nextValues = $this->binaryValues;
            }
            foreach ($nextValues as $binaryValue) {
                $binaryPosition->addBinaryNumber(substr($binaryValue, $position, 1), $binaryValue);
            }
            $nextValues = $binaryPosition->getLessCommonDigitValues();
            if (count($nextValues) === 1) {
                return bindec($nextValues[0]);
            }
        }
        return bindec($nextValues[0]);
    }


}
