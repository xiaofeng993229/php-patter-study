<?php
namespace Patter\Mediator;

abstract class Mediator {
    public abstract function register(Colleague $colleague);
    public abstract function relay(Colleague $cl);
}