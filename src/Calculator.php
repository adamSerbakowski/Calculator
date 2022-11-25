<?php
namespace SMB\Calculator;

class Calculator
{
//    private int $a = 0;
//    private int $b = 0;
//    public function __construct($a, $b)
//    {
//        $this->a = $a;
//        $this->b = $b;
//    }

    public function __construct()
    {
    }
    public function sum($a, $b) : float
    {
        $calc = new Add();
        return $calc->calc($a, $b);
       // return $calc->calc($this->a,$this->b);
    }
    public function subtract($a, $b) : float
    {
        $calc = new Subtract();
        return $calc->calc($a, $b);
    }
    public function multiply($a, $b) : float
    {
        $calc = new Multiply();
        return $calc->calc($a, $b);
    }
    public function divide($a, $b) : float
    {
        $calc = new Divide();
        return $calc->calc($a, $b);
    }
}
