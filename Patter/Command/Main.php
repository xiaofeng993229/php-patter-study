<?php
namespace Patter\Command;

use Patter\BaseMain;

class Main extends BaseMain {
    protected $patter_name_cn = '命令模式';
    protected $patter_name_en = 'Command';
    protected $brief_introduction = '将一个请求封装成一个对象，从而使得不同的请求对客户进行参数化，队请求或记录请求日志，以及支持可撤销的操作';

    public function __construct()
    {
        parent::__construct();

        $cmd=new ConcreteCommand();
        $ir=new Invoker($cmd);
        echo "客户访问调用者的call()方法...";
        $this->br();
        $ir->call();
    }
}