<?php
namespace Patter\Interpreter;

use Patter\BaseMain;

class Main extends BaseMain {
    protected $patter_name_cn = '解释器模式';
    protected $patter_name_en = 'Interpreter';
    protected $brief_introduction = '给定一个语言，给定他的文法的一种表示，并定义一个解释器，这个解释器使用该表示来解释语言中的句子。';

    function __construct()
    {
        parent::__construct();
    }
}