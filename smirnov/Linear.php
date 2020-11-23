<?php


namespace smirnov;


class Linear {
protected $x;
public function linearEquation($a,$b) {
    if ($a==0) {
        $this->x='no roots';
    }
    return $this->x=array(-$b/$a);
}
}