<?php
namespace Patter\Builder;

/**
 * 监工
 * Class Director
 * @package Patter\Builder
 */
class Director {
    private $builder ;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function construct () {
        $this->builder->makeTitle('Greeting');
        $this->builder->makeString('从早上到下午');
        $this->builder->makeItems(['早上好','下午好']);
        $this->builder->makeString('晚上');
        $this->builder->makeItems(['晚上好','晚安','再见']);
        $this->builder->close();
    }

}