<?php

namespace AOC\Day4;

class Bingo
{
    private const NUMBER_OF_ROWS_INT_TICKET = 5;
    private const NUMBER_OF_COLS_INT_TICKET = 5;
    private array $bingoTickets;
    private array $balls;

    public function __construct(array $bingoTicketNumbers, array $balls)
    {
        $tickets = array_chunk($bingoTicketNumbers, self::NUMBER_OF_ROWS_INT_TICKET * self::NUMBER_OF_COLS_INT_TICKET);
        foreach ($tickets as $ticket) {
            $this->bingoTickets[] = new BingoTicket($ticket, self::NUMBER_OF_COLS_INT_TICKET);
        }
        $this->balls = $balls;
    }

    public function playToWin(): int
    {
        foreach ($this->balls as $ball) {
            /** @var BingoTicket $ticket */
            foreach ($this->bingoTickets as $ticket) {
                if ($ticket->markNumber($ball)) {
                    return $ticket->getUnMarketValuesScore() * $ball;
                }
            }
        }
        return 0;
    }

    public function playToLose(): int
    {
        $squidScore = 0;
        foreach ($this->balls as $ball) {
            /** @var BingoTicket $ticket */
            foreach ($this->bingoTickets as $ticket) {
                if ($ticket->markNumber($ball)) {
                    $squidScore =+ $ticket->getUnMarketValuesScore() * $ball;
                    $ticket->discardTicket();
                }
            }
        }
        return $squidScore;
    }


}
