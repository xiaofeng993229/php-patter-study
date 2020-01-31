<?php
namespace Patter\Mediator;

/**
 * 具体中介者
 * Class ConcreteMediator
 * @package Patter\Mediator
 */
class ConcreteMediator extends Mediator {
    private $colleagues = [];

    public  function register(Colleague $colleague)
    {
        $this->colleagues[] = $colleague;
        $colleague->setMedium($this);
        // TODO: Implement register() method.
    }

    public  function relay(Colleague $cl)
    {
        foreach ($this->colleagues as $colleague) {
            $colleague->receive();
        }
        // TODO: Implement relay() method.
    }
}