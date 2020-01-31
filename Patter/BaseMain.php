<?php
namespace Patter;

class BaseMain {
    protected $patter_name_cn ;
    protected $patter_name_en ;
    protected $brief_introduction = '我也不知道怎么能用简短的语句总当前模式的精髓' ;
    public function __construct()
    {
        echo "-\t{$this->patter_name_cn} {$this->patter_name_en} 开始-";
        $this->br();
        echo "=\t<b>{$this->brief_introduction}</b>=";
        $this->br();
        $this->br();
    }

    public function __destruct()
    {
        echo "-\t{$this->patter_name_cn} {$this->patter_name_en} 结束-";
        $this->br();
        $this->br();
        $this->br();
    }

    protected function br (){
        echo "</br>";
    }
}