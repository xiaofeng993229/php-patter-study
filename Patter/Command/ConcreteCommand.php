<?php
namespace Patter\Command;

class ConcreteCommand implements Command {

    private $receiver;

    function __construct()
    {
        $this->receiver = new Receiver();
    }

    public function execute() {
        $this->receiver->action();
    }
}