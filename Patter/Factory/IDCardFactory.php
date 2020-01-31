<?php
namespace Patter\Factory;
class IDCardFactory extends Factory {
    private $owner = [];
    protected  function createProduct(string $owner)
    {
        return new IDCard($owner); // 这里是工厂方法的核心，是通过一个类的方法返回的实例，而不是在调用的时候new
    }

    protected  function registerProduct(Product $product)
    {
        array_push($this->owner,$product);
    }

    public function getOwners() {
        return $this->owner;
    }
}