<?php
namespace Patter\Chain;

class ConcreateHandler2 extends Handler {

    function handleRequest(string $request)
    {
        if ($request == 'two') {
            echo "具体处理者2负责处理该请求！";
            echo "</br>";
        } else {
            if ($this->getNext() != null) {
                $this->getNext()->handleRequest($request);
            } else {
                echo "没有人处理该请求！";
                echo "</br>";
            }
        }
    }
}