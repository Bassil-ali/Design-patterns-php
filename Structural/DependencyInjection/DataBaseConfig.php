<?php


namespace Structural\DependencyInjection;


class DataBaseConfig
{
    private  $host;
    private  $userName;
    private  $password;
    private  $port;
    /**
     * @var string
     */
    private $databaseName;

    public function __construct(string $host, string $userName, string $password, string $port,string $databaseName)
    {
        $this->host = $host;
        $this->userName = $userName;
        $this->password = $password;
        $this->port = $port;
        $this->databaseName = $databaseName;
    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @return string
     */
    public function getDatabaseName(): string
    {
        return $this->databaseName;
    }
}