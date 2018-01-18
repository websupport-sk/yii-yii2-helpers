<?php

namespace tests;

use PHPUnit\Framework\TestCase;

abstract class BaseTestCase extends TestCase
{
    protected $helperClassName;

    public function testShouldNotThrowSyntaxErrorOnPhp53()
    {
        if (version_compare(PHP_VERSION, '5.4.0', '>=')) {
            $this->markTestSkipped('Version greater than 5.3, skipping...');
        }

        $helper = new $this->helperClassName;
    }
}
