<?php
declare(strict_types=1);

namespace App\Enums;

enum NumberEvaluatorMethods: string
{
    case IsEven = "even";
    case IsOdd = "odd";
    case IsPositive = "positive";
    case IsNegative = "negative";
    case IsZero = "zero";
}