<?php

namespace ExtremeSa\Aramex\API\Requests\Location;

use Exception;
use ExtremeSa\Aramex\API\Interfaces\Normalize;
use ExtremeSa\Aramex\API\Requests\API;
use ExtremeSa\Aramex\API\Response\Location\StatesFetchingResponse;

class FetchStates extends API implements Normalize
{
    protected $live_wsdl = 'https://ws.aramex.net/shippingapi.v2/location/service_1_0.svc?wsdl';
    protected $test_wsdl = 'https://ws.aramex.net/shippingapi.v2/location/service_1_0.svc?wsdl';

    private $countryCode;

    /**
     * @return StatesFetchingResponse
     * @throws Exception
     */
    public function fetch()
    {
        $this->validate();

        return StatesFetchingResponse::make($this->soapClient->FetchStates($this->normalize()));
    }

    protected function validate()
    {
        parent::validate();

        if (!$this->countryCode) {
            throw new Exception('Should provide country code!');
        }
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return FetchStates
     */
    public function setCountryCode(string $countryCode): FetchStates
    {
        $this->countryCode = $countryCode;
        return $this;
    }


    public function normalize(): array
    {
        return array_merge([
            'CountryCode' => $this->getCountryCode()
        ], parent::normalize());
    }
}