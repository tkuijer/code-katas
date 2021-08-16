<?php

use Kata\BowlingGame;
use PHPUnit\Framework\TestCase;

class BowlingGameTest extends TestCase
{

    private BowlingGame $game;

    protected function setUp(): void
    {
        $this->game = new BowlingGame();
    }

    /** @test */
    function it_can_score_a_gutter_game()
    {
        $this->roll(20, 0);

        $this->assertEquals(0, $this->game->score());
    }

    /** @test */
    function it_can_score_a_game_of_ones()
    {
        $this->roll(20, 1);

        $this->assertEquals(20, $this->game->score());
    }

    /** @test */
    function it_can_score_a_spare()
    {
        $this->game->roll(5);
        $this->game->roll(5);
        $this->game->roll(3);
        $this->roll(17, 0);

        $this->assertEquals(16, $this->game->score());
    }

    /** @test */
    function it_can_score_a_strike()
    {
        $this->game->roll(10);
        $this->game->roll(5);
        $this->roll(17, 0);

        $this->assertEquals(20, $this->game->score());
    }

    /** @test */
    function it_can_score_a_last_frame_spare()
    {
        $this->roll(18, 0);
        $this->roll(3, 5);

        $this->assertEquals(15, $this->game->score());
    }

    /** @test */
    function it_can_score_a_perfect_game()
    {
        $this->roll(12, 10);

        $this->assertEquals(300, $this->game->score());
    }

    private function roll(int $times, int $pinsDown): void
    {
        for ($i = 0; $i < $times; $i++) {
            $this->game->roll($pinsDown);
        }
    }
}
