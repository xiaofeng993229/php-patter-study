<?php
namespace Patter\Factory;

class IDCard extends Product {

    private $owner;
    public function __construct(string $owner)
    {
        echo "制作{$owner} 的ID卡。</br>";
        $this->owner = $owner;
    }

    public  function use_() {
        echo "使用{$this->owner} 的ID卡。</br>";
    }

    public function getOwner() {
        return $this->owner;
    }
}