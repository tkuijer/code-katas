<?php

use Kata\PrimeFactor;
use PHPUnit\Framework\TestCase;

class PrimeFactorTest extends TestCase
{
    /**
     * @test
     * @dataProvider provider
     */
    function it_generates_prime_factors_for_n($n, $expectedResult)
    {
        $factors = PrimeFactor::generate($n);

        $this->assertEquals($expectedResult, $factors);
    }

    function provider()
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [5, [5]],
            [6, [2, 3]],
            [7, [7]],
            [8, [2, 2, 2]],
            [9, [3, 3]],
            [10, [2, 5]],
            [11, [11]],
            [12, [2, 2, 3]],
            [2 * 2 * 2 * 3 * 5 * 7 * 11, [2, 2, 2, 3, 5, 7, 11]],
        ];
    }
}
