<?php
namespace Patter\Singleton;

class Singleton {

    private static $singleton;
    private function __construct(){
        echo "生成了一个实例。";
    }

    public static function getInstance () {
        if (self::$singleton instanceof self) {
            return self::$singleton;
        } else {
            self::$singleton = new self();
            return self::$singleton;
        }
    }
}