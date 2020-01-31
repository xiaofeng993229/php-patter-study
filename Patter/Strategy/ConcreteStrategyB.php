<?php
namespace Patter\Strategy;

/**
 * 具体策略B
 * Class ConcreteStrategyB
 * @package Patter\Strategy
 */
class ConcreteStrategyB implements Strategy {
    function strategyMethod()
    {
        echo "具体策略B的策略方法被访问！";
        echo "</br>";
    }
}