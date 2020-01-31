<?php
namespace Patter\Adapter;

class Banner {
    private $string;

    public function __construct(string $string) {
        $this->string = $string;
    }

    public function showWithParen() {
        echo  "(".$this->string. ")";
        echo "</br>";
    }

    public function showWithAster() {
        echo "*".$this->string."*";
        echo "</br>";
    }

}