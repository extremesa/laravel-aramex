<?php

namespace ExtremeSa\Aramex\API\Requests\Shipping;

use ExtremeSa\Aramex\API\Classes\Address;
use ExtremeSa\Aramex\API\Classes\ScheduledDelivery as Resource;
use ExtremeSa\Aramex\API\Interfaces\Normalize;
use ExtremeSa\Aramex\API\Requests\API;
use ExtremeSa\Aramex\API\Response\ScheduledDeliveryResponse;
use Exception;

/**
 * This method allows you to schedule the delivery of a shipment at a specified time and place (Longitude and Latitude)
 *
 * Class ScheduledDelivery
 * @package ExtremeSa\Aramex\API\Requests
 */
class ScheduleDelivery extends API implements Normalize
{
    protected $live_wsdl = 'https://ws.aramex.net/shippingapi.v2/shipping/service_1_0.svc?wsdl';
    protected $test_wsdl = 'https://ws.aramex.net/shippingapi.v2/shipping/service_1_0.svc?wsdl';

    private $address;
    private $scheduledDelivery;
    private $shipmentNumber;
    private $productGroup;
    private $entity;
    private $consigneePhone;
    private $shipperNumber;
    private $shipperReference;
    private $reference1;
    private $reference2;
    private $reference3;

    /**
     * @return ScheduledDeliveryResponse
     * @throws Exception
     */
    public function create(): ScheduledDeliveryResponse
    {
        $this->validate();

        return ScheduledDeliveryResponse::make($this->soapClient->ScheduleDelivery($this->normalize()));
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     * @return ScheduledDelivery
     */
    public function setAddress(Address $address): ScheduledDelivery
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return Resource
     */
    public function getScheduledDelivery(): Resource
    {
        return $this->scheduledDelivery;
    }

    /**
     * @param mixed $scheduledDelivery
     * @return ScheduledDelivery
     */
    public function setScheduledDelivery($scheduledDelivery): ScheduledDelivery
    {
        $this->scheduledDelivery = $scheduledDelivery;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentNumber(): string
    {
        return $this->shipmentNumber;
    }

    /**
     * @param string $shipmentNumber
     * @return ScheduledDelivery
     */
    public function setShipmentNumber(string $shipmentNumber): ScheduledDelivery
    {
        $this->shipmentNumber = $shipmentNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductGroup(): string
    {
        return $this->productGroup;
    }

    /**
     * @param string $productGroup
     * @return ScheduledDelivery
     */
    public function setProductGroup(string $productGroup): ScheduledDelivery
    {
        $this->productGroup = $productGroup;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntity(): string
    {
        return $this->entity;
    }

    /**
     * @param string $entity
     * @return ScheduledDelivery
     */
    public function setEntity(string $entity): ScheduledDelivery
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneePhone(): string
    {
        return $this->consigneePhone;
    }

    /**
     * @param string $consigneePhone
     * @return ScheduledDelivery
     */
    public function setConsigneePhone(string $consigneePhone): ScheduledDelivery
    {
        $this->consigneePhone = $consigneePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipperNumber(): string
    {
        return $this->shipperNumber;
    }

    /**
     * @param string $shipperNumber
     * @return ScheduledDelivery
     */
    public function setShipperNumber(string $shipperNumber): ScheduledDelivery
    {
        $this->shipperNumber = $shipperNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipperReference(): string
    {
        return $this->shipperReference;
    }

    /**
     * @param string $shipperReference
     * @return ScheduledDelivery
     */
    public function setShipperReference(string $shipperReference): ScheduledDelivery
    {
        $this->shipperReference = $shipperReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference1(): string
    {
        return $this->reference1;
    }

    /**
     * @param string $reference1
     * @return ScheduledDelivery
     */
    public function setReference1(string $reference1): ScheduledDelivery
    {
        $this->reference1 = $reference1;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference2(): string
    {
        return $this->reference2;
    }

    /**
     * @param string $reference2
     * @return ScheduledDelivery
     */
    public function setReference2(string $reference2)
    {
        $this->reference2 = $reference2;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference3(): string
    {
        return $this->reference3;
    }

    /**
     * @param string $reference3
     * @return ScheduledDelivery
     */
    public function setReference3(string $reference3): ScheduledDelivery
    {
        $this->reference3 = $reference3;
        return $this;
    }
}