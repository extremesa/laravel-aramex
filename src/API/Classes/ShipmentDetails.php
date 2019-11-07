<?php

namespace ExtremeSa\Aramex\API\Classes;

use ExtremeSa\Aramex\API\Interfaces\Normalize;

/**
 *
 * Class ShipmentDetails
 * @package ExtremeSa\Aramex\API\Classes
 */
class ShipmentDetails implements Normalize
{
    private $dimensions;
    private $actualWeight;
    private $chargeableWeight;
    private $descriptionOfGoods;
    private $goodsOriginCountry;
    private $numberOfPieces;
    private $productGroup;
    private $productType;
    private $paymentType;
    private $customsValueAmount;
    private $cashOnDeliveryAmount;
    private $insuranceAmount;
    private $cashAdditionalAmount;
    private $services;
    private $items;

    /**
     * @return Dimension
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Measurements required in calculating the Chargeable Weight, If any of the dimensional values are filled then the rest must be filled.
     * @param Dimension $dimensions
     * @return $this
     */
    public function setDimensions(Dimension $dimensions)
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * @return Weight
     */
    public function getActualWeight()
    {
        return $this->actualWeight;
    }

    /**
     * Total actual shipment weight. If the Dimensions are filled, charging weight is compared to actual and the highest value is filled here.
     * @param Weight $actualWeight
     * @return $this
     */
    public function setActualWeight(Weight $actualWeight)
    {
        $this->actualWeight = $actualWeight;
        return $this;
    }

    /**
     * @return Weight
     */
    public function getChargeableWeight()
    {
        return $this->chargeableWeight;
    }

