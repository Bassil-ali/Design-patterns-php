<?php


namespace Behavioral\Command;


class DeployCommand implements Command
{
    /**
     * @var GitReceiver
     */
    private  $gitReceiver;

    public function __construct(GitReceiver $gitReceiver)
    {
        $this->gitReceiver = $gitReceiver;
    }

    public function execute()
    {
        $this->gitReceiver->gitAdd();
        $this->gitReceiver->gitCommit();
        $this->gitReceiver->gitPush();
    }
}