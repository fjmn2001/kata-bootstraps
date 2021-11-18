<?php

namespace Tests;

use Medine\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_return_itself_number(): void
    {
        self::assertEquals(1, (new FizzBuzz())(1));
        self::assertEquals(2, (new FizzBuzz())(2));
    }

    /**
     * @test
     */
    public function it_should_return_fizz_if_divisible_by_3(): void
    {
        self::assertEquals('Fizz', (new FizzBuzz())(3));
    }

    /**
     * @test
     */
    public function it_should_return_fizz_if_divisible_by_5(): void
    {
        self::assertEquals('Buzz', (new FizzBuzz())(5));
    }

    /**
     * @test
     */
    public function it_should_return_fizzbuzz_if_divisible_by_3_and_5(): void
    {
        self::assertEquals('FizzBuzz', (new FizzBuzz())(15));
    }
}
