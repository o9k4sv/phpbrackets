<?php

namespace O9k4sv\Phpbrackets\Tests;

use PHPUnit\Framework\TestCase;

class CliTest extends TestCase
{
    public function testCommandLine()
    {
        $output = `php ./run.php "5 + (2 + 1)"`;
        $this->assertSame('ok', $output);

        $output = `php ./run.php "2 + (5 + 1"`;
        $this->assertSame('fail', $output);

        $output = `php ./run.php`;
        $this->assertSame('no argument passed', $output);
    }
}
