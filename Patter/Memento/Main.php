<?php
namespace Patter\Memento;

use Patter\BaseMain;

class Main extends BaseMain {
    protected $patter_name_cn = '备忘录模式';
    protected $patter_name_en = 'Memento';
    protected $brief_introduction = '在不破坏封装的前提下，捕获一个对象的内部结构，并在该对象之外保存这个状态，这样就可以将该对象恢复到原先保存的状态。';

    public function __construct()
    {
        parent::__construct();

        $or = new Originator();
        $cr = new Caretaker();
        $or->setState('S0');
        echo "初始状态:{$or->getState()}";
        $this->br();
        $cr->setMemento($or->createMemento()); // 保存状态
        $or->setState('S1');
        echo "新的状态:{$or->getState()}";
        $this->br();
        $or->restoreMemento($cr->getMemento()); // 恢复状态
        echo "恢复状态:{$or->getState()}";
    }
}