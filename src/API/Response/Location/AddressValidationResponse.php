<?php

namespace ExtremeSa\Aramex\API\Response\Location;

use ExtremeSa\Aramex\API\Classes\Address;
use ExtremeSa\Aramex\API\Response\Response;

/**
 * Informs the user with the correct suggested Address structure for the address he entered by returning
 * an address parameter. The Transaction Parameter is sent as filled in the request for identification purposes.
 *
 * Class AddressValidationResponse
 * @package ExtremeSa\Aramex\API\Response\Location
 */
class AddressValidationResponse extends Response
{
    private $suggestedAddresses;

    /**
     * @return Address[]
     */
    public function getSuggestedAddresses(): array
    {
        return $this->suggestedAddresses;
    }

    /**
     * @param Address[] $suggestedAddresses
     */
    public function setSuggestedAddresses(array $suggestedAddresses): AddressValidationResponse
    {
        $this->suggestedAddresses = $suggestedAddresses;
        return $this;
    }

    /**
     * @param Address $suggestedAddresses
     */
    public function addSuggestedAddresses(Address $suggestedAddress): AddressValidationResponse
    {
        $this->suggestedAddresses[] = $suggestedAddress;
        return $this;
    }

    /**
     * @param object $obj
     * @return self
     */
    protected function parse($obj)
    {
        parent::parse($obj);

        // todo
        // Add Suggested Addresses

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