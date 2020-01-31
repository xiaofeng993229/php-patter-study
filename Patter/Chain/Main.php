<?php
namespace Patter\Chain;

use Patter\BaseMain;
use Patter\Chain\Approval;
class Main extends BaseMain {

    protected $patter_name_cn = '责任链模式';
    protected $patter_name_en = 'Chain of Responsibility';
    protected $brief_introduction = '为了避免请求发送者与多个请求处理者耦合在一起，将所有的处理者通过前一对象的引用而连城一条链；当有请求发生时可将请求沿着这条链传递，直到有对象处理它为止。';

    public function __construct()
    {
        parent::__construct();

        $handler1 = new ConcreateHandler1();
        $handler2 = new ConcreateHandler2();

        $handler1->setNext($handler2);
        $handler1->handleRequest('two');

        echo "</br>假如规定学生请假小于或等于 2 天，班主任可以批准；小于或等于 7 天，系主任可以批准；小于或等于 10 天，院长可以批准；其他情况不予批准；这个实例适合使用职责链模式实现。</br>";


        //组装责任链
        $teacher1=new Approval\ClassAdviser();
        $teacher2=new Approval\DepartmentHead();
        $teacher3=new Approval\Dean();
        //Leader teacher4=new DeanOfStudies();
        $teacher1->setNext($teacher2);
        $teacher2->setNext($teacher3);
        //teacher3.setNext(teacher4);
        //提交请求
        $teacher1->handleRequest(3);


    }
}