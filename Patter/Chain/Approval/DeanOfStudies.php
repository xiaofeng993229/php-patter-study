<?php
namespace Patter\Chain\Approval;

/**
 * 具体处理者4：教务处主任
 * Class DeanOfStudies
 * @package Patter\Chain\Approval
 */
class DeanOfStudies extends Leader {
    function handleRequest(int $leave_days)
    {
        if($leave_days<=20)
        {
            echo "教务处长批准您请假{$leave_days}天。";
            echo "</br>";
        }
        else
        {
            if($this->getNext() != null)
            {
                $this->getNext()->handleRequest($leave_days);
            }
            else
            {
                echo "请假天数太多，没有人批准该假条！";
                echo "</br>";
            }
        }
    }
}