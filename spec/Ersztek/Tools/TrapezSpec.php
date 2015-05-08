<?php

namespace spec\Ersztek\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TrapezSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Ersztek\Tools\Trapez');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(987)->getH()->shouldReturn(987);
    }
    
    function it_should_calculate_poltrap()
    {
        $this->setA(5)->setB(7)->setH(4)->poltrap()->shouldReturn(24);
    }
}
