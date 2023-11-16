<?php

namespace PierceMcGeough\BaseApp;

class Calculator
{
    public function add(int $a, int $b): int
    {
        return (int) $a + $b;
    }

    public function subtract(int $a, int $b): int
    {
        return (int) $a - $b;
    }
}
