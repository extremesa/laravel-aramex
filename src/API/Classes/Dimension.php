<?php

namespace ExtremeSa\Aramex\API\Classes;

use ExtremeSa\Aramex\API\Interfaces\Normalize;

/**
 * Dimensions is a complex element, consisting of four child elements (Unit, Length, Width and Height).
 * These apply to every element that is defined by the Data Type “Dimensions“.
 *
 * Class Dimension
 * @package ExtremeSa\Aramex\API\Classes
 */
class Dimension implements Normalize
{
    private $length;
    private $width;
    private $height;
    private $unit;

    /**
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Measurements required in calculating the Chargeable Weight, If any of the Dimensional values are filled then the rest must be filled.
     * @param float $length
     * @return $this
     */
    public function setLength(float $length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Measurements required in calculating the Chargeable Weight, If any of the Dimensional values are filled then the rest must be filled.
     * @param float $width
     * @return $this
     */
    public function setWidth(float $width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Measurements required in calculating the Chargeable Weight, If any of the Dimensional values are filled then the rest must be filled.
     * @param float $height
     * @return $this
     */
    public function setHeight(float $height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Measurement Unit, If any of the Dimensional values are filled then the rest must be filled.
     * CM = Centimeter
     * M = Meter
     * @param string $unit
     * @return $this
     */
    public function setUnit(string $unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Centimeter
     * @return $this
     */
    public function useCentimeterAsUnit()
    {
        return $this->setUnit('CM');
    }

    /**
     * Meter
     * @return $this
     */
    public function useMeterAsUnit()
    {
        return $this->setUnit('M');
    }

    public function normalize(): array
    {
        return [
            'Length' => $this->getLength(),
            'Width' => $this->getWidth(),
            'Height' => $this->getHeight(),
            'Unit' => $this->getUnit()
        ];
    }
}