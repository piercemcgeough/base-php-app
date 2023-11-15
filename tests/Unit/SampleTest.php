<?php

namespace PierceMcGeough\BaseApp\Tests\Unit;

use PierceMcGeough\BaseApp\Sample;

class SampleTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function constructor()
    {
        $sample = $this->createMock(Sample::class);

        $this->assertInstanceOf(Sample::class, $sample);
    }

    /** @test */
    public function trueIsTrue()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function falseIsFalse()
    {
        $this->assertFalse(false);
    }
}
