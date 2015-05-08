<?php

namespace spec\ArekRypulak\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TrapezSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('ArekRypulak\Tools\Trapez');
    }
}
