<?php

namespace AOC\Day4;

class BingoTicket
{
    private array $values;
    private bool  $isDiscarded;

    public function __construct(array $values, int $numberOfColumns)
    {
        $this->isDiscarded = false;
        $row = 0;
        $col = 0;
        foreach ($values as $value) {
            $this->values[$row][$col] = new Number((int)$value);
            $col++;
            if ($col === $numberOfColumns) {
                $col = 0;
                $row++;
            }
        }
    }

    /**
     * Marks the number in the ticket if exists.
     * Returns if the ticket has won
     * @param int $number
     *
     * @return bool
     */
    public function markNumber(int $number): bool
    {
        if ($this->isDiscarded) {
            return false;
        }
        foreach ($this->values as $rowIndex => $row) {
            /** @var Number $value */
            foreach ($row as $colIndex => $value) {
                if ($value->getValue() === $number) {
                    $value->mark();
                    return $this->hasWon($rowIndex, $colIndex);
                }
            }
        }
        return false;
    }

    public function getUnMarketValuesScore(): int
    {
        $score = 0;
        foreach ($this->values as $row) {
            foreach ($row as $value) {
                if (!$value->isMark()) {
                    $score += $value->getValue();
                }
            }
        }
        return $score;
    }

    public function discardTicket() {
        $this->isDiscarded = true;
    }

    /**
     * We calculate if the col or the line is completed
     * @param int $row
     * @param int $col
     */
    private function hasWon(int $row, int $col): bool
    {

        if ($this->hasWonRow($row)) {
            return true;
        }

        if ($this->hasWonCol($col)) {
            return true;
        }

        return false;

    }

    private function hasWonRow(int $row): bool
    {
        foreach ($this->values[$row] as $value) {
            if (!$value->isMark()) {
                return false;
            }
        }
        return true;
    }

    private function hasWonCol(int $col): bool
    {
        foreach ($this->values as $row) {
            if (!$row[$col]->isMark()) {
                return false;
            }
        }
        return true;
    }
}
