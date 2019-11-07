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
     */
    public function setCollectedWaybills($collectedWaybills): PickupTrackingResponse
    {
        $this->collectedWaybills = $collectedWaybills;
        return $this;
    }

    /**
     * @param object $obj
     * @return self
     */
    protected function parse($obj)
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
     * @return RateResponse
     */
    public static function make($obj)
    {
        return (new self())->parse($obj);
    }
}