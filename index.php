<?php


require_once 'Linear.php';
require_once 'Quadratic.php';

    $a = new Linear();
    $a->linearEquation(4,6 );
    var_dump($a);

    $b = new Quadratic();
    $b->solve(4,6 ,1 );
    var_dump($b);