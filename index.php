<?php

use smirnov\SmirnovLog;
use smirnov\SmirnovException;
use smirnov\Linear;
use smirnov\Quadratic;

require_once "core/EquationInterface.php";
require_once 'core/LogInterface.php';
require_once 'core/LogAbstract.php';
require_once "smirnov/SmirnovException.php";
require_once 'smirnov/SmirnovLog.php';
require_once 'smirnov/Linear.php';
require_once 'smirnov/Quadratic.php';

try {
    echo "Enter 3 parameters: a, b, c\n\r";
    $a = readline("Enter a value:");
    $b = readline("Enter b value:");
    $c = readline("Enter c value:");

    $solve = new Quadratic();

    $result = $solve->solve($a, $b, $c);

    $equation = $a . "(x^2)+(" . $b . ")x+(" . $c . ")=0";
    SmirnovLog::log("Entered equation is an " . $equation . "\n\r");

    SmirnovLog::log("Roots:" . implode(', ', $result) . "\n\r");
} catch (SmirnovException $e) {
    SmirnovLog::log($e->getMessage());
}
SmirnovLog::write();

