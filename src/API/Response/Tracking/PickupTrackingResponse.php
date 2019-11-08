<?php

namespace ExtremeSa\Aramex\API\Response\Tracking;

use ExtremeSa\Aramex\API\Response\Response;

class PickupTrackingResponse extends Response
{
    private $entity;
    private $reference;
    private $collectionDate;
    private $pickupDate;
    private $lastStatus;
    private $lastStatusDescription;
    private $collectedWaybills;

    /**
     * @return string
     */
    public function getEntity(): string
    {
        return $this->entity;
    }

    /**
     * @param string $entity
     * @return PickupTrackingResponse
     */
    public function setEntity($entity): PickupTrackingResponse
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return PickupTrackingResponse
     */
    public function setReference($reference): PickupTrackingResponse
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getCollectionDate(): string
    {
        return $this->collectionDate;
    }

    /**
     * @param string $collectionDate
     * @return PickupTrackingResponse
     */
    public function setCollectionDate($collectionDate): PickupTrackingResponse
    {
        $this->collectionDate = $collectionDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupDate(): string
    {
        return $this->pickupDate;
    }

    /**
     * @param string $pickupDate
     * @return PickupTrackingResponse
     */
    public function setPickupDate($pickupDate): PickupTrackingResponse
    {
        $this->pickupDate = $pickupDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastStatus(): string
    {
        return $this->lastStatus;
    }

    /**
     * @param string $lastStatus
     * @return PickupTrackingResponse
     */
    public function setLastStatus($lastStatus): PickupTrackingResponse
    {
        $this->lastStatus = $lastStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastStatusDescription(): string
    {
        return $this->lastStatusDescription;
    }

    /**
     * @param string $lastStatusDescription
     * @return PickupTrackingResponse
     */
    public function setLastStatusDescription($lastStatusDescription): PickupTrackingResponse
    {
        $this->lastStatusDescription = $lastStatusDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getCollectedWaybills(): string
    {
        return $this->collectedWaybills;
    }

    /**
     * @param string $collectedWaybills
     * @return PickupTrackingResponse
     */
    public function setCollectedWaybills($collectedWaybills): PickupTrackingResponse
    {
        $this->collectedWaybills = $collectedWaybills;
        return $this;
    }

    /**
     * @param object $obj
     * @return PickupTrackingResponse
     */
    protected function parse($obj): PickupTrackingResponse
    {
        parent::parse($obj);

        $this
            ->setEntity($obj->Entity)
            ->setReference($obj->Reference)
            ->setCollectionDate($obj->CollectionDate)
            ->setPickupDate($obj->PickupDate)
            ->setLastStatus($obj->LastStatus)
            ->setLastStatusDescription($obj->LastStatusDescription)
            ->setCollectedWaybills($obj->CollectedWaybills);

        return $this;
    }

    /**
     * @param object $obj
     * @return PickupTrackingResponse
     */
    public static function make($obj): PickupTrackingResponse
    {
        return (new self())->parse($obj);
    }
}