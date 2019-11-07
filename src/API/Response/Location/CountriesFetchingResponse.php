<?php

namespace ExtremeSa\Aramex\API\Response\Location;

use ExtremeSa\Aramex\API\Classes\Country;
use ExtremeSa\Aramex\API\Response\Response;

class CountriesFetchingResponse extends Response
{
    private $countries;

    /**
     * @return Country
     */
    public function getCountries(): array
    {
        return $this->countries;
    }

    /**
     * @param Country[] $countries
     * @return $this
     */
    public function setCountries(array $countries): CountriesFetchingResponse
    {
        $this->countries = $countries;
        return $this;
    }

    /**
     * @param Country $country
     * @return $this
     */
    public function addCountry(Country $country): CountriesFetchingResponse
    {
        $this->countries[] = $country;
        return $this;
    }

    /**
     * @param object $obj
     * @return self
     */
    protected function parse($obj)
    {
        parent::parse($obj);

        if (is_array($obj->Countries->Country)) {
            foreach ($obj->Countries->Country as $country) {
                $this->addCountry(
                    (new Country())
                        ->setCode($country->Code)
                        ->setName($country->Name)
                        ->setIsoCode($country->IsoCode)
                        ->setStateRequired($country->StateRequired)
                        ->setPostCodeRequired($country->PostCodeRequired)
                        ->setInternationalCallingNumber($country->InternationalCallingNumber)
                );
            }
        }

        return $this;
    }

    /**
     * @param object $obj
     * @return RateResponse
     */
    public static function make($obj)
    {
        return (new self())->parse($obj);
    }

}