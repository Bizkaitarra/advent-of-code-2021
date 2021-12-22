<?php

namespace Api\Tests\Day7;

use AOC\Day6\Aquarius;
use AOC\Day6\AquariusFunctional;
use AOC\Day7\Day7;
use PHPUnit\Framework\TestCase;

class Day7Test extends TestCase
{
    public function testPart1ExampleInput()
    {
        $day7 = new Day7($this->getExampleInput());
        $this->assertEquals(37, $day7->getOptimusFuelConsumed());
    }

    public function testPart1PersonalInput()
    {
        $day7 = new Day7($this->getPersonalInput());
        $this->assertEquals(340987, $day7->getOptimusFuelConsumed());
    }

    public function testPart2ExampleInput()
    {
        $diagram = new Day7($this->getExampleInput());
        $this->assertEquals(168, $diagram->getOptimusFuelConsumedWithAccumulativeConsume());
    }

    public function testPart2PersonalInput()
    {
        $diagram = new Day7($this->getPersonalInput());
        $this->assertEquals(96987874, $diagram->getOptimusFuelConsumedWithAccumulativeConsume());
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
