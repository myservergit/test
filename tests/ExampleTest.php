<?php

namespace Tests;

use Composer\Test\Test;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{

    public function test()
    {
        Test::test('test1');
        $this->assertTrue(true);
    }
}