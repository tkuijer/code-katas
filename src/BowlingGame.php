<?php

namespace Kata;

class BowlingGame
{
    private array $rolls = [];
    private int $cursor = 0;

    public function roll(int $pinsDown): void
    {
        $this->rolls[] = $pinsDown;
    }

    public function score(): int
    {
        $score = 0;
        for($frame = 0; $frame < 10; $frame++) {
            $score += $this->calculateFrameScore();
        }
        return $score;
    }

    private function isStrikeFrame(): bool
    {
        return $this->rolls[$this->cursor] == 10;
    }

    private function isRegularFrame(): bool
    {
        return $this->rolls[$this->cursor] + $this->rolls[$this->cursor + 1] < 10;
    }

    /**
     * @return int
     */
    private function calculateFrameScore(): int
    {
        $frameScore = $this->rolls[$this->cursor];
        $frameScore += $this->rolls[$this->cursor + 1];

        if( ! $this->isRegularFrame() ) {
            $frameScore += $this->rolls[$this->cursor + 2];
        }

        if ($this->isStrikeFrame()) {
            $this->cursor--;
        }

        $this->cursor += 2;

        return $frameScore;
    }
}
