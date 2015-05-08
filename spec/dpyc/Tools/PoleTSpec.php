<?php

namespace spec\dpyc\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PoleTSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('dpyc\Tools\PoleT');
    }
   
   function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(455)->getH()->shouldReturn(455);
    }
    
    function it_should_calculate_field_trapeze()
    {
    	$this->setA(2)->setB(2)->setH(2)->trapeze()->shouldReturn(4);
    }
}
