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
}
