<?php
namespace Patter\Interpreter;

/**
 * 抽象表达式类
 * Interface AbstractExpression
 * @package Patter\Interpreter
 */
interface AbstractExpression {
    function interpret(string $info);
}