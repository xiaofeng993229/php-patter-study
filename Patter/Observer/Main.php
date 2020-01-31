<?php
namespace Patter\Observer;

use Patter\BaseMain;

class Main extends BaseMain {

    protected $patter_name_cn = '观察者';
    protected $patter_name_en = 'Observer';
    protected $brief_introduction = '观察者（定义了对象之间的一种多依赖关系，是的每当一个对象改变状态，则所有依赖于他的对象都会受到通知并被自动更新。）';

    function __construct()
    {
        parent::__construct();

        $subject = new ConcreteSubject();
        $obs1 = new ConcreteObserver1();
        $obs2 = new ConcreteObserver2();
        $subject->add($obs1);
        $subject->add($obs2);
        $subject->add($obs1);
        $subject->notiryObserver();

    }
}