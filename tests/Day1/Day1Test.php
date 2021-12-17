<?php

namespace Tests\Day1;

use AOC\Day1\Day1;
use PHPUnit\Framework\TestCase;

class Day1Test extends TestCase
{
    public function testPart1ExampleInput()
    {
        $day1 = new Day1($this->getExampleInput());
        $this->assertEquals(7, $day1->getIncreases());
    }

    public function testPart1PersonalInput()
    {
        $day1 = new Day1($this->getPersonalInput());
        $this->assertEquals(1527, $day1->getIncreases());
    }

    public function testPart2ExampleInput()
    {
        $day1 = new Day1($this->getExampleInput());
        $this->assertEquals(5, $day1->getAccumulatedIncreases(3));
    }

    public function testPart2PersonalInput()
    {
        $day1 = new Day1($this->getPersonalInput());
        $this->assertEquals(1575, $day1->getAccumulatedIncreases(3));
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
