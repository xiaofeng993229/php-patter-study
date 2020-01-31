<?php

namespace Patter\State;

class Context {
    private $state;

    public function __construct()
    {
        $this->state = new ConcreteStateA();
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }

    public function handle() {
        $this->state->handle($this);
    }

}