<?php


namespace ExtremeSa\Aramex\API\Classes;

use ExtremeSa\Aramex\API\Interfaces\Normalize;

/**
 * When a request is processed successfully,
 * the elements in processed shipment appear with details on the shipment.
 *
 * Class ProcessedShipment
 * @package ExtremeSa\Aramex\API\Classes
 */
class ProcessedShipment implements Normalize
{
    private $id;
    private $reference1;
    private $reference2;
    private $reference3;
    private $foreignHAWB;
    private $hasErrors;
    private $notifications;
    private $shipmentLabel;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The AWB ID generated
     *
     * @param string $id
     * @return ProcessedShipment
     */
    public function setId(string $id): ProcessedShipment
    {
        $this->id = $id;
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
     * The reference filled in the Shipment element
     *
     * @param string $reference1
     * @return ProcessedShipment
     */
    public function setReference1(string $reference1): ProcessedShipment
    {
        $this->reference1 = $reference1;
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
     * @return ProcessedShipment
     */
    public function setReference2(string $reference2): ProcessedShipment
    {
        $this->reference2 = $reference2;
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
     * @return ProcessedShipment
     */
    public function setReference3(string $reference3): ProcessedShipment
    {
        $this->reference3 = $reference3;
    }

    /**
     * @return string
     */
    public function getForeignHAWB(): string
    {
        return $this->foreignHAWB;
    }

    /**
     * Filled in the Shipment Element must be unique for every shipment in the system.
     *
     * @param string $foreignHAWB
     * @return ProcessedShipment
     */
    public function setForeignHAWB($foreignHAWB): ProcessedShipment
    {
        $this->foreignHAWB = $foreignHAWB;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasErrors(): bool
    {
        return $this->hasErrors;
    }

    /**
     * @param bool $hasErrors
     * @return ProcessedShipment
     */
    public function setHasErrors(bool $hasErrors): ProcessedShipment
    {
        $this->hasErrors = $hasErrors;
        return $this;
    }

    /**
     * @return Notification[]
     */
    public function getNotifications(): array
    {
        return $this->notifications;
    }

    /**
     * @param Notification[] $notifications
     * @return ProcessedShipment
     */
    public function setNotifications(array $notifications): ProcessedShipment
    {
        $this->notifications = $notifications;
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
     * @return ProcessedShipment
     */
    public function setShipmentLabel(ShipmentLabel $shipmentLabel): ProcessedShipment
    {
        $this->shipmentLabel = $shipmentLabel;
        return $this;
    }

    public function normalize(): array
    {
        return [
            'ID' => $this->getId(),
            'Reference1' => $this->getReference1(),
            'Reference2' => $this->getReference2(),
            'Reference3' => $this->getReference3(),
            'ForeignHAWB' => $this->getForeignHAWB(),
            'HasErrors' => $this->getHasErrors(),
            'Notifications' => $this->getNotifications(),
            'ShipmentLabel' => $this->getShipmentLabel(),
        ];
    }
}