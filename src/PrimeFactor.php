<?php

namespace Kata;

class PrimeFactor
{

    public static function generate(int $n): array
    {
        $factors = [];

        while ($n % 2 == 0) {
            $factors[] = 2;
            $n /= 2;
        }

        $divisor = 3;
        while (($divisor * $divisor) <= $n) {
            if ($n % $divisor == 0) {
                $factors[] = $divisor;
                $n /= $divisor;
            } else {
                $divisor += 2;
            }
        }

        if ($n != 1) {
            $factors[] = $n;
        }

        return $factors;
    }
}