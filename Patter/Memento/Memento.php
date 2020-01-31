<?php
namespace Patter\Memento;

/**
 * 备忘录
 * Class Memento
 * @package Patter\Memento
 */
class Memento {
    private $state;

    public function __construct(string $state)
    {
        $this->state = $state;
    }

    public function setState(string $state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }
}