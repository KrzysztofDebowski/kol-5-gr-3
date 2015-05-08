<?php

namespace spec\KamilSkowronek\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TrapezSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('KamilSkowronek\Tools\Trapez');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(345)->getH()->shouldReturn(345);
    }
    function it_should_calculate_pole()
{
    $this->setA(3)->setB(7)->setH(5)->poletrapezu()->shouldReturn(25);
}
}
