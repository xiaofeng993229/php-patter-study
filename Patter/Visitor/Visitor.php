<?php
namespace Patter\Visitor;

interface Visitor {
    function visit(ConcreteElementA $v);
    function visit2(ConcreteElementB $v);

}