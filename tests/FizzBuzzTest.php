<?php

use Kata\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     * @dataProvider provider
     */
    function it_generates_fizz_buzz_for_n($n, $expectedResult)
    {
        $result = FizzBuzz::generate($n);

        $this->assertEquals($expectedResult, $result);
    }

    function provider()
    {
        return [
            '1 for 1' => [1, 1],
            '2 for 2' => [2, 2],
            'Fizz for 3' => [3, 'Fizz'],
            '4 for 4' => [4, 4],
            'Buzz for 5' => [5, 'Buzz'],
            'Fizz for 6' => [6, 'Fizz'],
            '7 for 7' => [7, 7],
            '8 for 8' => [8, 8],
            'Fizz for 9' => [9, 'Fizz'],
            'Buzz for 10' => [10, 'Buzz'],
            'FizzBuzz for 15' => [15, 'FizzBuzz'],
        ];
    }

    /** @test */
    function it_generates_a_array_of_fizz_buzz()
    {
        $result = FizzBuzz::generateArray(10);

        $this->assertEquals([1, 2, 'Fizz', 4, 'Buzz', 'Fizz', 7, 8, 'Fizz', 'Buzz'], $result);
    }

    /** @test */
    function it_generates_a_string_of_fizz_buzz()
    {
        $result = FizzBuzz::generateText(10);

        $this->assertEquals('1\n2\nFizz\n4\nBuzz\nFizz\n7\n8\nFizz\nBuzz', $result);
    }

    /** @test */
    function it_accepts_a_custom_separator()
    {
        $result = FizzBuzz::generateText(10, ', ');

        $this->assertEquals('1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz', $result);
    }
}
