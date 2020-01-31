<?php
namespace Patter\State;

class ConcreteStateB extends State {
    public  function handle(Context $context)
    {
        echo "当前状态是B";
        echo "</br>";
        $context->setState(new ConcreteStateA());
        // TODO: Implement handle() method.
    }
}