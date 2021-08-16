<?php

namespace Kata;

class FizzBuzz
{

    public static function generate(int $n): int|string
    {
        if($n % 15 == 0)
            return 'FizzBuzz';

        if($n % 3 == 0)
            return 'Fizz';

        if($n % 5 == 0)
            return 'Buzz';

        return $n;
    }

    public static function generateArray(int $n): array
    {
        $result = [];

        for($i = 1; $i <= $n; $i++) {
            $result[] = self::generate($i);
        }

        return $result;
    }

    public static function generateText(int $n, string $separator = '\n'): string
    {
        $fizzbuzz = self::generateArray($n);

        $result = implode($separator, $fizzbuzz);

        return $result;
    }
}
