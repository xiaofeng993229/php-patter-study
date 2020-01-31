<?php
namespace Patter\Strategy;

/**
 * 具体策略A
 * Class ConcreteStrategyA
 * @package Patter\Strategy
 */
class ConcreteStrategyA implements Strategy {
    function strategyMethod()
    {
        echo "具体策略A的策略方法被访问！";
        echo "</br>";
    }
}