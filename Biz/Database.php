<?php
namespace Biz;

class Database {
    private static $db;
    private function __construct(){}

    public static function getInstance() {
        if (self::$db instanceof self == false) {
            self::$db = new self();
            return self::$db;
        } else {
            return self::$db;
        }
    }

    public static function get()
    {
        echo "This is a record\n";
    }

    public function test()
    {
        echo "This is a test function\n";
    }
}

