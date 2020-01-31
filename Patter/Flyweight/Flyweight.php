<?php
namespace Patter\Flyweight;

/**
 * 抽象享元角色
 * Interface Flyweight
 * @package Patter\Flyweight
 */
interface Flyweight {
    function opration(UnsharedConcreteFlyweight $state);
}