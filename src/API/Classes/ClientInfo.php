<?php

namespace ExtremeSa\Aramex\API\Classes;

use ExtremeSa\Aramex\API\Interfaces\Normalize;

/**
 * The Client Info element is present in all the methods of this service.
 * All its child elements are required to be filled.
 * The user name and password are validated to allow access to the service.
 * Version element, is the Version of the API the customer is using, which needs to be specified in the request
 * Account Number, Pin, Entity and Country Code are all needed to verify the users account and obtain vital information from it,
 * such as the ability to create third party shipments among other features provided for each account.
 * Source, used for data mining purposes.
 *
 * Class ClientInfo
 * @package ExtremeSa\Aramex\API\Classes
 */
class ClientInfo implements Normalize
{
    private $accountCountryCode;
    private $accountEntity;
    private $accountNumber;
    private $accountPin;
    private $userName;
    private $password;
    private $version;

    public function __construct()
    {
        $this->useVersion2();
    }

    /**
     * @return string
     */
    public function getAccountCountryCode()
    {
        return $this->accountCountryCode;
    }

    /**
     * @param string $accountCountryCode
     * @return $this
     */
    public function setAccountCountryCode(string $accountCountryCode)
    {
        $this->accountCountryCode = $accountCountryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountEntity()
    {
        return $this->accountEntity;
    }

    /**
     * @param string $accountEntity
     * @return $this
     */
    public function setAccountEntity(string $accountEntity)
    {
        $this->accountEntity = $accountEntity;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return $this
     */
    public function setAccountNumber(string $accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountPin()
    {
        return $this->accountPin;
    }

    /**
     * @param string $accountPin
     * @return $this
     */
    public function setAccountPin(string $accountPin)
    {
        $this->accountPin = $accountPin;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     * @return $this
     */
    public function setUserName(string $userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return $this
     */
    public function setVersion(string $version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return ClientInfo
     */
    public function useVersion1()
    {
        return $this->setVersion('v1.0');
    }

    /**
     * @return ClientInfo
     */
    public function useVersion2()
    {
        return $this->setVersion('v2.0');
    }

    public function normalize(): array
    {
        return [
            'AccountCountryCode' => $this->getAccountCountryCode(),
            'AccountEntity' => $this->getAccountEntity(),
            'AccountNumber' => $this->getAccountNumber(),
            'AccountPin' => $this->getAccountPin(),
            'UserName' => $this->getUserName(),
            'Password' => $this->getPassword(),
            'Version' => $this->getVersion()
        ];
    }
}