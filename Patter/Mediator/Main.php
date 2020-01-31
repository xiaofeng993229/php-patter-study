<?php
namespace Patter\Mediator;

use Patter\BaseMain;

class Main extends BaseMain {
    protected $patter_name_cn = '中介者';
    protected $patter_name_en = 'Mediator';
    protected $brief_introduction = '用一个中介对象来封装一系列的对象交互，中介使得对象不需要显式的相互引用，而使得其耦合松散，而且可以独立的改变他们之间的交互。';

    function __construct()
    {
        parent::__construct();
        $md = new ConcreteMediator();
        $c1 = new ConcreteColleague1();
        $c2 = new ConcreteColleague2();
        $md->register($c1);
        $md->register($c2);
        $c1->send();
        echo "------------";
        $this->br();
        $c2->send();
    }
}