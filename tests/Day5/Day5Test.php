<?php

namespace Api\Tests\Day5;

use AOC\Day3\Day3;
use AOC\Day5\Diagram;
use PHPUnit\Framework\TestCase;

class Day5Test extends TestCase
{
    public function testPart1ExampleInput()
    {
        $diagram = new Diagram($this->getExampleInput());
        $this->assertEquals(5, $diagram->getPointsThatAreInMoreThanOneLine());
    }

    public function testPart1PersonalInput()
    {
        $diagram = new Diagram($this->getPersonalInput());
        $this->assertEquals(6225, $diagram->getPointsThatAreInMoreThanOneLine());
    }
    public function testPart2ExampleInput()
    {
        $diagram = new Diagram($this->getExampleInput());
        $this->assertEquals(12, $diagram->getPointsThatAreInMoreThanOneLine(false));
    }

    public function testPart2PersonalInput()
    {
        $diagram = new Diagram($this->getPersonalInput());
        $this->assertEquals(22116, $diagram->getPointsThatAreInMoreThanOneLine(false));
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
