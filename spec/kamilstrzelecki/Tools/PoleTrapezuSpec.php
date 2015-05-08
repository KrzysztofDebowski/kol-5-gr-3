<?php

namespace spec\kamilstrzelecki\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PoleTrapezuSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kamilstrzelecki\Tools\PoleTrapezu');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setC(324)->getC()->shouldReturn(324);
    }
    
    function it_should_calculate_area()
    {
       $this->setA(2)->setB(3)->setC(2)->area()->shouldReturn(5);
    }
}
