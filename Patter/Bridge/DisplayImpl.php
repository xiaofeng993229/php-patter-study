<?php
namespace Patter\Bridge;

/**
 * 实现者
 * Class DisplayImpl
 * @package Patter\Bridge
 */
abstract class DisplayImpl {
    abstract function rawOpen();
    abstract function rawPrint();
    abstract function rawClose();
}