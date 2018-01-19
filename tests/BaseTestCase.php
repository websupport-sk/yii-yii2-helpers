<?php

namespace tests;

use PHPUnit\Framework\TestCase;

abstract class BaseTestCase extends TestCase
{
    protected $helperClassName;

    public function testShouldNotThrowSyntaxErrorOnPhp53()
    {
        $helper = new $this->helperClassName;
    }
}
