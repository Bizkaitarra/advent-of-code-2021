<?php

namespace Api\Tests\Day5;

use AOC\Day5\Line;
use AOC\Day5\Point;
use PHPUnit\Framework\TestCase;

class LineTest extends TestCase
{
    public function testDiagonalLine() {
        $line = new Line(2,1,0,3);
        $expectedPoints["2,1"] = 1;
        $expectedPoints["1,2"] = 1;
        $expectedPoints["0,3"] = 1;
        $points = $line->getAllPoints();
        $pointsAsText = [];
        $this->assertCount(3, $points);
        /** @var Point $point */
        foreach($points as $point) {
            $this->assertArrayHasKey($point->getIndex(), $expectedPoints);
            $pointsAsText[$point->getIndex()] = 1;
        }

    }
}
