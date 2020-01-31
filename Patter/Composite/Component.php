<?php
namespace Patter\Composite;

interface Component {
    public function add(Component $c);
    public function remove(Component $c);

    public function getChild($i);
    public function operation();

}