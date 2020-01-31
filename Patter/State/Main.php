<?php
namespace Patter\State;

use Patter\BaseMain;

class Main extends BaseMain {
    protected $patter_name_cn = '状态';
    protected $patter_name_en = 'State';
    protected $brief_introduction = '允许一个对象在其内部状态改变时改变它的行为。对象看起来好像修改了它的类';

    public function __construct()
    {
        parent::__construct();

        $contexst = new Context();

        $contexst->handle();
        $contexst->handle();
        $contexst->handle();
        $contexst->handle();
    }
}