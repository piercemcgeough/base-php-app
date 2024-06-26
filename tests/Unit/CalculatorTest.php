<?php

namespace PierceMcGeough\BaseApp\Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
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

    #[Test]
    public function instanceCanBeCreated()
    {
        $this->assertInstanceOf(Calculator::class, $this->calculator);
    }

    #[Test]
    public function addTwoNumbers_ReturnsCorrectResult()
    {
        $result = $this->calculator->add(3, 2);

        $this->assertEquals(5, $result);
    }

    #[Test]
    public function subtractTwoNumbers_ReturnsCorrectResult()
    {
        $result = $this->calculator->subtract(5, 3);

        $this->assertEquals(2, $result);
    }
}
