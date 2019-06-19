<?php

namespace myNamespace;

use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{

    public function test__construct()
    {
        $myClass = new MyClass("Hello world");
        $this->assertSame("Hello world", $myClass->parameter);
    }
}
