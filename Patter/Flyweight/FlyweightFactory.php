<?php
namespace Patter\Flyweight;
/**
 * 享元工厂
 * Class FlyweightFactory
 * @package Patter\Flyweight
 */
class FlyweightFactory {

    private $flyweights = [];

    public function getFlyweight($key) {

        if (isset($this->flyweights[$key])) {
            $flyweight = $this->flyweights[$key];
            echo "具体享元{$key}已经存在，被成功获取！";
            echo "</br>";
        } else {
            $flyweight = new ConcreteFlyweight($key);
            $this->flyweights[$key] = $flyweight;
        }
        return $flyweight;
    }
}