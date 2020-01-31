<?php
namespace Patter\Proxy;

class Proxy implements Subject {
    private $realsubject;

    function request()
    {
        if ($this->realsubject == null) {
            $this->realsubject = new RealSubject();
        }
        $this->preRequest();
        $this->realsubject->request();
        $this->postRequest();
    }

    public function preRequest() {
        echo "访问真实主题之前的预处理。";
        echo "</br>";
    }

    public function postRequest() {
        echo "访问真实主题之后的后续处理。";
        echo "</br>";
    }
}