<?php
namespace Patter\Chain\Approval;

/**
 * 抽象处理者
 * Class Leader
 * @package Patter\Chain\Approval
 */
abstract class Leader {
    private $next;

    public function setNext(Leader $next) {
        $this->next = $next;
    }

    public function getNext() {
        return $this->next;
    }

    abstract function handleRequest(int $leave_days);
}