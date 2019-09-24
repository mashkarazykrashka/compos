<?php

namespace App\Calculator;

interface CalculatorInterface
{
    
    public function multiplication(float $a, float $b): float;
    public function divide(float $a, float $b): float;
    
}