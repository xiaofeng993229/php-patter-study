<?php
namespace Patter\AbstractFactory;

use Patter\BaseMain;

class Main extends BaseMain {

    protected $patter_name_cn = '工厂方法';
    protected $patter_name_en = 'AbstractFactory';
    protected $brief_introduction = '将关联零件组装成产品';

    public function __construct()
    {
        parent::__construct();
    }
}