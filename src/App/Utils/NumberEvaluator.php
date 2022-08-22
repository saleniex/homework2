<?php
declare(strict_types=1);

namespace App\Utils;

use App\Interfaces\NumberEvaluatorInterface;

/**
 * Evaluates whether digit is even or odd, positive or negative, or equal to zero
 */
class NumberEvaluator implements NumberEvaluatorInterface
{
    public static function isEven(int $digit): bool
    {
        return $digit % 2 === 0;
    }

    public static function isOdd(int $digit): bool
    {
        return !self::isEven($digit);
    }

    public static function isNegative(int $digit): bool
    {
        return $digit < 0;
    }

    public static function isPositive(int $digit): bool
    {
        return $digit > 0;
    }

    public static function isZero(int $digit): bool
    {
        return $digit === 0;
    }
}