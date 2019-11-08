<?php

namespace ExtremeSa\Aramex\API\Requests\Location;

use ExtremeSa\Aramex\API\Interfaces\Normalize;
use ExtremeSa\Aramex\API\Requests\API;
use ExtremeSa\Aramex\API\Response\Location\CountriesFetchingResponse;

class FetchCountries extends API implements Normalize
{
    protected $live_wsdl = 'https://ws.aramex.net/shippingapi.v2/location/service_1_0.svc?wsdl';
    protected $test_wsdl = 'https://ws.aramex.net/shippingapi.v2/location/service_1_0.svc?wsdl';

    /**
     * @return CountriesFetchingResponse
     * @throws \Exception
     */
    public function make()
    {
        $this->validate();

        return CountriesFetchingResponse::make($this->soapClient->FetchCountries($this->normalize()));
    }

    public function normalize(): array
    {
        return parent::normalize();
    }
}