<?php

namespace ExtremeSa\Aramex\API\Requests\Shipping;

use Exception;
use ExtremeSa\Aramex\API\Classes\LabelInfo;
use ExtremeSa\Aramex\API\Interfaces\Normalize;
use ExtremeSa\Aramex\API\Requests\API;
use ExtremeSa\Aramex\API\Response\Shipping\LabelPrintingResponse;

/**
 * This method allows the user to print a label for an existing shipment.
 *
 * The required nodes to be filled are ClientInfo and ShipmentNumber.
 * If there is a duplicate Shipment Number then the ProductGroup and Origin Entity elements are required.
 *
 * Class PrintLabel
 * @package ExtremeSa\Aramex\API\Requests
 */
class PrintLabel extends API implements Normalize
{
    protected $live_wsdl = 'https://ws.aramex.net/shippingapi.v2/shipping/service_1_0.svc?wsdl';
    protected $test_wsdl = 'https://ws.aramex.net/shippingapi.v2/shipping/service_1_0.svc?wsdl';

    private $shipmentNumber;
    private $productGroup;
    private $originEntity;
    private $labelInfo;

    /**
     * @return LabelPrintingResponse
     * @throws Exception
     */
    public function create(): LabelPrintingResponse
    {
        $this->validate();

        return LabelPrintingResponse::make($this->soapClient->PrintLabel($this->normalize()));
    }

    /**
     * @throws \Exception
     */
    protected function validate()
    {
        parent::validate();

        if (!$this->shipmentNumber) {
            throw new \Exception('Shipment Number Not Provided');
        }

        if (!$this->labelInfo) {
            throw new \Exception('Label Info Not Provided');
        }
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
     * @return PrintLabel
     */
    public function setShipmentNumber(string $shipmentNumber): PrintLabel
    {
        $this->shipmentNumber = $shipmentNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProductGroup(): ?string
    {
        return $this->productGroup;
    }

    /**
     * @param string $productGroup
     * @return PrintLabel
     */
    public function setProductGroup(string $productGroup = null): PrintLabel
    {
        $this->productGroup = $productGroup;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOriginEntity(): ?string
    {
        return $this->originEntity;
    }

    /**
     * @param string $originEntity
     * @return PrintLabel
     */
    public function setOriginEntity(string $originEntity = null): PrintLabel
    {
        $this->originEntity = $originEntity;
        return $this;
    }

    /**
     * @return LabelInfo
     */
    public function getLabelInfo(): LabelInfo
    {
        return $this->labelInfo;
    }

    /**
     * @param LabelInfo $labelInfo
     * @return PrintLabel
     */
    public function setLabelInfo(LabelInfo $labelInfo): PrintLabel
    {
        $this->labelInfo = $labelInfo;
        return $this;
    }

    public function normalize(): array
    {
        return array_merge([
            'ShipmentNumber' => $this->getShipmentNumber(),
            'ProductGroup' => $this->getProductGroup(),
            'OriginEntity' => $this->getOriginEntity(),
            'LabelInfo' => optional($this->getLabelInfo())->normalize(),
        ], parent::normalize());
    }
}