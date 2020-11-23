<?php
class A{
}
class B extends A{

    protected $a;

    public function __construct($a){
        $this->a = $a;
    }

    public function getA() {
        return $this->a;
    }
    public function setA($a) {
        $this->a=$a;
    }
}
class C extends B{
    protected $b;
    protected $c;
    protected $d;

    public function __construct($a, $b, $c, $d){
        $this->b = $b;
        $this->c = $c;
        $this->d = $d;
        parent::__construct($a);
    }

    public function getB() {
        return $this->b;
    }
    public function setB($b) {
        $this->b=$b;
    }
    public function getC() {
    return $this->c;
}
    public function setC($c) {
        $this->c=$c;
    }
    public function getD() {
        return $this->d;
    }
    public function setD($d) {
        $this->d=$d;
    }
}
$a1 = new A();
$a2 = new A();
$a3 = new A();
$b4 = new B($a1);
$c5 = new C($a1,$a2,$a3,$b4);
echo var_dump($c5);

?>