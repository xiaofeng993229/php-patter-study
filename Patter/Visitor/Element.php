<?php
namespace Patter\Visitor;

/**
 * 抽象元素
 * Interface Element
 * @package Patter\Visitor
 */
interface Element {
    function accept(Visitor $visitor);
}