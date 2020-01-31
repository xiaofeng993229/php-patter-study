<?php
namespace Patter\Command;

class Invoker {
    private $command;

    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function call() {
        echo "调用者执行命令command...";
        echo "</br>";
        $this->command->execute();
    }
}