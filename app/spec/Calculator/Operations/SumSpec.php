<?php

namespace spec\Calculator\Operations;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
/**
 * @mixin \Calculator\Operations\Sum
 */
class SumSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Calculator\Operations\Sum');
    }
    function it_sum_two_numbers_or_more()
    {
        $this->execute([2, 2, 2, 2])->shouldBe(8);
        $this->execute([2, 2])->shouldReturn(4);
        $this->execute([2])->shouldBe(2);
    }
}
