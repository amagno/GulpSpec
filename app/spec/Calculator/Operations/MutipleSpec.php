<?php

namespace spec\Calculator\Operations;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MutipleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Calculator\Operations\Mutiple');
    }
}
