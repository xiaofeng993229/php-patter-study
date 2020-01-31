<?php
namespace Patter\Decorator;

class Decorator implements Component {

    private $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    public function operation()
    {
        $this->component->operation();
    }
}