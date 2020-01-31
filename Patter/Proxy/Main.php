<?php
namespace Patter\Proxy;

use Patter\BaseMain;

class Main extends BaseMain {

    protected $patter_name_cn = '代理模式';
    protected $patter_name_en = 'Proxy';
    protected $brief_introduction = '为其他对象提供一种代理以控制这个对象的访问。代理模式使用代理对象完成用户请求，屏蔽用户对真是对象的访问。';

    public function __construct()
    {
        parent::__construct();

        $proxy=new Proxy();
        $proxy->Request();
    }

}