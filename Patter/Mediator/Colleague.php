<?php
namespace Patter\Mediator;

abstract class Colleague {
    protected $mediator;
    public function setMedium(Mediator $mediator) {
        $this->mediator = $mediator;
    }

    abstract function receive();
    abstract function send();
}