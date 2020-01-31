<?php
namespace Patter\Chain;

/**
 * 抽象处理者角色
 * Class Handler
 * @package Patter\Chain
 */
abstract class Handler {
    private $next ;

    public function setNext(Handler $next) {
        $this->next = $next;
    }

    public function getNext() {
        return $this->next;
    }

    abstract function handleRequest(string $request);
}