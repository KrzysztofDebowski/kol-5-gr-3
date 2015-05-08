<?php

namespace spec\pawlo1501\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class poletrapezuSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('pawlo1501\Tools\poletrapezu');
    }
    function it_should_have_setter_and_gettter()
    {
    	$this->setA(3)->getA()->shouldReturn(3);
    	$this->setB(4)->getB()->shouldReturn(4);
        $this->setH(5)->getH()->shouldReturn(5);
    }
    function it_should_calculate_area_trapeze()
    {
    	$this->setA(2)->setB(2)->setH(2)->trapeze()->shouldReturn(4);
    }
}
