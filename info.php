<?php


class Operations
{
    private $_a;
    private $_b;

    public function __construct($a, $b)
    {
        $this->_a=$a;
        $this->_b=$b;
    }

    private function sum($a, $b)
    {
        echo $a + $b;
    }

}

$op1 = new Operations(3,2);