<?php

namespace ExtremeSa\Aramex\API\Classes;

use ExtremeSa\Aramex\API\Interfaces\Normalize;

/**
 * Required Elements: Product Group, Number of Shipments, Payment.
 *
 * Class PickupItem
 * @package ExtremeSa\Aramex\API\Classes
 */
class PickupItem implements Normalize
{
    private $productGroup;
    private $productType;
    private $numberOfShipments;
    private $packageType;
    private $payment;
    private $shipmentWeight;
    private $shipmentVolume;
    private $numberOfPieces;
    private $cashAmount;
    private $extraCharges;
    private $shipmentDimensions;
    private $comments;

    /**
     * @return string
     */
    public function getProductGroup(): string
    {
        return $this->productGroup;
    }

    /**
     * EXP = Express
     * DOM = Domestic
     *
     * @param string $productGroup
     * @return PickupItem
     */
    public function setProductGroup(string $productGroup): PickupItem
    {
        $this->productGroup = $productGroup;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductType(): string
    {
        return $this->productType;
    }

    /**
     * Product Type
     * involves the specification of certain features concerning the delivery of the product such as:
     * Priority, Time Sensitivity, and whether it is a Document or Non-Document.
     * Refer to Appendix A for a list of ProductTypes and their Product Groups
     *
     * @param string $productType
     * @return PickupItem
     */
    public function setProductType(string $productType): PickupItem
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfShipments(): int
    {
        return $this->numberOfShipments;
    }

    /**
     * Number of shipment
     *
     * @param int $numberOfShipments
     * @return PickupItem
     */
    public function setNumberOfShipments(int $numberOfShipments): PickupItem
    {
        $this->numberOfShipments = $numberOfShipments;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageType(): ?string
    {
        return $this->packageType;
    }

    /**
     * Type of packaging, for example.
     * Cans, bottles, degradable Plastic.
     * Options: P,C,3
     *
     * @param string $packageType
     * @return PickupItem
     */
    public function setPackageType(string $packageType): PickupItem
    {
        $this->packageType = $packageType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayment(): string
    {
        return $this->payment;
    }

    /**
     * @param string $payment
     * @return PickupItem
     */
    public function setPayment(string $payment): PickupItem
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * @return Weight
     */
    public function getShipmentWeight(): Weight
    {
        return $this->shipmentWeight;
    }

    /**
     * Method of payment for shipment.
     * Refer to Appendix B for more details
     *
     * @param Weight $shipmentWeight
     * @return PickupItem
     */
    public function setShipmentWeight(Weight $shipmentWeight): PickupItem
    {
        $this->shipmentWeight = $shipmentWeight;
        return $this;
    }

    /**
     * @return Volume todo
     */
    public function getShipmentVolume(): ?Volume
    {
        return $this->shipmentVolume;
    }

    /**
     * Volume of the Shipment
     * Pieces > 0
     * MAX = 100
     *
     * @param Volume $shipmentVolume
     * @return PickupItem
     */
    public function setShipmentVolume(Volume $shipmentVolume): PickupItem
    {
        $this->shipmentVolume = $shipmentVolume;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPieces(): int
    {
        return $this->numberOfPieces;
    }

    /**
     * Number of shipment pieces
     *
     * @param int $numberOfPieces
     * @return PickupItem
     */
    public function setNumberOfPieces(int $numberOfPieces): PickupItem
    {
        $this->numberOfPieces = $numberOfPieces;
        return $this;
    }

    /**
     * @return Money
     */
    public function getCashAmount(): ?Money
    {
        return $this->cashAmount;
    }

    /**
     * @param Money $cashAmount
     * @return PickupItem
     */
    public function setCashAmount(Money $cashAmount): PickupItem
    {
        $this->cashAmount = $cashAmount;
        return $this;
    }

    /**
     * @return Money
     */
    public function getExtraCharges(): ?Money
    {
        return $this->extraCharges;
    }

    /**
     * @param Money $extraCharges
     * @return PickupItem
     */
    public function setExtraCharges(Money $extraCharges): PickupItem
    {
        $this->extraCharges = $extraCharges;
        return $this;
    }

    /**
     * @return Dimension
     */
    public function getShipmentDimensions(): ?Dimension
    {
        return $this->shipmentDimensions;
    }

    /**
     * Measurements required in calculating the Chargeable Weight,
     * If any of the Dimensional values are filled then the rest must be filled.
     *
     * @param Dimension $shipmentDimensions
     * @return PickupItem
     */
    public function setShipmentDimensions(Dimension $shipmentDimensions): PickupItem
    {
        $this->shipmentDimensions = $shipmentDimensions;
        return $this;
    }

    /**
     * @return string
     */
    public function getComments(): ?string
    {
        return $this->comments;
    }

    /**
     * Any Comments on the Item being picked up.
     *
     * @param string $comments
     * @return PickupItem
     */
    public function setComments(string $comments): PickupItem
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return array
     */
    public function normalize(): array
    {
        return [
            'ProductGroup' => $this->getProductGroup(),
            'ProductType' => $this->getProductType(),
            'NumberOfShipments' => $this->getNumberOfShipments(),
            'PackageType' => $this->getPackageType(),
            'Payment' => $this->getPayment(),
            'ShipmentWeight' => optional($this->getShipmentWeight())->normalize(),
            'ShipmentVolume' => optional($this->getShipmentVolume())->normalize(),
            'NumberOfPieces' => $this->getNumberOfPieces(),
            'CashAmount' => optional($this->getCashAmount())->normalize(),
            'ExtraCharges' => optional($this->getExtraCharges())->normalize(),
            'ShipmentDimensions' => optional($this->getShipmentDimensions())->normalize(),
            'Comments' => $this->getComments(),
        ];
    }
}