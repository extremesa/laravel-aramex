<?php


namespace ExtremeSa\Aramex\API\Classes;

use ExtremeSa\Aramex\API\Interfaces\Normalize;

class DateTime implements Normalize
{
    private $shippingDate;
    private $dueDate;

    /**
     * @return mixed
     */
    public function getShippingDate()
    {
        return $this->shippingDate;
    }

    /**
     * The date Aramex receives the shipment to be shipped out.
     * @param mixed $shippingDate
     */
    public function setShippingDate($shippingDate): void
    {
        $this->shippingDate = $shippingDate;
    }

    /**
     * @return mixed
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * The date specified for shipment to be delivered to the consignee.
     * @param mixed $dueDate
     */
    public function setDueDate($dueDate): void
    {
        $this->dueDate = $dueDate;
    }


    public function normalize(): array
    {
        return [
            'ShippingDate' => $this->getShippingDate(),
            'DueDate' => $this->getDueDate(),
        ];
    }
}