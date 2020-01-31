<?php
namespace Patter\Template;
class CharDisplay extends AbstractDisplay{

    private $ch;
    public function __construct( $ch)
    {
        $this->ch = $ch;
    }

    function open()
    {
        echo "<<-";
    }

    function print_()
    {
        echo "{$this->ch}";
    }

    function close()
    {
        echo "->>";
    }
}