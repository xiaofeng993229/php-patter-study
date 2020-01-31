<?php
namespace Patter\Builder;
/**
 * 建造者
 * Class Builder
 * @package Patter\Builder
 */
abstract class Builder {
    abstract function makeTitle(string $title);
    abstract function makeString(string $string);
    abstract function makeItems(array $item);
    abstract function close();
}