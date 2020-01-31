<?php
namespace Patter\Template;

use Patter\BaseMain;

class Main extends BaseMain {


    protected $patter_name_cn = '模板方法';
    protected $patter_name_en = 'Template Method';
    protected $brief_introduction = '定义一个操作中的骨架，而将一些步骤延迟到子类中，模板方法可以使得之类不改变一个算法结构即可重定义该算法的某些特定步骤。';

    public function __construct()
    {
        parent::__construct();
        $d1 = new CharDisplay('H');
        $d2 = new StringDisplay('Hello,world.');
        $d3 = new StringDisplay('你好，世界。');
        $d1->display();
        $this->br();
        $d2->display();
        $this->br();
        $d3->display();
    }
}