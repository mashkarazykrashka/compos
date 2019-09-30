<?php

namespace App;

interface CalculatorInterface
{
    public function plus(float $x, float $y): float;
    public function minus(float $x, float $y): float;
    public function multiplication(float $x, float $y): float;
    public function division(float $x, float $y): float;
    public function squared(float $x): float;
    public function cubed(float $x): float;
    public function squareRoot(float $x): float;
    public function cubeRoot(float $x): float;
    public function ythPower(float $x, float $y): float;
    public function ythRoot(float $x, float $y): float;
}