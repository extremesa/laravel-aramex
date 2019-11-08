<?php

namespace ExtremeSa\Aramex\API\Response\Location;

use ExtremeSa\Aramex\API\Classes\Country;
use ExtremeSa\Aramex\API\Response\Response;

class CountryFetchingResponse extends Response
{
    private $country;

    /**
     * @return array
     */
    public function getCountry(): array
    {
        return $this->country;
    }

    /**
     * @param Country $country
     * @return $this
     */
    public function setCountry(Country $country): CountryFetchingResponse
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @param object $obj
     * @return self
     */
    protected function parse($obj)
    {
        parent::parse($obj);

        if ($country = $obj->Country) {
            $this->setCountry(
                (new Country())
                    ->setCode($country->Code)
                    ->setName($country->Name)
                    ->setIsoCode($country->IsoCode)
                    ->setStateRequired($country->StateRequired)
                    ->setPostCodeRequired($country->PostCodeRequired)
                    ->setInternationalCallingNumber($country->InternationalCallingNumber)
            );
        }

        return $this;
    }

    /**
     * @param object $obj
     * @return CountryFetchingResponse
     */
    public static function make($obj)
    {
        return (new self())->parse($obj);
    }
}