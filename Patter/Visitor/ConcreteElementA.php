<?php
namespace Patter\Visitor;

class ConcreteElementA implements Element {
    function accept(Visitor $visitor)
    {
        $visitor->visit1();
        // TODO: Implement accept() method.
    }
    public function operationA() {
        echo "具体元素A的操作。";
        echo "</br>";
    }
}