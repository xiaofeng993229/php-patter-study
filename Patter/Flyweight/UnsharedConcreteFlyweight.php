<?php
namespace Patter\Flyweight;

/**
 * 非享元角色
 * Class UnsharedConcreteFlyweight
 * @package Patter\Flyweight
 */
class UnsharedConcreteFlyweight {
    private $info;

    public function __construct($info)
    {
        $this->info = $info;
    }

    public function getInfo()
    {
        return $this->info;
    }

    public function setInfo($info) {
        $this->info = $info;
    }
}