<?php

namespace spec\bartuuus\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('bartuuus\Tools\Kalkulator');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(555)->getA()->shouldReturn(555);
        $this->setB(100)->getB()->shouldReturn(100);
        $this->setH(345)->getH()->shouldReturn(345);
    }
    
    function it_should_calculate_trapez()
    {
        $this->setA(2.0)->setB(3.0)->setH(2.0)->sum()->shouldReturn(5.0);
    }
}
