<?php

namespace ExtremeSa\Aramex\API\Classes;

use ExtremeSa\Aramex\API\Interfaces\Normalize;

/**
 * Money is a complex element, consisting of two child elements (Currency Code and Value).
 * These apply to every element that is defined by the Data Type “Money“.
 *
 * Class Money
 * @package ExtremeSa\Aramex\API\Classes
 */
class Money implements Normalize
{
    private $currencyCode;
    private $value;

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * 3-Letter Standard ISO Currency Code
     * @param string $currencyCode
     * @return $this
     */
    public function setCurrencyCode(string $currencyCode): Money
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * United States Dollar
     * @return Money
     */
    public function useUnitedStatesDollarAsCurrency(): Money
    {
        $this->setCurrencyCode('USD');
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The Monetary value.
     * @param float $value
     * @return Money
     */
    public function setValue(float $value): Money
    {
        $this->value = $value;
        return $this;
    }

    public function normalize(): array
    {
        return [
            'CurrencyCode' => $this->getCurrencyCode(),
            'Value' => $this->getValue()
        ];
    }

    /**
     * @param object $obj
     * @return Money
     */
    public static function parse($obj)
    {
        if (!$obj)
            return new self();

        return (new self())->setCurrencyCode(object_get($obj, "CurrencyCode"))->setValue(object_get($obj, "Value"));
    }
}