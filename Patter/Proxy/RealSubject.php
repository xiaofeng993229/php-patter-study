<?php
namespace Patter\Proxy;

class RealSubject implements Subject {
    function request()
    {
        echo "访问真实主题方法...";
        echo "</br>";
    }
}