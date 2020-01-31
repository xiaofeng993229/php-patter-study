<?php
namespace Patter\Visitor;

class ConcreteElementB implements Element {
    function accept(Visitor $visitor)
    {
        $visitor->visit2();
        // TODO: Implement accept() method.
    }
    public function operationA() {
        echo "具体元素B的操作。";
        echo "</br>";
    }
}