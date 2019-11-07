<?php


namespace ExtremeSa\Aramex\API\Classes;

use ExtremeSa\Aramex\API\Interfaces\Normalize;

/**
 * Required – Shipper, Consignee, and Details.
 *
 * Class Shipment
 * @package ExtremeSa\Aramex\API\Classes
 */
class Shipment implements Normalize
{
    private $reference1;
    private $reference2;
    private $reference3;
    private $shipper;
    private $consignee;
    private $thirdParty;
    private $shippingDateTime;
    private $dueDate;
    private $comments;
    private $pickupLocation;
    private $operationsInstructions;
    private $accountingInstructions;
    private $details;
    private $attachments;
    private $foreignHAWB;
    private $transportType;
    private $number;
    private $pickupGUID;

    /**
     * @return string
     */
    public function getReference1(): string
    {
        return $this->reference1;
    }

    /**
     * Any general detail the customer would like to add about the shipment
     *
     * @param string $reference1
     * @return $this
     */
    public function setReference1(string $reference1)
    {
        $this->reference1 = $reference1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReference2(): ?string
    {
        return $this->reference2;
    }

    /**
     * Any general detail the customer would like to add about the shipment
     *
     * @param string $reference2
     * @return $this
     */
    public function setReference2(string $reference2)
    {
        $this->reference2 = $reference2;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReference3(): ?string
    {
        return $this->reference3;
    }

    /**
     * Any general detail the customer would like to add about the shipment
     *
     * @param string $reference3
     * @return $this
     */
    public function setReference3(string $reference3)
    {
        $this->reference3 = $reference3;
        return $this;
    }

    /**
     * @return Party
     */
    public function getShipper(): Party
    {
        return $this->shipper;
    }

    /**
     * @param Party $shipper
     * @return $this
     */
    public function setShipper(Party $shipper)
    {
        $this->shipper = $shipper;
        return $this;
    }

    /**
     * @return Party
     */
    public function getConsignee(): Party
    {
        return $this->consignee;
    }

    /**
     * @param Party $consignee
     * @return $this
     */
    public function setConsignee(Party $consignee)
    {
        $this->consignee = $consignee;
        return $this;
    }

    /**
     * @return Party
     */
    public function getThirdParty(): ?Party
    {
        return $this->thirdParty;
    }

    /**
     * @param Party $thirdParty
     * @return $this
     */
    public function setThirdParty(Party $thirdParty)
    {
        $this->thirdParty = $thirdParty;
        return $this;
    }

    /**
     * @return int
     */
    public function getShippingDateTime()
    {
        return $this->shippingDateTime;
    }

    /**
     * The date aramex receives the shipment to be shipped out.
     *
     * @param int $shippingDateTime
     * @return $this
     */
    public function setShippingDateTime(int $shippingDateTime)
    {
        $this->shippingDateTime = $shippingDateTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * The date specified for shipment to be delivered to the consignee.
     *
     * @param int $dueDate
     * @return $this
     */
    public function setDueDate(int $dueDate)
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getComments(): ?string
    {
        return $this->comments;
    }

    /**
     * Any comments on the shipment.
     *
     * @param string $comments
     * @return $this
     */
    public function setComments(string $comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupLocation(): string
    {
        return $this->pickupLocation;
    }

    /**
     * The location from where the shipment should be picked up, such as the reception desk.
     *
     * @param string $pickupLocation
     * @return $this
     */
    public function setPickupLocation(string $pickupLocation)
    {
        $this->pickupLocation = $pickupLocation;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOperationsInstructions(): ?string
    {
        return $this->operationsInstructions;
    }

    /**
     * Instructions on how to handle the shipment.
     *
     * @param string $operationsInstructions
     * @return $this
     */
    public function setOperationsInstructions(string $operationsInstructions)
    {
        $this->operationsInstructions = $operationsInstructions;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAccountingInstructions(): ?string
    {
        return $this->accountingInstructions;
    }

    /**
     * Instructions on how to handle payment specifics.
     *
     * @param string $accountingInstructions
     * @return $this
     */
    public function setAccountingInstructions(string $accountingInstructions)
    {
        $this->accountingInstructions = $accountingInstructions;
        return $this;
    }

    /**
     * @return ShipmentDetails
     */
    public function getDetails(): ShipmentDetails
    {
        return $this->details;
    }

    /**
     * @param ShipmentDetails $details
     * @return $this
     */
    public function setDetails(ShipmentDetails $details)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * @return Attachment[]
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * The total size of a single file must not exceed 2 MB.
     * @param array $attachments
     * @return $this
     */
    public function setAttachments(array $attachments)
    {
        $this->attachments = $attachments;
        return $this;
    }

    /**
     * @param Attachment $attachment
     * @return $this
     */
    public function addAttachment(Attachment $attachment)
    {
        $this->attachments[] = $attachment;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getForeignHAWB(): ?string
    {
        return $this->foreignHAWB;
    }

    /**
     * Client’s shipment number if present. If filled this field must be unique for each shipment.
     *
     * @param string $foreignHAWB
     * @return $this
     */
    public function setForeignHAWB(string $foreignHAWB)
    {
        $this->foreignHAWB = $foreignHAWB;
        return $this;
    }

    /**
     * 0 or 1
     * 0 by Default
     * @return int
     */
    public function getTransportType(): int
    {
        return $this->transportType;
    }

    /**
     * @param int $transportType
     * @return $this
     */
    public function setTransportType(int $transportType)
    {
        $this->transportType = $transportType;
        return $this;
    }

    /**
     * A valid HAWB number
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * If shipment numbers are required to be entered manually
     * then aramex operations will provide a stock range from which to fill this field with.
     * Otherwise if empty a number will be assigned to the created shipment automatically and returned in the response.
     *
     * @param string $number
     * @return $this
     */
    public function setNumber(string $number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * To add Shipments to existing pickups.
     *
     * @return string|null
     */
    public function getPickupGUID(): ?string
    {
        return $this->pickupGUID;
    }

    /**
     * A valid GUID value, provided by the Pickup Creation Response
     *
     * @param string $pickupGUID
     * @return $this
     */
    public function setPickupGUID(string $pickupGUID)
    {
        $this->pickupGUID = $pickupGUID;
        return $this;
    }


    public function normalize(): array
    {
        return [
            'Reference1' => $this->getReference1(),
            'Reference2' => $this->getReference2(),
            'Reference3' => $this->getReference3(),
            'Shipper' => optional($this->getShipper())->normalize(),
            'Consignee' => optional($this->getConsignee())->normalize(),
            'ThirdParty' => optional($this->getThirdParty())->normalize(),
            'ShippingDateTime' => $this->getShippingDateTime(),
            'DueDate' => $this->getDueDate(),
            'Comments' => $this->getComments(),
            'PickupLocation' => $this->getPickupLocation(),
            'OperationsInstructions' => $this->getOperationsInstructions(),
            'AccountingInstructions' => $this->getAccountingInstructions(),
            'Details' => optional($this->getDetails())->normalize(),
            'Attachments' => $this->getAttachments() ? array_map(function ($item) {
                return $item->normalize();
            }, $this->getAttachments()) : [],
            'ForeignHAWB' => $this->getForeignHAWB(),
            'TransportType' => $this->getTransportType(),
            'Number' => $this->getNumber(),
            'PickupGUID' => $this->getPickupGUID()
        ];
    }
}