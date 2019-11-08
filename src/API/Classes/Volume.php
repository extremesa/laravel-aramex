<?php

namespace ExtremeSa\Aramex\API\Classes;

use ExtremeSa\Aramex\API\Interfaces\Normalize;

/**
 * Volume is a complex element, consisting of two child elements (Unit and Value).
 * These apply to every element that is defined by the Data Type “Volume“.
 *
 * Class Volume
 * @package ExtremeSa\Aramex\API\Classes
 */
class Volume implements Normalize
{
    private $unit;
    private $value;

    /**
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Unit of the volume
     * Options: Cm3, Inch3
     *
     * @param string $unit
     * @return Volume
     */
    public function setUnit(string $unit): Volume
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * Shipment Volume
     *
     * @param float $value
     * @return Volume
     */
    public function setValue(float $value): Volume
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Centimeters
     * @return Volume
     */
    public function useCentimetersAsUnit(): Volume
    {
        return $this->setUnit('Cm3');
    }

    /**
     * Inches
     * @return Volume
     */
    public function useInchesAsUnit(): Volume
    {
        return $this->setUnit('Inch3');
    }

    public function normalize(): array
    {
        return [
            'Unit' => $this->getUnit(),
            'Value' => $this->getValue()
        ];
    }
}