<?php
namespace Patter\Factory;

use Patter\BaseMain;

class Main extends BaseMain {

    protected $patter_name_cn = '工厂方法';
    protected $patter_name_en = 'Factory Method';
    protected $brief_introduction = '将实例的生成交割子类';
    public function __construct()
    {
        parent::__construct();
        $factory = new IDCardFactory();
        $card1 = $factory->create('小明');
        $card2 = $factory->create('小燕');
        $card3 = $factory->create('小红');
        $card4 = $factory->create('小刚');
        $card1->use_();
        $card2->use_();
        $card3->use_();
        $card4->use_();
    }
}