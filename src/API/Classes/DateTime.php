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
     * @return DateTime
     */
    public function setShippingDate($shippingDate): DateTime
    {
        $this->shippingDate = $shippingDate;
        return $this;
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
     * @return DateTime
     */
    public function setDueDate($dueDate): DateTime
    {
        $this->dueDate = $dueDate;
        return $this;
    }


    public function normalize(): array
    {
        return [
            'ShippingDate' => $this->getShippingDate(),
            'DueDate' => $this->getDueDate(),
        ];
    }
}