<?php

namespace ExtremeSa\Aramex\API\Response\Location;

use ExtremeSa\Aramex\API\Classes\Office;
use ExtremeSa\Aramex\API\Response\Response;

/**
 * Informs the user with ARAMEX offices within a certain country by returning array of Office Parameter.
 * The Transaction Parameter is sent as filled in the request for identification purposes.
 *
 * Class DropOffLocationsFetchingResponse
 * @package ExtremeSa\Aramex\API\Response\Location
 */
class DropOffLocationsFetchingResponse extends Response
{
    private $offices;

    /**
     * @return Office[]
     */
    public function getOffices(): array
    {
        return $this->offices;
    }

    /**
     * @param Office[] $offices
     * @return DropOffLocationsFetchingResponse
     */
    public function setOffices(array $offices): DropOffLocationsFetchingResponse
    {
        $this->offices = $offices;
        return $this;
    }

    /**
     * @param Office $office
     * @return DropOffLocationsFetchingResponse
     */
    public function addOffice(Office $office): DropOffLocationsFetchingResponse
    {
        $this->offices[] = $office;
        return $this;
    }

    /**
     * @param object $obj
     * @return self
     */
    protected function parse($obj)
    {
        parent::parse($obj);


        if (is_array($obj->Locations->DropOffLocation)) {
            foreach ($obj->Locations->DropOffLocation as $office) {
                $this->addOffice(
                    (new Office())
                );
            }
        }

        return $this;
    }

    /**
     * @param object $obj
     * @return DropOffLocationsFetchingResponse
     */
    public static function make($obj)
    {
        return (new self())->parse($obj);
    }
}