<?php
namespace Patter\Facade;

use Patter\BaseMain;

class Main extends BaseMain {
    protected $patter_name_cn = '外观模式';
    protected $patter_name_en = 'Facade';
    protected $brief_introduction = '通过一种为多个复杂子系统提供一个一致的接口，而使这些子系统更加容易被访问的模式。';

    public function __construct()
    {
        parent::__construct();

        $f = new Facade();
        $f->method();
    }
}