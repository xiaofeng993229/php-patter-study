<?php
namespace Patter\Observer;
class ConcreteSubject extends Subject {
    public  function notiryObserver()
    {
        echo "具体目标发生改变...";
        echo "</br>";
        echo "--------------";
        echo "</br>";


        for ($i = 0 ; $i < count($this->observers) ;$i ++) {
            $this->observers[$i]->response();
        }
    }
}