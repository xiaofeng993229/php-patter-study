<?php
namespace Patter\Builder;

/**
 * 具体建造者
 * Class TextBuilder
 * @package Patter\Builder\
 */
class TextBuilder extends Builder {

    private $buffer ;
    function makeTitle(string $title)
    {
        $this->buffer = $this->buffer . "=============</br>";
        $this->buffer = $this->buffer .  "「{$title}」</br>";
        $this->buffer = $this->buffer . "</br>";
    }


    function makeString(string $string)
    {
        $this->buffer = $this->buffer .  "@{$string}</br>";
        $this->buffer = $this->buffer . "</br>";
    }

    function makeItems(array $item)
    {
        for ($i = 0 ;$i < count($item); $i ++ ) {
            $this->buffer = $this->buffer . $item[$i] . "</br>";
        }
        $this->buffer = $this->buffer . "</br>";
    }

    function close()
    {
        $this->buffer = $this->buffer . "=============</br>";
    }

    public function getResult() {
        return $this->buffer;
    }
}