<?php


namespace ExtremeSa\Aramex\API\Classes;

use ExtremeSa\Aramex\API\Interfaces\Normalize;

/**
 * Required Elements:
 * Pickup Address
 * Pickup Contact
 * Pickup Location
 * Ready time
 * Last Pickup time
 * Closing Time
 * Reference 1
 * Pickup Items
 * Status
 *
 * Class Pickup
 * @package ExtremeSa\Aramex\API\Classes
 */
class Pickup implements Normalize
{
    private $pickupAddress;
    private $pickupContact;
    private $pickupLocation;
    private $pickupDate;
    private $readyTime;
    private $lastPickupTime;
    private $closingTime;
    private $comments;
    private $reference1;
    private $reference2;
    private $vehicle;
    private $shipments;
    private $pickItems;
    private $status;

    /**
     * @return Address
     */
    public function getPickupAddress(): Address
    {
        return $this->pickupAddress;
    }

    /**
     * Pickup Address.
     *
     * @param Address $pickupAddress
     * @return Pickup
     */
    public function setPickupAddress(Address $pickupAddress): Pickup
    {
        $this->pickupAddress = $pickupAddress;
        return $this;
    }

    /**
     * @return Contact
     */
    public function getPickupContact(): Contact
    {
        return $this->pickupContact;
    }

    /**
     * @param Contact $pickupContact
     * @return Pickup
     */
    public function setPickupContact(Contact $pickupContact): Pickup
    {
        $this->pickupContact = $pickupContact;
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
     * @param string $pickupLocation
     * @return Pickup
     */
    public function setPickupLocation(string $pickupLocation): Pickup
    {
        $this->pickupLocation = $pickupLocation;
        return $this;
    }

    /**
     * @return int
     */
    public function getPickupDate(): int
    {
        return $this->pickupDate;
    }

    /**
     * @param int $pickupDate
     * @return Pickup
     */
    public function setPickupDate(int $pickupDate): Pickup
    {
        $this->pickupDate = $pickupDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getReadyTime(): int
    {
        return $this->readyTime;
    }

    /**
     * Ready time should always be before latest and closingtime.
     * Date should not be before the current day or more than seven days in advance of the current date.
     *
     * @param int $readyTime
     * @return Pickup
     */
    public function setReadyTime(int $readyTime): Pickup
    {
        $this->readyTime = $readyTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getLastPickupTime(): int
    {
        return $this->lastPickupTime;
    }

    /**
     * @param int $lastPickupTime
     * @return Pickup
     */
    public function setLastPickupTime(int $lastPickupTime): Pickup
    {
        $this->lastPickupTime = $lastPickupTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getClosingTime(): int
    {
        return $this->closingTime;
    }

    /**
     * @param int $closingTime
     * @return Pickup
     */
    public function setClosingTime(int $closingTime): Pickup
    {
        $this->closingTime = $closingTime;
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
     * @param string $comments
     * @return Pickup
     */
    public function setComments(string $comments): Pickup
    {
        $this->comments = $comments;
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
     * Any general detail the customer would like to add about the shipment.
     *
     * @param string $reference1
     * @return Pickup
     */
    public function setReference1(string $reference1): Pickup
    {
        $this->reference1 = $reference1;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference2(): ?string
    {
        return $this->reference2;
    }

    /**
     * Any general detail the customer would like to add about the shipment.
     *
     * @param string $reference2
     * @return Pickup
     */
    public function setReference2(string $reference2): Pickup
    {
        $this->reference2 = $reference2;
        return $this;
    }

    /**
     * @return string
     */
    public function getVehicle(): ?string
    {
        return $this->vehicle;
    }

    /**
     * Type of Vehicle requested to transport the shipments.
     *
     * @param string $vehicle
     * @return Pickup
     */
    public function setVehicle($vehicle): Pickup
    {
        $this->vehicle = $vehicle;
        return $this;
    }

    /**
     * @return Shipment[]
     */
    public function getShipments(): ?array
    {
        return $this->shipments;
    }

    /**
     * @param Shipment[] $shipments
     * @return Pickup
     */
    public function setShipments(array $shipments): Pickup
    {
        $this->shipments = $shipments;
        return $this;
    }

    /**
     * @param Shipment $shipment
     * @return Pickup
     */
    public function addShipment(Shipment $shipment): Pickup
    {
        $this->shipments[] = $shipment;
        return $this;
    }

    /**
     * @return PickupItem[]
     */
    public function getPickItems(): array
    {
        return $this->pickItems;
    }

    /**
     * @param PickupItem[] $pickItems
     * @return Pickup
     */
    public function setPickItems(array $pickItems): Pickup
    {
        $this->pickItems = $pickItems;
        return $this;
    }

    /**
     * @param PickupItem $pickItems
     * @return Pickup
     */
    public function addPickupItem(PickupItem $pickItems): Pickup
    {
        $this->pickItems[] = $pickItems;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Ready or Pending
     * Pending: more information about the pickup needs to be added,
     * Ready: no further information is needed and the pickup request is ready to be assigned.
     *
     * @param string $status
     * @return Pickup
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
        return $this;
    }

    public function normalize(): array
    {
        return [
            'PickupAddress' => $this->getPickupAddress()->normalize(),
            'PickupContact' => $this->getPickupContact()->normalize(),
            'PickupLocation' => $this->getPickupLocation(),
            'PickupDate' => $this->getPickupDate(),
            'ReadyTime' => $this->getReadyTime(),
            'LastPickupTime' => $this->getLastPickupTime(),
            'ClosingTime' => $this->getClosingTime(),
            'Comments' => $this->getComments(),
            'Reference1' => $this->getReference1(),
            'Reference2' => $this->getReference2(),
            'Vehicle' => $this->getVehicle(),
            'Shipments' => $this->getShipments() ? array_map(function ($item) {
                /** @var Shipment $item */
                return $item->normalize();
            }, $this->getShipments()) : [],
            'PickupItems' => $this->getPickItems() ? array_map(function ($item) {
                /** @var PickupItem $item */
                return $item->normalize();
            }, $this->getPickItems()) : [],
            'Status' => $this->getStatus(),
        ];
    }

}