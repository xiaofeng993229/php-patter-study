<?php
namespace Patter\Factory;

abstract class Factory {
    public final function create( string $owner) {
        $p = $this->createProduct($owner);
        $this->registerProduct($p);
        return $p;
    }

    protected abstract function createProduct(string $owner);
    protected abstract function registerProduct(Product $product);
}