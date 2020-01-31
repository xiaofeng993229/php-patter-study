<?php
/**
 * 扮演适配器角色
 */
namespace Patter\Adapter;

class PrintBanner extends Banner implements MyPrint {

    public function __construct(string $string)
    {
        parent::__construct($string);
    }

    public function printWeak()
    {
        $this->showWithParen();
        // TODO: Implement printWeak() method.
    }

    public function printStrong()
    {
        $this->showWithAster();
        // TODO: Implement printStrong() method.
    }
}