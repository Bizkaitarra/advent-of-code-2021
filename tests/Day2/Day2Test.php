<?php

namespace Api\Tests\Day2;

use AOC\Day1\Day1;
use AOC\Day2\Day2;
use AOC\Day2Part2\Day2Part2;
use PHPUnit\Framework\TestCase;

class Day2Test extends TestCase
{
    public function testPart1ExampleInput()
    {
        $day2 = new Day2($this->getExampleInput());
        $this->assertEquals(150, $day2->getFinalPosition());
    }

    public function testPart1PersonalInput()
    {
        $day2 = new Day2($this->getPersonalInput());
        $this->assertEquals(1947824, $day2->getFinalPosition());
    }
    public function testPart2ExampleInput()
    {
        $day2 = new Day2Part2($this->getExampleInput());
        $this->assertEquals(900, $day2->getFinalPosition());
    }

    public function testPart2PersonalInput()
    {
        $day2 = new Day2Part2($this->getPersonalInput());
        $this->assertEquals(1813062561, $day2->getFinalPosition());
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
