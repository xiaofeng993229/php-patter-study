<?php
namespace Patter\Decorator;

/**
 * 具体构件角色
 * Class ConcreteComponent
 * @package Patter\Decorator
 */
class ConcreteComponent implements Component {
    public function __construct()
    {
        echo "创建具体构件角色";
        echo "</br>";
    }

    public function operation()
    {
        echo "调用具体构件角色的方法operation()";
        echo "</br>";
    }
}