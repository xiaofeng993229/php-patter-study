<?php
namespace Patter\Visitor;

use Patter\BaseMain;

class Main extends BaseMain {
    protected $patter_name_cn = '访问者模式';
    protected $patter_name_en = 'Visitor';
    protected $brief_introduction = '表示一个作用于对象结构中的各元素操作。它使你可以在不改变各种元素的类的前提下定义作用这些类的新操作，即对于某个对象或者一组对象，不同的访问者，产生的结果不同，执行操作也不同。';

    public function __construct()
    {
        parent::__construct();
    }
}