<?php
namespace AOC\Day2Part2;

use AOC\Day2Part2\Instructions\Down;
use AOC\Day2Part2\Instructions\Forward;
use AOC\Day2Part2\Instructions\Instruction;
use AOC\Day2Part2\Instructions\InstructionNotSupportedException;
use AOC\Day2Part2\Instructions\Up;

class InstructionFactory
{

    public static function createInstructionFromString(string $instruction):Instruction {
        $instructionParts = explode(" ", $instruction);
        $instructionText = $instructionParts[0];
        $instructionSize = $instructionParts[1];
        switch (strtolower($instructionText)) {
            case 'forward':
                return new Forward($instructionSize);
            case 'up':
                return new Up($instructionSize);
            case 'down':
                return new Down($instructionSize);
            default:
                throw new InstructionNotSupportedException($instructionText);
        }

    }
}
