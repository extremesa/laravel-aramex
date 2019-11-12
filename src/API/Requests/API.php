<?php

namespace ExtremeSa\Aramex\API\Requests;

use ExtremeSa\Aramex\API\Classes\ClientInfo;
use ExtremeSa\Aramex\API\Classes\Transaction;
use ExtremeSa\Aramex\API\Interfaces\Normalize;

abstract class API implements Normalize
{
    /**
     * @var \SoapClient $soapClient
     * @var ClientInfo $clientInfo
     * @var Transaction $transaction
     */
    protected $soapClient;
    protected $clientInfo;
    protected $transaction;
    protected $test_wsdl;
    protected $live_wsdl;
    protected $environment;

    public function __construct()
    {
        config('aramex.mode') === 'live' ? $this->useLiveAsEnvironment() : $this->useTestAsEnvironment();

        $this->fillClientInfoFromEnv();

        $this->soapClient = new \SoapClient($this->getWsdlAccordingToEnvironment(), array('trace' => 1));
    }

    public function setClientInfo(ClientInfo $clientInfo)
    {
        $this->clientInfo = $clientInfo;
        return $this;
    }

    /**
     * @return ClientInfo
     */
    public function getClientInfo()
    {
        return $this->clientInfo;
    }

    /**
     * @return Transaction
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * @param $transaction
     * @return $this
     */
    public function setTransaction(Transaction $transaction)
    {
        $this->transaction = $transaction;
        return $this;
    }

    /**
     * @param $environment
     * @return $this
     */
    protected function setEnvironment($environment)
    {
        $this->environment = $environment;
        return $this;
    }

    public function useTestAsEnvironment()
    {
        return $this->setEnvironment('test');
    }

    public function useLiveAsEnvironment()
    {
        return $this->setEnvironment('live');
    }

    /**
     * @return bool
     */
    public function isTest()
    {
        return $this->environment === "test";
    }

    /**
     * @return bool
     */
    public function isLive()
    {
        return $this->environment === "live";
    }

    /**
     * @return string
     */
    protected function getWsdlAccordingToEnvironment()
    {
        if ($this->isLive()) {
            return $this->live_wsdl;
        } else {
            return $this->test_wsdl;
        }
    }

    /**
     * @throws \Exception
     */
    protected function validate()
    {
        if (!$this->clientInfo) {
            throw new \Exception('Client Info Not Provided');
        }
    }

    /**
     * @return $this
     */
    private function fillClientInfoFromEnv()
    {
        $this->clientInfo = (new ClientInfo())
            ->setAccountCountryCode(config("aramex.$this->environment.country_code"))
            ->setAccountEntity(config("aramex.$this->environment.entity"))
            ->setAccountNumber(config("aramex.$this->environment.number"))
            ->setAccountPin(config("aramex.$this->environment.pin"))
            ->setUserName(config("aramex.$this->environment.username"))
            ->setPassword(config("aramex.$this->environment.password"));

        return $this;
    }

    public function getAccountNumber()
    {
        return config("aramex.$this->environment.number");
    }

    public function normalize(): array
    {
        return [
            'ClientInfo' => $this->getClientInfo()->normalize(),
            'Transaction' => optional($this->getTransaction())->normalize()
        ];
    }
}