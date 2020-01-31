<?php
namespace Patter\Mediator;

class ConcreteColleague2 extends Colleague {
    public function receive()
    {
        echo "具体同事类2收到请求。";
        echo "</br>";
    }

    function send()
    {
        echo "具体同事类2发出请求。";
        echo "</br>";
        $this->mediator->relay($this); //请中介者转发
    }
}