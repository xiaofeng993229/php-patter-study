<?php
namespace Patter\Adapter;

use Patter\BaseMain;

class Main extends BaseMain {

    protected $patter_name_cn = '适配器模式';
    protected $patter_name_en = 'Adapter';
    protected $brief_introduction = '将一个类的接口转化为客户希望的另一个接口。Adapter模式使得原本由于接口不兼容而不能一起工作的哪些类可以一起工作。';
    function __construct()
    {
        parent::__construct();
        $p = new PrintBanner('Hello');
        $p->printWeak();
        parent::br();
        $p->printStrong();
    }
}