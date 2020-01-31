<?php
namespace Patter\Chain;

class ConcreateHandler1 extends Handler {


    function handleRequest(string $request)
    {
        if ($request == 'one') {
            echo "具体处理者1负责处理该请求！";
            echo "</br>";
        } else {
            if ($this->getNext() != null) {
                $this->getNext()->handleRequest($request);
            } else {
                echo "没有人处理该请求！";
                echo "</br>";

            }
        }


        // TODO: Implement handleRequest() method.
    }
}