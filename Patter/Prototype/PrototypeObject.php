<?php
namespace Patter\Prototype;

class PrototypeObject implements IPrototype {

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }


    function copy()
    {
        // 浅 copy
        return clone $this;
        // 深 copy
        $serilaliseStr = serialize($this);
        $cloneObj = unserialize($serilaliseStr);

        return $cloneObj;
        // TODO: Implement coty() method.
    }
}