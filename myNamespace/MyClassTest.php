<?php

namespace myNamespace;


class MyClassTest extends \PHPUnit_Framework_TestCase
{

    public function test__construct()
    {
        $myClass = new MyClass("Hello world");
        $this.assertSame("Hello world", $myClass->parameter);
    }
}
