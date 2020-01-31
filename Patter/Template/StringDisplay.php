<?php
namespace Patter\Template;

class StringDisplay extends AbstractDisplay{

    private $string;
    private $width;

    public function __construct($string)
    {
        $this->string = $string;
        $this->width = strlen($string);
    }

    function open()
    {
        $this->printLine();
    }

    function print_()
    {
        echo "</br>";
        echo "|{$this->string}|";
        echo "</br>";
    }

    function close()
    {
        $this->printLine();
    }

    private function printLine() {
        echo "+";
        for ($i=0;$i<$this->width;$i++) {
            echo "-";
        }
        echo "+";
    }
}