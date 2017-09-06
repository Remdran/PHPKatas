<?php

namespace spec;

use PrimeFactor;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorSpec extends ObjectBehavior
{
    function it_returns_1_for_1() {
        $this->execute(1)->shouldReturn(1);
    }
}
