<?php
namespace Patter\Decorator ;

use Patter\BaseMain;

class Main extends BaseMain {
    protected $patter_name_cn = '装饰器模式';
    protected $patter_name_en = 'Decorator';
    protected $brief_introduction = '动态的给对象添加一些额外的职责。就扩展而言Decorator 模式比生成子类方式更为灵活。';

    public function __construct()
    {
        parent::__construct();

        $component = new ConcreteComponent();
        $component->operation();
        echo "-----------";
        $this->br();
        $component_2 = new ConcreteDecorator($component);
        $component_2->operation();
    }
}