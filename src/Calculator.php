<?php

namespace App;

class Calculator implements CalculatorInterface
{

    public $x;
    public $y;

    function checkOperator($operator)
    {
        switch($operator)
        {
            case '+':
            return $this->plus($this->x, $this->y);
            break;

            case '-':
            return $this->minus($this->x, $this->y);
            break;

            case '*':
            return $this->multiplication($this->x, $this->y);
            break;

            case '/':
            return $this->division($this->x, $this->y);
            break;

            case '^2':
            return $this->squared($this->x);
            break;

            case '^3':
            return $this->cubed($this->x);
            break;

            case '^y':
            return $this->ythPower($this->x, $this->y);
            break;

            case 'V2':
            return $this->squareRoot($this->x);
            break;

            case 'V3':
            return $this->cubeRoot($this->x);
            break;

            case 'Vy':
            return $this->ythRoot($this->x, $this->y);
            break;

            default:
            return "Sorry No command found";
        }   
    }

    function getResult($x, $y, $operator)
    {
        $this->x = $x;
        $this->y = $y;
        return $this->checkOperator($operator);
    }






    public function plus(float $x, float $y): float
    {
        return $x + $y;
    }

    public function minus(float $x, float $y): float
    {
        return $x - $y;
    }

    public function multiplication(float $x, float $y): float
    {
        return $x * $y;
    }

    public function division(float $x, float $y): float
    {
        return $x / $y;
    }

    public function squared(float $x): float
    {
        return pow($x, 2);
    }

    public function cubed(float $x): float
    {
        return pow($x, 3);
    }

    public function squareRoot(float $x): float
    {
        return sqrt($x);
    }

    public function cubeRoot(float $x): float
    {
        return pow($x, 1/3);
    }

    public function ythPower(float $x, float $y): float
    {
        return pow($x, $y);
    }

    public function ythRoot(float $x, float $y): float
    {
        return pow($x, 1/$y);
    }

}