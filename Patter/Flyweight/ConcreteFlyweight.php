<?php
namespace Patter\Flyweight;

/**
 * 具体享元角色
 * Class ConcreteFlyweight
 * @package Patter\Flyweight
 */
class ConcreteFlyweight implements Flyweight {
    private $key;

    public function __construct($key)
    {
        $this->key = $key;
        echo "具体享元{$this->key}被创建";
        echo "</br>";
    }

    function opration(UnsharedConcreteFlyweight $state)
    {
        echo "具体享元{$this->key}被调用";
        echo "</br>";
        echo "非享元信息是:{$state->getInfo()}";
        echo "</br>";
        // TODO: Implement opration() method.
    }
}