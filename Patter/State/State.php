<?php
namespace Patter\State;

abstract class State {
    public abstract function handle(Context $context);
}