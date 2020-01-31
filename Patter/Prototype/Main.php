<?php
namespace Patter\Prototype;

use Patter\BaseMain;

class Main extends BaseMain {
    protected $patter_name_cn = '原型';
    protected $patter_name_en = 'prototype';
    protected $brief_introduction = '通过复制生成实例';
    public function __construct()
    {
        parent::__construct();

        $prototype = new PrototypeObject('test');
        $pro1 = $prototype->copy();
        $pro2 = $prototype->copy();

        $pro2->setName('test2');
        var_dump($pro1);
        $this->br();
        var_dump($pro2);
        $this->br();
    }
}