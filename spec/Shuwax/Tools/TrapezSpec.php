<?php

namespace spec\Shuwax\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TrapezSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Shuwax\Tools\Trapez');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(456)->getH()->shouldReturn(456);
    }
    function it_should_calculate_trapez()
    {  
     $this->setA(3)->setB(3)->setH(3)->trapez()->shouldReturn(9);   
    }
    
}
