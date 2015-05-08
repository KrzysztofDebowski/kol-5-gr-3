<?php

namespace spec\szwej0\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TrapezSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('szwej0\Tools\Trapez');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(347)->getH()->shouldReturn(347);

    }
    function it_should_calculate_getarea()
    {
        $this->setA(5)->setB(4)->setH(6)->pole()->shouldReturn(27);
    }
}
