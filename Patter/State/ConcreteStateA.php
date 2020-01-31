<?php
namespace Patter\State;

class ConcreteStateA extends State {
    public  function handle(Context $context)
    {
        echo "当前状态是A";
        echo "</br>";
        $context->setState(new ConcreteStateB());
        // TODO: Implement handle() method.
    }
}