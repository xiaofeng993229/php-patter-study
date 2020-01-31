<?php
namespace Patter\Iterator;

use Patter\BaseMain;

class Main extends BaseMain {

    protected $patter_name_cn = '迭代器';
    protected $patter_name_en = 'Iterator';
    protected $brief_introduction = '提供一个方法顺序访问聚合对象的各个元素，而又无需暴露该对象的内部表示。';
    function __construct()
    {
        parent::__construct();
        $book_shelf = new BookShelf();
        $book_shelf->appendBook(new Book("Java 设计模式"));
        $book_shelf->appendBook(new Book("PHP 设计模式"));
        $book_shelf->appendBook(new Book("图解设计模式"));

        $it = $book_shelf->iterator();
        while ($it->rewind()) {
            $book = $it->next();
            print_r($book->getName());
            parent::br();
        }
    }

}