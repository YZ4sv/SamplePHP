<?php


namespace myNamespace;


class MyClass
{
    public $parameter = "";

    public function __construct(string $str)
    {
        $this->parameter = $str;
    }

    public function print()
    {
        echo $this->parameter;
    }
}