<?php

namespace ExtremeSa\Aramex\API\Response\Shipping;

use ExtremeSa\Aramex\API\Classes\ProcessedPickup;
use ExtremeSa\Aramex\API\Response\Response;

/**
 * Informs the user on the status of their submitted pickup request.
 *
 * Success = a Collection (Pickup) reference is supplied
 * Failure = an error message specifically states the location of the error and its nature.
 * The Transaction Parameter is sent as filled in the request for identification purposes.
 *
 * Class PickupCreationResponse
 * @package ExtremeSa\Aramex\API\Response
 */
class PickupCreationResponse extends Response
{
    private $precessedPickup;

    /**
     * @return ProcessedPickup
     */
    public function getPrecessedPickup(): ProcessedPickup
    {
        return $this->precessedPickup;
    }

    /**
     * @param ProcessedPickup $precessedPickup
     * @return PickupCreationResponse
     */
    public function setPrecessedPickup(ProcessedPickup $precessedPickup): PickupCreationResponse
    {
        $this->precessedPickup = $precessedPickup;
        return $this;
    }

    /**
     * @param object $obj
     * @return self
     */
    protected function parse($obj)
    {
        parent::parse($obj);

        $processedPickupObj = $obj->ProcessedPickup;

        $processedShipments = collect($processedPickupObj->ProcessedShipments)->toArray();

        $processedPickup = new ProcessedPickup();
        $processedPickup = $processedPickup
            ->setId($processedPickupObj->ID)
            ->setGUID($processedPickupObj->GUID)
            ->setReference1($processedPickupObj->Reference1)
            ->setReference2($processedPickupObj->Reference2)
            ->setProcessedShipments($processedShipments);

        $this->setPrecessedPickup($processedPickup);

        return $this;
    }

    /**
     * @param object $obj
     * @return PickupCreationResponse
     */
    public static function make($obj)
    {
        return (new self())->parse($obj);
    }
}