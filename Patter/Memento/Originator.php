<?php
namespace Patter\Memento;

/**
 * 发起人
 * Class Originator
 * @package Patter\Memento
 */
class Originator {
    private $state;

    public function setState(string $state) {
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }

    public function createMemento() {
        return new Memento($this->state);
    }

    public function restoreMemento(Memento $m) {
        $this->setState($m->getState());
    }
}