<?php
namespace Patter\Template;

abstract class AbstractDisplay {
    abstract function open();
    abstract function print_();
    abstract function close();

    public final function display(){
        $this->open();
        for ($i=0;$i<5;$i++){
            $this->print_();
        }
        $this->close();
    }
}