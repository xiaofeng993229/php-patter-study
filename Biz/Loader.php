<?php
namespace Biz;
class Loader{
    static function autoload($class){
//        echo ROOT_PATH.str_replace('\\','/',$class).'.php';
        require ROOT_PATH.str_replace('\\','/',$class).'.php';

    }
}