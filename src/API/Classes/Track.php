<?php


namespace ExtremeSa\Aramex\API\Classes;


class Track
{
    private $id;
    private $updateCode;
    private $updateDescription;
    private $updateDateTime;
    private $updateLocation;
    private $comments;
    private $problemCode;
    private $grossWeight;
    private $chargeableWeight;
    private $weightUnit;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdateCode()
    {
        return $this->updateCode;
    }

    /**
     * @param string $updateCode
     * @return $this
     */
    public function setUpdateCode(string $updateCode)
    {
        $this->updateCode = $updateCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdateDescription()
    {
        return $this->updateDescription;
    }

    /**
     * @param string $updateDescription
     * @return $this
     */
    public function setUpdateDescription(string $updateDescription)
    {
        $this->updateDescription = $updateDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdateDateTime()
    {
        return $this->updateDateTime;
    }

    /**
     * @param string $updateDateTime
     * @return $this
     */
    public function setUpdateDateTime(string $updateDateTime)
    {
        $this->updateDateTime = $updateDateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdateLocation()
    {
        return $this->updateLocation;
    }

    /**
     * @param string $updateLocation
     * @return $this
     */
    public function setUpdateLocation(string $updateLocation)
    {
        $this->updateLocation = $updateLocation;
        return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
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
    public function getProblemCode()
    {
        return $this->problemCode;
    }

    /**
     * @param string $problemCode
     * @return $this
     */
    public function setProblemCode(string $problemCode)
    {
        $this->problemCode = $problemCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getGrossWeight()
    {
        return $this->grossWeight;
    }

    /**
     * @param string $grossWeight
     * @return $this
     */
    public function setGrossWeight(string $grossWeight)
    {
        $this->grossWeight = $grossWeight;
        return $this;
    }

    /**
     * @return string
     */
    public function getChargeableWeight()
    {
        return $this->chargeableWeight;
    }

    /**
     * @param string $chargeableWeight
     * @return $this
     */
    public function setChargeableWeight(string $chargeableWeight)
    {
        $this->chargeableWeight = $chargeableWeight;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeightUnit()
    {
        return $this->weightUnit;
    }

    /**
     * @param string $weightUnit
     * @return $this
     */
    public function setWeightUnit(string $weightUnit)
    {
        $this->weightUnit = $weightUnit;
        return $this;
    }

    /**
     * @param object $obj
     * @return Track
     */
    public static function parse($obj)
    {
        $obj = $obj->Value->TrackingResult;

        return (new self())->setId($obj->WaybillNumber)
            ->setUpdateCode($obj->UpdateCode)
            ->setUpdateDescription($obj->UpdateDescription)
            ->setUpdateDateTime($obj->UpdateDateTime)
            ->setUpdateLocation($obj->UpdateLocation)
            ->setComments($obj->Comments)
            ->setProblemCode($obj->ProblemCode)
            ->setGrossWeight($obj->GrossWeight)
            ->setChargeableWeight($obj->ChargeableWeight)
            ->setWeightUnit($obj->WeightUnit);
    }
}