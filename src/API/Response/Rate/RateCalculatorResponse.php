<?php

namespace ExtremeSa\Aramex\API\Response\Rate;

use ExtremeSa\Aramex\API\Classes\Money;
use ExtremeSa\Aramex\API\Response\Response;

class RateCalculatorResponse extends Response
{
    private $totalAmount;

    /**
     * @return Money
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param Money $totalAmount
     * @return $this
     */
    public function setTotalAmount(Money $totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * @param object $obj
     * @return self
     */
    protected function parse($obj)
    {
        parent::parse($obj);

        $this->setTotalAmount(Money::parse($obj->TotalAmount));

        return $this;
    }

    /**
     * @param object $obj
     * @return RateResponse
     */
    public static function make($obj)
    {
        return (new self())->parse($obj);
    }
}