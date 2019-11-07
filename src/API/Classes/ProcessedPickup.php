<?php


namespace ExtremeSa\Aramex\API\Classes;

use ExtremeSa\Aramex\API\Interfaces\Normalize;

/**
 * When a request is processed successfully, the elements in processed pickup appear with details of the pickup.
 *
 * Class ProcessedPickup
 * @package ExtremeSa\Aramex\API\Classes
 */
class ProcessedPickup implements Normalize
{
    private $id;
    private $guid;
    private $reference1;
    private $reference2;
    private $processedShipments;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     *  A reference number that has been allocated to the submitted pickup.
     *
     * @param string $id
     * @return ProcessedPickup
     */
    public function setId(string $id): ProcessedPickup
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getGUID(): string
    {
        return $this->guid;
    }

    /**
     *  A reference number that has been allocated to the submitted pickup.
     *
     * @param string $guid
     * @return ProcessedPickup
     */
    public function setGUID(string $guid): ProcessedPickup
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * A unique identifier that gets assigned to the submitted pickup request after being saved.
     * This identifier can be used in the cancellation request at a later stage.
     *
     * @param string $guid
     * @return ProcessedPickup
     */
    public function setReference3(string $guid): ProcessedPickup
    {
        $this->guid = $guid;
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
     * @return ProcessedPickup
     */
    public function setReference1(string $reference1): ProcessedPickup
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
     * @param string|null $reference2
     * @return ProcessedPickup
     */
    public function setReference2(?string $reference2): ProcessedPickup
    {
        $this->reference2 = $reference2;
        return $this;
    }

    /**
     * @return ProcessedShipment[]
     */
    public function getProcessedShipments(): array
    {
        return $this->processedShipments;
    }

    /**
     * @param ProcessedShipment[] $processedShipments
     * @return ProcessedPickup
     */
    public function setProcessedShipments(array $processedShipments): ProcessedPickup
    {
        $this->processedShipments = $processedShipments;
        return $this;
    }

    public function normalize(): array
    {
        return [
            'ID' => $this->getId(),
            'GUID' => $this->getGUID(),
            'Reference1' => $this->getReference1(),
            'Reference2' => $this->getReference2(),
            'ProcessedShipments' => $this->getProcessedShipments() ? array_map(function ($item) {
                /** @var ProcessedPickup $item */
                return $item->normalize();
            }, $this->getProcessedShipments()) : [],
        ];
    }
}