<?php

namespace SMB\Calculator\Tests;

use PHPUnit\Framework\TestCase;
use SMB\Calculator\Calculator;

class CalculatorTest extends TestCase
{
    public function getCalculator() : Calculator
    {
        return new Calculator();
    }
    /**
     * @param int $expected
     * @param int $a
     * @param int $b
     *
     * @return void
     * @dataProvider getSumDataProvider
     */
    public function testSum(
        int $expected,
        int $a,
        int $b
    ) : void {
        $class = $this->getCalculator();
        $found = $class->sum($a, $b);
        self::assertEquals($expected, $found);
    }

    protected function getSumDataProvider() : array
    {
        return [
            [3,2,1],
            [5,3,2],
            [10,6,4],
            [20,13,7],
        ];
    }

    /**
     * @param int $expected
     * @param int $a
     * @param int $b
     *
     * @return void
     * @dataProvider getSubtractDataProvider
     */
    public function testSubtract(
        int $expected,
        int $a,
        int $b
    ) : void {
        $class = $this->getCalculator();
        $found = $class->subtract($a, $b);
        self::assertEquals($expected, $found);
    }

    protected function getSubtractDataProvider() : array
    {
        return [
            [1,2,1],
            [1,3,2],
            [2,6,4],
            [6,13,7],
        ];
    }

    /**
     * @param int $expected
     * @param int $a
     * @param int $b
     *
     * @return void
     * @dataProvider getMultiplyDataProvider
     */
    public function testMultiply(
        int $expected,
        int $a,
        int $b
    ) : void {
        $class = $this->getCalculator();
        $found = $class->multiply($a, $b);
        self::assertEquals($expected, $found);
    }

    protected function getMultiplyDataProvider() : array
    {
        return [
            [2,2,1],
            [6,3,2],
            [24,6,4],
            [91,13,7],
        ];
    }

    /**
     * @param float $expected
     * @param int $a
     * @param int $b
     *
     * @return void
     * @dataProvider getDivideDataProvider
     */
    public function testDivide(
        float $expected,
        int $a,
        int $b
    ) : void {
        $class = $this->getCalculator();
        $found = $class->divide($a, $b);
        self::assertEquals($expected, $found);
    }

    protected function getDivideDataProvider() : array
    {
        return [
            [2,2,1],
            [1.5,3,2],
            [1.5,6,4],
            [2,12,6],
        ];
    }
}
