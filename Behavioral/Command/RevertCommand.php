<?php


namespace Behavioral\Command;


class RevertCommand implements Command
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
        $this->gitReceiver->gitRevert();
    }
}