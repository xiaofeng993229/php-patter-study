<?php
namespace Patter\Singleton;

use Patter\BaseMain;

class Main extends BaseMain {
    protected $patter_name_cn = '单例';
    protected $patter_name_en = 'Singleton';
    protected $brief_introduction = '保证一类仅有一个实例，提供访问它的全局节点';
    public function __construct()
    {
        parent::__construct();
        echo "Start";
        $this->br();

        $obj1 = Singleton::getInstance();
        $obj2 = Singleton::getInstance();
        $this->br();
        if ($obj1 == $obj2) {
            echo "obj1 和obj2是相同是的实例。";
        } else {
            echo "obj1 和obj2是不相同是的实例。";
        }
        $this->br();
        echo "End";
        $this->br();
    }
}