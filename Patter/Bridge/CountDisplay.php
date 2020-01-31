<?php
namespace Patter\Bridge;

/**
 * 改善后的抽象化
 * Class CountDisplay
 * @package Patter\Bridge
 */

class CountDisplay extends Display{
    public function __construct(DisplayImpl $impl)
    {
        parent::__construct($impl);
    }

    public function multiDisplay(int $times) {
        $this->open();
        for ($i = 0 ; $i < $times ;$i++) {
            $this->print_();
        }
        $this->close();
    }
}