<?php

namespace spec\gojira\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TrapezSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('gojira\Tools\Trapez');
    }
    
    function it_should_have_setter_and_getter()
    {
        $this->setA(5)->getA()->shouldReturn(5);
        $this->setB(10)->getB()->shouldReturn(10);
        $this->setH(2)->getH()->shouldReturn(2);
    }
    
    function it_should_calculate_area()
    {
        $this->setA(2)->setB(10)->setH(2)->area()->shouldReturn(12);
    }
}
