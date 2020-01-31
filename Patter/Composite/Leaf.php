<?php
namespace Patter\Composite;

class Leaf implements Component {

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function add(Component $c)
    {
        // TODO: Implement add() method.
    }

    public function remove(Component $c)
    {
        // TODO: Implement remove() method.
    }

    public function getChild($i)
    {
        return null;
    }
    public function operation()
    {
        echo "树叶{$this->name}被访问";
        // TODO: Implement operation() method.
    }
}