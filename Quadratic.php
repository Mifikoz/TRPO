<?php

require_once 'Linear.php';

class Quadratic extends Linear
{

    public function solve($a,$b,$c) {
        if($a==0){
            return $this->linearEquation($b,$c);
        }

        $D=$this->discriminant($a,$b,$c);

        if ($D > 0) {
            return $this->x=[
                (-$b-sqrt($D))/(2*$a),
                (-$b+sqrt($D))/(2*$a)
            ];
        }
        if ($D == 0) {
            return $this->x=[(-$b-sqrt($D))/(2*$a)];
        }
    }
    protected function discriminant($a,$b,$c) {
        return (pow($b,2)-4*$a*$c);
    }
}