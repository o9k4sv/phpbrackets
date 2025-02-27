<?php

namespace O9k4sv\Phpbrackets\Tests;

use PHPUnit\Framework\TestCase;
use O9k4sv\Phpbrackets\Functions;

class FunctionsTest extends TestCase
{
    public function testCheckBracketsFunction()
    {
        $this->assertTrue(Functions\checkBrackets(null));
        $this->assertTrue(Functions\checkBrackets(''));
        $this->assertTrue(Functions\checkBrackets('5 * 4 - 2'));
        $this->assertTrue(Functions\checkBrackets('5 * (4 - 2)'));
        $this->assertTrue(Functions\checkBrackets('1 * ((5-3) + (2*4))'));

        $this->assertFalse(Functions\checkBrackets('5 * (4 - 2('));
        $this->assertFalse(Functions\checkBrackets('5 * )4 - 2('));
        $this->assertFalse(Functions\checkBrackets('5 * (4 - 2'));
        $this->assertFalse(Functions\checkBrackets('5 * (4 - 2))'));
    }
}
