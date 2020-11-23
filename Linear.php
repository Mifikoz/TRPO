<?php

class Linear {
protected $x;
public function linearEquation($a,$b) {
    if ($a==0) {
        return $this->x='equation does not exists';
    }
    return $this->x=array(-$b/$a);
}
}