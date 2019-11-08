<?php

namespace ExtremeSa\Aramex\API\Requests\Location;

use Exception;
use ExtremeSa\Aramex\API\Interfaces\Normalize;
use ExtremeSa\Aramex\API\Requests\API;
use ExtremeSa\Aramex\API\Response\Location\OfficesFetchingResponse;

/**
 * This method allows users to get list of the available ARAMEX offices within a certain country.
 * The required nodes  to be filled are Client Info and Country Code.
 *
 * Class FetchOffices
 * @package ExtremeSa\Aramex\API\Requests\Location
 */
class FetchOffices extends API implements Normalize
{
    protected $live_wsdl = 'https://ws.aramex.net/shippingapi.v2/location/service_1_0.svc?wsdl';
    protected $test_wsdl = 'https://ws.aramex.net/shippingapi.v2/location/service_1_0.svc?wsdl';

    private $countryCode;

    /**
     * @return OfficesFetchingResponse
     * @throws Exception
     */
    public function make()
    {
        $this->validate();

        return OfficesFetchingResponse::make($this->soapClient->FetchOffices($this->normalize()));
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
     * @return FetchOffices
     */
    public function setCountryCode(string $countryCode): FetchOffices
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