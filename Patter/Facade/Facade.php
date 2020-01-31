<?php
namespace Patter\Facade;

/**
 * 外观角色
 * Class Facade
 * @package Patter\Facade
 */
class Facade {

    private $obj1;
    private $obj2;
    private $obj3;

    public function __construct()
    {
        $this->obj1 = new SubSystem01();
        $this->obj2 = new SubSystem02();
        $this->obj3 = new SubSystem03();
    }

    public function method()
    {
        $this->obj1->metchod1();
        $this->obj2->metchod2();
        $this->obj3->metchod3();
    }


}