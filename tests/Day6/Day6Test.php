<?php

namespace Api\Tests\Day6;

use AOC\Day6\AquariusFunctional;
use PHPUnit\Framework\TestCase;

class Day6Test extends TestCase
{
    public function testPart1ExampleInput()
    {
        $aquarius = new AquariusFunctional($this->getExampleInput());
        $this->assertEquals(5934, $aquarius->getHowManyLanterFishesAreAfterDays(80));
    }

    public function testPart1PersonalInput()
    {
        $aquarius = new AquariusFunctional($this->getPersonalInput());
        $this->assertEquals(394994, $aquarius->getHowManyLanterFishesAreAfterDays(80));
    }

    public function testPart2ExampleInput()
    {
        $diagram = new AquariusFunctional($this->getExampleInput());
        $this->assertEquals(26984457539, $diagram->getHowManyLanterFishesAreAfterDays(256));
    }

    public function testPart2PersonalInput()
    {
        $diagram = new AquariusFunctional($this->getPersonalInput());
        $this->assertEquals(1765974267455, $diagram->getHowManyLanterFishesAreAfterDays(256));
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
