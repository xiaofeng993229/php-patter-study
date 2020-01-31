<?php
namespace Patter\Chain\Approval;

/**
 * 具体处理者2：系主任
 * Class DepartmentHead
 * @package Patter\Chain\Approval
 */
class DepartmentHead extends Leader {

    function handleRequest(int $leave_days)
    {
        if($leave_days<=7)
        {
            echo "系主任批准您请假{$leave_days}天。";
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