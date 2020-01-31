<?php
namespace Patter\Flyweight;

use Patter\BaseMain;

class Main extends BaseMain {
    protected $patter_name_cn = '享元模式';
    protected $patter_name_en = 'Flyweight';
    protected $brief_introduction = '运用共享技术有效的支持大量细粒度的对象';

    public function __construct()
    {
        parent::__construct();
        $factory = new FlyweightFactory();
        $f01 = $factory->getFlyweight('a');
        $f02 = $factory->getFlyweight('a');
        $f03 = $factory->getFlyweight('a');
        $f011 = $factory->getFlyweight('b');
        $f012 = $factory->getFlyweight('b');

        $f01->opration(new UnsharedConcreteFlyweight('第1次调用a。'));
        $f02->opration(new UnsharedConcreteFlyweight('第2次调用a。'));
        $f03->opration(new UnsharedConcreteFlyweight('第3次调用a。'));
        $f011->opration(new UnsharedConcreteFlyweight('第1次调用b。'));
        $f012->opration(new UnsharedConcreteFlyweight('第2次调用b。'));
    }
}