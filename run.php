<?php
namespace SMB\Calculator;

require_once "vendor/autoload.php";
$a = 2;
$b = 4;
$test = new Calculator();
echo $test->sum($a, $b)."\n";
echo $test->subtract($a, $b)."\n";
echo $test->multiply($a, $b)."\n";
echo $test->divide($a, $b)."\n";
