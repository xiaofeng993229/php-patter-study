<?php
namespace Patter\Bridge;

use Couchbase\ConjunctionSearchQuery;
use Patter\BaseMain;

class Main extends BaseMain {
    protected $patter_name_cn = '桥接模式';
    protected $patter_name_en = 'Bridge';
    protected $brief_introduction = '将类的功能层级结构与实现层次结构分离';

    public function __construct()
    {
        parent::__construct();

        $d1 = new Display(new StringDisplayTmpl('Hello,china.'));
        $d2 = new CountDisplay(new StringDisplayTmpl('Hello,world.'));
        $d3 = new CountDisplay(new StringDisplayTmpl('Hello Universe.'));

        $d1->display();
        $d2->display();
        $d3->display();
        $d3->multiDisplay(5);
    }
}