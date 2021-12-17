<?php

namespace Tests\Day3;

use AOC\Day3\Day3;
use PHPUnit\Framework\TestCase;

class Day3Test extends TestCase
{
    public function testPart1ExampleInput()
    {
        $day2 = new Day3($this->getExampleInput());
        $this->assertEquals(198, $day2->getConsumption());
    }

    public function testPart1PersonalInput()
    {
        $day2 = new Day3($this->getPersonalInput());
        $this->assertEquals(1092896, $day2->getConsumption());
    }

    private function getExampleInput(): array
    {
        return file(__DIR__ . '/example.txt', FILE_IGNORE_NEW_LINES);
    }

    private function getPersonalInput(): array
    {
        return file(__DIR__ . '/input.txt', FILE_IGNORE_NEW_LINES);
    }
}
