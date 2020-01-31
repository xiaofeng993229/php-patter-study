<?php
namespace Patter\Memento;

/**
 * 管理者
 * Class Caretaker
 * @package Patter\Memento
 */
class Caretaker {
    private $memento;

    public function setMemento(Memento $m) {
        $this->memento = $m;
    }

    public function getMemento () {
        return $this->memento;
    }
}