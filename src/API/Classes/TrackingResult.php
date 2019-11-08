<?php


namespace ExtremeSa\Aramex\API\Classes;

/**
 * Returns the shipment’s updates in the form of unique records,
 * with the tracking result elements as fields
 *
 * Class TrackingResult
 * @package ExtremeSa\Aramex\API\Classes
 */
class TrackingResult
{
    private $waybillNumber;
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
    public function getWaybillNumber(): string
    {
        return $this->waybillNumber;
    }

    /**
     * @param string $id
     * @return TrackingResult
     */
    public function setWaybillNumber(string $waybillNumber): TrackingResult
    {
        $this->waybillNumber = $waybillNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdateCode(): string
    {
        return $this->updateCode;
    }

    /**
     * @param string $updateCode
     * @return $this
     */
    public function setUpdateCode(string $updateCode): TrackingResult
    {
        $this->updateCode = $updateCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdateDescription(): string
    {
        return $this->updateDescription;
    }

    /**
     * @param string $updateDescription
     * @return $this
     */
    public function setUpdateDescription(string $updateDescription): TrackingResult
    {
        $this->updateDescription = $updateDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdateDateTime(): string
    {
        return $this->updateDateTime;
    }

    /**
     * @param string $updateDateTime
     * @return $this
     */
    public function setUpdateDateTime(string $updateDateTime): TrackingResult
    {
        $this->updateDateTime = $updateDateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdateLocation(): string
    {
        return $this->updateLocation;
    }

    /**
     * @param string $updateLocation
     * @return $this
     */
    public function setUpdateLocation(string $updateLocation): TrackingResult
    {
        $this->updateLocation = $updateLocation;
        return $this;
    }

    /**
     * @return string
     */
    public function getComments(): ?string
    {
        return $this->comments;
    }

    /**
     * @param string $comments
     * @return $this
     */
    public function setComments(string $comments): TrackingResult
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return string
     */
    public function getProblemCode(): ?string
    {
        return $this->problemCode;
    }

    /**
     * @param string $problemCode
     * @return $this
     */
    public function setProblemCode(string $problemCode): TrackingResult
    {
        $this->problemCode = $problemCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getGrossWeight(): ?string
    {
        return $this->grossWeight;
    }

    /**
     * @param string $grossWeight
     * @return $this
     */
    public function setGrossWeight(string $grossWeight): TrackingResult
    {
        $this->grossWeight = $grossWeight;
        return $this;
    }

    /**
     * @return string
     */
    public function getChargeableWeight(): ?string
    {
        return $this->chargeableWeight;
    }

    /**
     * @param string $chargeableWeight
     * @return $this
     */
    public function setChargeableWeight(string $chargeableWeight): TrackingResult
    {
        $this->chargeableWeight = $chargeableWeight;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeightUnit(): ?string
    {
        return $this->weightUnit;
    }

    /**
     * @param string $weightUnit
     * @return $this
     */
    public function setWeightUnit(string $weightUnit): TrackingResult
    {
        $this->weightUnit = $weightUnit;
        return $this;
    }

    /**
     * @param object $obj
     * @return TrackingResult
     */
    public static function parse($obj)
    {
        $obj = $obj->Value->TrackingResult;

        return (new self())
            ->setWaybillNumber($obj->WaybillNumber)
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

    public function normalize(): array
    {
        return [
            'WaybillNumber' => $this->getWaybillNumber(),
            'UpdateCode' => $this->getUpdateCode(),
            'UpdateDescription' => $this->getUpdateDescription(),
            'UpdateDateTime' => $this->getUpdateDateTime(),
            'UpdateLocation' => $this->getUpdateLocation(),
            'Comments' => $this->getComments(),
            'ProblemCode' => $this->getProblemCode(),
            'GrossWeight' => $this->getGrossWeight(),
            'ChargeableWeight' => $this->getChargeableWeight(),
            'WeightUnit' => $this->getWeightUnit(),
        ];
    }

}