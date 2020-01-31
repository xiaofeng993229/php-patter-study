<?php
namespace Patter\Mediator;

class ConcreteColleague1 extends Colleague {
    public function receive()
    {
        echo "具体同事类1收到请求。";
        echo "</br>";
    }

    function send()
    {
        echo "具体同事类1发出请求。";
        echo "</br>";
        $this->mediator->relay($this); //请中介者转发
    }
}