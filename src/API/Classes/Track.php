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
     * @return Track
     */
    public function setId(string $id): Track
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
     * @return Track
     */
    public function setUpdateCode(string $updateCode): Track
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
     * @return Track
     */
    public function setUpdateDescription(string $updateDescription): Track
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
     * @return Track
     */
    public function setUpdateDateTime(string $updateDateTime): Track
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
     * @return Track
     */
    public function setUpdateLocation(string $updateLocation): Track
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
     * @return Track
     */
    public function setComments(string $comments): Track
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
     * @return Track
     */
    public function setProblemCode(string $problemCode): Track
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
     * @return Track
     */
    public function setGrossWeight(string $grossWeight): Track
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
     * @return Track
     */
    public function setChargeableWeight(string $chargeableWeight): Track
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
     * @return Track
     */
    public function setWeightUnit(string $weightUnit): Track
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