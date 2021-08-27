<?php


namespace Behavioral\Command;


class  CLIInvoker
{
    private  $command;
    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function run()
    {
        $this->command->execute();
    }
}