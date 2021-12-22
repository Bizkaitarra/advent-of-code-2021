<?php

namespace Api\Tests\Day4;

use AOC\Day4\Bingo;
use PHPUnit\Framework\TestCase;

class Day4Test extends TestCase
{
    public function testPart1ExampleInput()
    {
        $bingo = new Bingo($this->getBingoTicketsExampleInput(), $this->getBallsExampleInput());
        $this->assertEquals(4512, $bingo->playToWin());
    }
    public function testPart1PersonalInput()
    {
        $bingo = new Bingo($this->getBingoTicketsPersonalInput(), $this->getBallsPersonalInput());
        $this->assertEquals(49686, $bingo->playToWin());
    }
    public function testPart2ExampleInput()
    {
        $bingo = new Bingo($this->getBingoTicketsExampleInput(), $this->getBallsExampleInput());
        $this->assertEquals(1924, $bingo->playToLose());
    }
    public function testPart2PersonalInput()
    {
        $bingo = new Bingo($this->getBingoTicketsPersonalInput(), $this->getBallsPersonalInput());
        $this->assertEquals(26878, $bingo->playToLose());
    }

    private function getBallsExampleInput(): array
    {
        return file(__DIR__ . '/balls_example.txt', FILE_IGNORE_NEW_LINES);
    }

    private function getBingoTicketsExampleInput(): array
    {
        return file(__DIR__ . '/tickets_example.txt', FILE_IGNORE_NEW_LINES);
    }

    private function getBallsPersonalInput(): array
    {
        return file(__DIR__ . '/balls_personal.txt', FILE_IGNORE_NEW_LINES);
    }

    private function getBingoTicketsPersonalInput(): array
    {
        return file(__DIR__ . '/tickets_personal.txt', FILE_IGNORE_NEW_LINES);
    }

}
