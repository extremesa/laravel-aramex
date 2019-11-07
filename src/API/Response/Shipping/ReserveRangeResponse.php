<?php

namespace ExtremeSa\Aramex\API\Response\Shipping;

use ExtremeSa\Aramex\API\Response\Response;

/**
 * Returns the assigned Waybill range to be used.
 *
 * Class ReserveRangeResponse
 * @package ExtremeSa\Aramex\API\Response
 */
class ReserveRangeResponse extends Response
{
    private $fromWayBill;
    private $toWayBill;

    /**
     * @return string
     */
    public function getFromWayBill(): string
    {
        return $this->fromWayBill;
    }

    /**
     * @param string $fromWayBill
     * @return ReserveRangeResponse
     */
    public function setFromWayBill(string $fromWayBill): ReserveRangeResponse
    {
        $this->fromWayBill = $fromWayBill;
        return $this;
    }

    /**
     * @return string
     */
    public function getToWayBill(): string
    {
        return $this->toWayBill;
    }

    /**
     * @param string $toWayBill
     * @return ReserveRangeResponse
     */
    public function setToWayBill($toWayBill): ReserveRangeResponse
    {
        $this->toWayBill = $toWayBill;
        return $this;
    }


    /**
     * @param object $obj
     * @return self
     */
    protected function parse($obj)
    {
        parent::parse($obj);

        $this->setFromWayBill($obj->FromWaybill);
        $this->setToWayBill($obj->ToWaybill);

        return $this;
    }

    /**
     * @param object $obj
     * @return ReserveRangeResponse
     */
    public static function make($obj)
    {
        return (new self())->parse($obj);
    }
}