    /**
     * @param Weight $chargeableWeight
     * @return $this
     */
    public function setChargeableWeight(Weight $chargeableWeight)
    {
        $this->chargeableWeight = $chargeableWeight;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionOfGoods()
    {
        return $this->descriptionOfGoods;
    }

    /**
     * The Nature of Shipment Contents. Example: Clothes, Electronic
     * @param string $descriptionOfGoods
     * @return $this
     */
    public function setDescriptionOfGoods(string $descriptionOfGoods)
    {
        $this->descriptionOfGoods = $descriptionOfGoods;
        return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOriginCountry()
    {
        return $this->goodsOriginCountry;
    }

    /**
     * The Origin of which the product in the shipment came from
     * @param string $goodsOriginCountry
     * @return $this
     */
    public function setGoodsOriginCountry(string $goodsOriginCountry)
    {
        $this->goodsOriginCountry = $goodsOriginCountry;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPieces()
    {
        return $this->numberOfPieces;
    }

    /**
     * Number of shipment pieces
     * @param int $numberOfPieces
     * @return $this
     */
    public function setNumberOfPieces(int $numberOfPieces)
    {
        $this->numberOfPieces = $numberOfPieces;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductGroup()
    {
        return $this->productGroup;
    }

    /**
     * EXP = Express DOM = Domestic
     * @param string $productGroup
     * @return $this
     */
    public function setProductGroup(string $productGroup)
    {
        $this->productGroup = $productGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function useExpressAsProductGroup()
    {
        return $this->setProductGroup('EXP');
    }

    /**
     * @return $this
     */
    public function useDomesticAsProductGroup()
    {
        return $this->setProductGroup('DOM');
    }

    /**
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Priority  Document  Express.
     * Urgent, time sensitive consignments containing printed matter or document material.
     * @return $this
     */
    public function usePriorityDocumentExpressAsProductType()
    {
        return $this->setProductType('PDX');
    }

    /**
     * Priority Parcel Express.
     * Urgent, time sensitive consignments containing non-printed matter or non-document material.
     * @return $this
     */
    public function usePriorityParcelExpressAsProductType()
    {
        return $this->setProductType('PPX');
    }

    /**
     * Priority Letter Express.
     * Urgent, time sensitive consignments containing printed matter of weight less than 0.5 kg.
     * @return $this
     */
    public function usePriorityLetterExpressAsProductType()
    {
        return $this->setProductType('PLX');
    }

    /**
     * Deferred Document Express.
     * 2nd Day Delivery consignments containing printed matter or document material.
     * @return $this
     */
    public function useDeferredDocumentExpressAsProductType()
    {
        return $this->setProductType('DDX');
    }

    /**
     * Deferred Parcel Express.
     * 2nd Day Delivery consignments containing non-printed matter or non-document material.
     * @return $this
     */
    public function setDeferredParcelExpressProductType()
    {
        return $this->setProductType('DPX');
    }

    /**
     * Ground  Document Express.
     * Ground delivery consignments containing printed matter or document material.
     * @return $this
     */
    public function setGroundDocumentExpressProductType()
    {
        return $this->setProductType('GDX');
    }

    /**
     * Ground Parcel Express.
     * Ground Delivery consignments containing non-printed matter or non-document material.
     * @return $this
     */
    public function setGroundParcelExpressProductType()
    {
        return $this->setProductType('GPX');
    }


    /**
     * Product Type involves the specification of certain features concerning the delivery of the product
     * @param string $productType
     * @return $this
     */
    public function setProductType(string $productType)
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * @return Money
     */
    public function getCustomsValueAmount()
    {
        return $this->customsValueAmount;
    }

    /**
     * @param Money $customsValueAmount
     * @return $this
     */
    public function setCustomsValueAmount(Money $customsValueAmount)
    {
        $this->customsValueAmount = $customsValueAmount;
        return $this;
    }

    /**
     * @return Money
     */
    public function getCashOnDeliveryAmount()
    {
        return $this->cashOnDeliveryAmount;
    }

    /**
     * Amount of Cash that is paid by the receiver of the package. Conditional - Based on the Services "COD" being filled.
     * @param Money $cashOnDeliveryAmount
     * @return $this
     */
    public function setCashOnDeliveryAmount(Money $cashOnDeliveryAmount)
    {
        $this->cashOnDeliveryAmount = $cashOnDeliveryAmount;
        return $this;
    }

    /**
     * @return Money
     */
    public function getInsuranceAmount()
    {
        return $this->insuranceAmount;
    }

    /**
     * Insurance Amount charged on shipment.
     * @param Money $insuranceAmount
     * @return $this
     */
    public function setInsuranceAmount(Money $insuranceAmount)
    {
        $this->insuranceAmount = $insuranceAmount;
        return $this;
    }

    /**
     * @return Money
     */
    public function getCashAdditionalAmount()
    {
        return $this->cashAdditionalAmount;
    }

    /**
     * Additional Cash that can be required for miscellaneous purposes.
     * @param Money $cashAdditionalAmount
     * @return $this
     */
    public function setCashAdditionalAmount(Money $cashAdditionalAmount)
    {
        $this->cashAdditionalAmount = $cashAdditionalAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Additional Services used in shipping the package, Separate by comma when selecting multiple services.
     * @param string $services
     * @return $this
     */
    public function setServices(string $services)
    {
        $this->services = $services;
        return $this;
    }

    /**
     * Cash on Delivery.
     * Receiver pays the cost of the goods
     * @return $this
     */
    public function useCashOnDeliveryService()
    {
        return $this->setServices('COD');
    }

    /**
     * First Delivery.
     * Committed delivery time at destination country.
     * @return $this
     */
    public function useFirstAsService()
    {
        return $this->setServices('FIRST');
    }

    public function useFreeDomicileAsService()
    {
        return $this->setServices('FRDOM');
    }

    public function useHoldForPickupAsService()
    {
        return $this->setServices('HFPU');
    }

    public function useNoonDeliveryAsService()
    {
        return $this->setServices('NOON');
    }

    public function useSignatureRequiredAsService()
    {
        return $this->setServices('SIG');
    }

    /**
     * @return ShipmentItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Details of the Items within a shipment. Several items can be added for a single shipment.
     * @param $items
     * @return $this
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @param ShipmentItem $item
     * @return $this
     */
    public function addItem(ShipmentItem $item)
    {
        $this->items[] = $item;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Method of payment for shipment.
     * @param string $paymentType
     * @return $this
     */
    public function setPaymentType(string $paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * Prepaid.
     * Transportation Charges payable by shipper.
     * @return $this
     */
    public function usePrepaidAsPaymentType()
    {
        return $this->setPaymentType('P');
    }

    /**
     * Collect.
     * Transportation Charges payable by consignee.
     * @return $this
     */
    public function useCollectAsPaymentType()
    {
        return $this->setPaymentType('C');
    }

    /**
     * Third Party.
     * Transportation Charges payable by third party. Note: in case of 3rd Party all third party details must be filled including a valid Aramex Account Number for Billing Party.
     * @return $this
     */
    public function useThirdPartyAsPaymentType()
    {
        return $this->setPaymentType('T');
    }

    public function normalize(): array
    {
        return [
            'Dimensions' => optional($this->getDimensions())->normalize(),
            'ActualWeight' => optional($this->getActualWeight())->normalize(),
            'ChargeableWeight' => optional($this->getChargeableWeight())->normalize(),
            'DescriptionOfGoods' => $this->getDescriptionOfGoods(),
            'GoodsOriginCountry' => $this->getGoodsOriginCountry(),
            'NumberOfPieces' => $this->getNumberOfPieces(),
            'ProductGroup' => $this->getProductGroup(),
            'ProductType' => $this->getProductType(),
            'PaymentType' => $this->getPaymentType(),
            'CustomsValueAmount' => optional($this->getCustomsValueAmount())->normalize(),
            'CashOnDeliveryAmount' => optional($this->getCashOnDeliveryAmount())->normalize(),
            'InsuranceAmount' => optional($this->getInsuranceAmount())->normalize(),
            'CashAdditionalAmount' => optional($this->getCashAdditionalAmount())->normalize(),
            'Services' => $this->getServices(),
            'Items' => $this->getItems() ? array_map(function ($item) {
                return $item->normalize();
            }, $this->getItems()) : []
        ];
    }
}