<?php


namespace Behavioral\State;


class CreatedState extends State
{
    protected  $state = StateEnum::CREATED_STATE;

    public function proceed()
    {
        //Do some staff like ex: add the order to list of orders

        $this->transitionTo(new CollectedState());
    }
}