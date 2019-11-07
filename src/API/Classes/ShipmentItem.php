<?php

namespace ExtremeSa\Aramex\API\Classes;

use ExtremeSa\Aramex\API\Interfaces\Normalize;

/**
 * ShipmentItem is a complex element consisting of four child elements.
 * Every Shipment can consist of several items and each item has the following elements:
 * package type, quantity, weight, comments and reference.
 *
 * Class ShipmentItem
 * @package ExtremeSa\Aramex\API\Classes
 */
class ShipmentItem implements Normalize
{
    private $packageType;
    private $quantity;
    private $weight;
    private $comments;
    private $reference;

    /**
     * @return string
     */
    public function getPackageType(): string
    {
        return $this->packageType;
    }

    /**
     * Type of packaging, for example. Cans, bottles, degradable Plastic. Conditional: If any of the Item element values are filled then the rest must be filled.
     * @param string $packageType
     * @return $this
     */
    public function setPackageType(string $packageType)
    {
        $this->packageType = $packageType;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Number of items
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return Weight
     */
    public function getWeight(): Weight
    {
        return $this->weight;
    }

    /**
     * Total Weight of the Items
     * @param Weight $weight
     * @return $this
     */
    public function setWeight(Weight $weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return string
     */
    public function getComments(): string
    {
        return $this->comments;
    }

    /**
     * Additional Comments or Information about the items
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
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return $this
     */
    public function setReference(string $reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return array
     */
    public function normalize(): array
    {
        return [
            'PackageType' => $this->getPackageType(),
            'Quantity' => $this->getQuantity(),
            'Weight' => optional($this->getWeight())->normalize(),
            'Comments' => $this->getComments(),
            'Reference' => $this->getReference()
        ];
    }
}