<?php

namespace PierceMcGeough\BaseApp\Tests\Unit;

use \PHPUnit\Framework\TestCase;
use PierceMcGeough\BaseApp\Calculator;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->calculator = new Calculator();
    }

    /** @test */
    public function instanceCanBeCreated()
    {
        $this->assertInstanceOf(Calculator::class, $this->calculator);
    }

    /** @test */
    public function addTwoNumbers_ReturnsCorrectResult()
    {
        $result = $this->calculator->add(2, 3);

        $this->assertEquals(5, $result);
    }

    /** @test */
    public function subtractTwoNumbers_ReturnsCorrectResult()
    {
        $result = $this->calculator->subtract(5, 3);

        // Assert that the result is as expected
        $this->assertEquals(2, $result);
    }
}
