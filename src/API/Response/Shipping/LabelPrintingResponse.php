<?php

namespace ExtremeSa\Aramex\API\Response\Shipping;

use ExtremeSa\Aramex\API\Classes\ShipmentLabel;
use ExtremeSa\Aramex\API\Response\Response;

/**
 * Returns the created label,
 * if all the required information in the request is inserted and validated correctly.
 * The Transaction and Shipment Number parameters are returned from the request for identification purposes.
 *
 * Class LabelPrintingResponse
 * @package ExtremeSa\Aramex\API\Response
 */
class LabelPrintingResponse extends Response
{
    private $shipmentNumber;
    private $shipmentLabel;

    /**
     * @return string
     */
    public function getShipmentNumber(): string
    {
        return $this->shipmentNumber;
    }

    /**
     * @param string $shipmentNumber
     * @return LabelPrintingResponse
     */
    public function setShipmentNumber(string $shipmentNumber): LabelPrintingResponse
    {
        $this->shipmentNumber = $shipmentNumber;
        return $this;
    }

    /**
     * @return ShipmentLabel
     */
    public function getShipmentLabel(): ShipmentLabel
    {
        return $this->shipmentLabel;
    }

    /**
     * @param ShipmentLabel $shipmentLabel
     * @return LabelPrintingResponse
     */
    public function setShipmentLabel(ShipmentLabel $shipmentLabel): LabelPrintingResponse
    {
        $this->shipmentLabel = $shipmentLabel;
        return $this;
    }


    /**
     * @param object $obj
     * @return self
     */
    protected function parse($obj)
    {
        parent::parse($obj);

        $this->setShipmentNumber($obj->ShipmentNumber);

        if (property_exists($obj, 'ShipmentLabel') && $obj->ShipmentLabel != null) {
            $this->setShipmentLabel(
                (new ShipmentLabel())
                    ->setLabelUrl($obj->ShipmentLabel->LabelURL)
                    ->setLabelFileContents($obj->ShipmentLabel->LabelFileContents)
            );
        }

        return $this;
    }

    /**
     * @param object $obj
     * @return LabelPrintingResponse
     */
    public static function make($obj)
    {
        return (new self())->parse($obj);
    }
}