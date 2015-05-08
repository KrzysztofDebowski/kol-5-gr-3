<?php

namespace kamilstrzelecki\Tools;

class PoleTrapezu
{

    private $a;
    private $b;
    private $c;
    
    public function setA($a)
    {
        $this->a = $a;
        
        return $this;
    }
    
    public function getA()
    {
        return $this->a;
    }

    public function setB($b)
    {
        $this->b = $b;
        
        return $this;
    }
    
    public function getB()
    {
        return $this->b;
    }

    public function setC($c)
    {
        $this->c = $c;
        
        return $this;
    }
    
    public function getC()
    {
        return $this->c;
    }

    public function area()
    {
        return ($this->a + $this->b) * $this->c / 2;
    }
}
