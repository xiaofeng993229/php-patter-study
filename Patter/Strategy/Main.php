<?php
namespace Patter\Strategy;

use Patter\BaseMain;

class Main extends BaseMain {
    protected $patter_name_cn = '策略模式';
    protected $patter_name_en = 'Strategy';
    protected $brief_introduction = '策略（定义了一系列的算法，而将每一个算法封装起来，而且使他们还可以相互替换，策略模式使让算法独立于它的客户而独立变化）';

    public function __construct()
    {
        parent::__construct();

        $c = new Context();
        $s = new ConcreteStrategyA();
        $c->setStrategy($s);
        $c->startMethod();
        echo "----------------";
        $this->br();

        $s = new ConcreteStrategyB();
        $c->setStrategy($s);
        $c->startMethod();
    }

}