<?php
namespace Patter\Observer;
class ConcreteObserver1 implements Observer {
    function response()
    {
        echo "具体观察者1作出反应！";
        echo "</br>";
    }
}