<?php

namespace App\Calculator;

class Calculator implements CalculatorInterface
{
    

    public function multiplication(float $a, float $b): float
    {
        return $a * $b;
    }

    public function divide(float $a, float $b): float
    {
        return $a / $b;
    }

    
}