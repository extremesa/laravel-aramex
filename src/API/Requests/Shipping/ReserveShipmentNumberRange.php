<?php

namespace ExtremeSa\Aramex\API\Requests\Shipping;

use Exception;
use ExtremeSa\Aramex\API\Interfaces\Normalize;
use ExtremeSa\Aramex\API\Requests\API;
use ExtremeSa\Aramex\API\Response\Shipping\ReserveRangeResponse;

/**
 * This method allows you to reserve a range of shipment numbers.
 *
 * Class ReserveRange
 * @package ExtremeSa\Aramex\API\Requests
 */
class ReserveShipmentNumberRange extends API implements Normalize
{
    protected $live_wsdl = 'https://ws.aramex.net/shippingapi.v2/shipping/service_1_0.svc?wsdl';
    protected $test_wsdl = 'https://ws.dev.aramex.net/shippingapi.v2/shipping/service_1_0.svc?wsdl';

    private $entity;
    private $productGroup;
    private $count;

    /**
     * @return ReserveRangeResponse
     * @throws Exception
     */
    public function run(): ReserveRangeResponse
    {
        $this->validate();

        return ReserveRangeResponse::make($this->soapClient->ReserveShipmentNumberRange($this->normalize()));
    }

    /**
     * @throws \Exception
     */
    protected function validate()
    {
        parent::validate();

        if (!$this->entity) {
            throw new \Exception('Entity Not Provided');
        }

        if (!$this->productGroup) {
            throw new \Exception('Product Group Not Provided');
        }

        if (!$this->productGroup) {
            throw new \Exception('Count Not Provided');
        }
    }

    /**
     * @return string
     */
    public function getEntity(): string
    {
        return $this->entity;
    }

    /**
     * This data should be provided to you from your Aramex representative.
     * Allowed Values:
     * Example: LON for London station
     *
     * @param string $entity
     * @return ReserveShipmentNumberRange
     */
    public function setEntity(string $entity): ReserveShipmentNumberRange
    {
        $this->entity = $entity;
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
     * Allowed Values:
     * EXP = Express
     * DOM = Domestic
     *
     * @param string $productGroup
     * @return ReserveShipmentNumberRange
     */
    public function setProductGroup(string $productGroup): ReserveShipmentNumberRange
    {
        $this->productGroup = $productGroup;
        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * The range of shipment numbers to be reserved and used to send CreateShipment requests
     * Allowed Values: 1-5000
     *
     * @param int $count
     * @return ReserveShipmentNumberRange
     */
    public function setCount(int $count): ReserveShipmentNumberRange
    {
        $this->count = $count;
        return $this;
    }

    public function normalize(): array
    {
        return array_merge([
            'Entity' => $this->getEntity(),
            'ProductGroup' => $this->getProductGroup(),
            'Count' => $this->getCount()
        ], parent::normalize());
    }

}