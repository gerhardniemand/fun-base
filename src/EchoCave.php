<?php

namespace Fun;

class EchoCave
{
    public function __construct($v = 'This is me giving it my own value:)')
    {
        $this->echoSomething($v);
    }

    public function echoSomething($v)
    {
        echo $v . PHP_EOL;
    }
}
