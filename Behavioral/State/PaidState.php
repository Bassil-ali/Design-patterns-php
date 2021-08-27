<?php


namespace Behavioral\State;


class PaidState extends State
{
    protected  $state = StateEnum::PAID_STATE;

    private  $paymentStatus;

    public function proceed()
    {
        //Do some staff like ex: Create the payment from the user account
        $this->paymentStatus = $this->getContext()->getClient()->isPaymentExist();

        if ($this->paymentStatus) {
            $this->transitionTo(new DeliveredState());
        }else{
            $this->transitionTo(new CancelledState());
        }
    }
}