<?php

use Kata\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{

    /**
     * @test
     * @dataProvider provider
     */
    function it_prints_correctly_for_n($n, $expectedResult)
    {
        $result = RomanNumerals::generate($n);

        $this->assertEquals($expectedResult, $result);
    }

    function provider(): array
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
            [7, 'VII'],
            [8, 'VIII'],
            [9, 'IX'],
            [10, 'X'],
            [15, 'XV'],
            [19, 'XIX'],
            [20, 'XX'],
            [29, 'XXIX'],
            [49, 'IL'],
            [50, 'L'],
            [99, 'IC'],
            [100, 'C'],
            [499, 'ID'],
            [500, 'D'],
            [999, 'IM'],
            [1000, 'M'],
            [2021, 'MMXXI'],
        ];
    }
}
