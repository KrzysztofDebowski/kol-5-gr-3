<?php

namespace spec\Konradha9\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class trapezSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Konradha9\Tools\trapez');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(345)->getH()->shouldReturn(345);
    }
    function it_should_calculate_pole()
{
    $this->setA(5)->setB(5)->setH(7)->poletrapezu()->shouldReturn(35);
}
}
