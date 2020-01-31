<?php
namespace Patter\Iterator;

class BookShelf implements Aggregate {

    private $Book = array();
    private $last = 0 ;

    public function getBookAt ($index) {
        return $this->Book[$index];
    }

    public function appendBook (Book $book) {
        $this->Book[$this->last] = $book;
        $this->last++;
    }

    public function getLength()
    {
        return $this->last;
    }

    public function iterator()
    {
        return new BookShelfIterator($this);
        // TODO: Implement iterator() method.
    }
}