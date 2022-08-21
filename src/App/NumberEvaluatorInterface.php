<?php

namespace App;

interface NumberEvaluatorInterface
{
    /**
     * Checks if number is even
     *
     * @param int $digit Digit to evaluate
     * @return bool
     */
    public static function isEven(int $digit): bool;

    /**
     * Checks if number is odd
     *
     * @param int $digit Digit to evaluate
     * @return bool
     */
    public static function isOdd(int $digit): bool;

    /**
     * Checks if number is negative
     *
     * @param int $digit Digit to evaluate
     * @return bool
     */
    public static function isNegative(int $digit): bool;

    /**
     * Checks if number is positive
     *
     * @param int $digit Digit to evaluate
     * @return bool
     */
    public static function isPositive(int $digit): bool;

    /**
     * Checks if number is zero
     *
     * @param int $digit Digit to evaluate
     * @return bool
     */
    public static function isZero(int $digit): bool;
}