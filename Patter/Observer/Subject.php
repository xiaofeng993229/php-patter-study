<?php
namespace Patter\Observer;

/**
 * 抽象目标
 * Class Subject
 * @package Patter\Observer
 */
abstract class Subject {

    protected $observers = [];

    public function add (Observer $observer) {
        $this->observers[] = $observer;
    }

    public function remove (Observer $observer) {
        for ($i = 0 ; $i < count($this->observers) ;$i ++) {
            if ($observer == $this->observers[$i]) {
                unset($this->observers[$i]);
            }
        }
    }

    public abstract function notiryObserver();
}