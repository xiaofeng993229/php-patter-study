<?php
namespace Patter\Observer;
class ConcreteObserver2 implements Observer {
    function response()
    {
        echo "具体观察者2作出反应！";
        echo "</br>";
    }
}