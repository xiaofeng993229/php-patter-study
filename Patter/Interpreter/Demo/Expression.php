<?php
namespace Patter\Interpreter;

/**
 * 抽象表达式类
 * Interface AbstractExpression
 * @package Patter\Interpreter
 */
interface Expression {
    function interpret(string $info);
}