<?php
namespace Patter\Strategy;

/**
 * 环境类
 * Class Context
 * @package Patter\Strategy
 */
class Context {
    private $strategy;

    public function getStrategy () {
        return $this->strategy;
    }

    public function setStrategy (Strategy $strategy) {
        $this->strategy = $strategy;
    }

    public function startMethod() {
        $this->strategy->strategyMethod();
    }
}