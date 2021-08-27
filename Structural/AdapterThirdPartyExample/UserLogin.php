<?php


namespace Structural\AdapterThirdPartyExample;

class UserLogin
{
    /**
     * @var AuthenticatorInterface
     */
    private $authenticator;

    public function __construct(AuthenticatorInterface $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function login(array $params)
    {
        return $this->authenticator->login($params);
    }
}