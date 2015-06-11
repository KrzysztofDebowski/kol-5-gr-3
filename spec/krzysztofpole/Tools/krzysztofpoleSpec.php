<?php

namespace spec\krzysztofpole\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class krzysztofpoleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('krzysztofpole\Tools\krzysztofpole');
    }
}
