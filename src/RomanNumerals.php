<?php

namespace Kata;

class RomanNumerals
{

    private const NUMERALS = [
        1000 => 'M',
        999 => 'IM',
        500 => 'D',
        499 => 'ID',
        100 => 'C',
        99 => 'IC',
        50 => 'L',
        49 => 'IL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    public static function generate(int $n): string
    {
        $result = '';

        foreach(self::NUMERALS as $integer => $symbol)
        {
            while($n >= $integer) {
                $result .= $symbol;
                $n -= $integer;
            }
        }

        return $result;
    }
}
