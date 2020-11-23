<?php

use smirnov\SmirnovLog;
use smirnov\Linear;
use smirnov\Quadratic;

require_once "core/EquationInterface.php";
require_once 'core/LogInterface.php';
require_once 'core/LogAbstract.php';
require_once 'smirnov/SmirnovLog.php';
require_once 'smirnov/Linear.php';
require_once 'smirnov/Quadratic.php';


    $solve = new Quadratic();

    $result = $solve->solve(4,6 ,1 );

    $a = new Linear();
    SmirnovLog::log("Roots:" . implode(', ', $a->linearEquation(4,6 )) . "\n\r");

    $b = new Quadratic();


    SmirnovLog::log("Roots:" . implode(', ', $b->solve(4,6 ,1 )) . "\n\r");
    SmirnovLog::write();

