<?php


class Ope
{
    private $_a;
    private $_b;

    public function __construct($a, $b)
    {
        $this->_a=$a;
        $this->_b=$b;
    }

    public function sum()
    {
        return $this->_a + $this->_b;
    }

}

$op1 = new Ope(3,1);
echo $op1->sum();