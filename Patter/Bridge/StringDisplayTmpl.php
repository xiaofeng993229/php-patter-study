<?php
namespace Patter\Bridge;

/**
 * 具体实现者
 * Class StringDisplayTmpl
 * @package Patter\Bridge
 */

class StringDisplayTmpl extends DisplayImpl {

    private $string;
    private $width;

    public function __construct(string  $string)
    {
        $this->string = $string;
        $this->width = strlen($string);
    }

    function rawOpen()
    {
        $this->printLine();
    }

    public function rawPrint()
    {
        echo "|{$this->string}|";
        echo "</br>";
    }
    function rawClose()
    {
        $this->printLine();
    }

    private function printLine() {
        echo "+";
        echo "</br>";
        for ($i = 0 ; $i < $this->width; $i ++) {
            echo "-";
        }
        echo "</br>";
        echo "+";
    }
}