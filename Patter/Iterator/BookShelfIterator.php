<?php
namespace Patter\Iterator;

class BookShelfIterator implements \Iterator {
    private $bookShelf;
    private  $index = 0;

    public function __construct( BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
    }
    public function rewind()
    {
        if ($this->index < $this->bookShelf->getLength()) {
            return true;
        } else {
            return false;
        }
    }

    public function next()
    {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index ++ ;
        return $book;
        // TODO: Implement next() method.
    }

    public function current()
    {
        // TODO: Implement current() method.
    }

    public function key()
    {
        // TODO: Implement key() method.
    }

    public function valid()
    {
        // TODO: Implement valid() method.
    }
}