<?php

namespace spec\mrskowron\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TrapezSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('mrskowron\Tools\Trapez');
        
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(987)->getH()->shouldReturn(987);
    }
    
     function trapez()
    {
        $this->setA(10)->setB(10)->setH(1)->sum()->shouldReturn(10);
    }
}
