<?php

namespace spec;

use FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FizzBuzz::class);
    }

    function it_translates_1_for_fizzbuzz() {
        $this->execute(1)->shouldReturn(1);
    }

    // function it_translates_3_for_fizzbuzz() {
    //     $this->execute(1)->shouldReturn(fizz);
    // }

    // function it_translates_5_for_fizzbuzz() {
    //     $this->execute(5)->shouldReturn(buzz);
    // }

    // function it_translates_15_for_fizzbuzz() {
    //     $this->execute(15)->shouldReturn(fizzbuzz);
    // }
}
