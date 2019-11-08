<?php


namespace ExtremeSa\Aramex\API\Classes;

use ExtremeSa\Aramex\API\Interfaces\Normalize;

/**
 * Fields – Entity, Entity  Description, Office Type, Address, Telephone, Working Hours, Working Days, Longitude, Latitude.
 *
 * Class Address
 * @package ExtremeSa\Aramex\API\Classes
 */
class Office implements Normalize
{
    private $entity;
    private $entityDescription;
    private $officeType;
    private $address;
    private $telephone;
    private $workingDays;
    private $workingHours;
    private $longtitude;
    private $latitude;

    /**
     * @return string
     */
    public function getEntity(): string
    {
        return $this->entity;
    }

    /**
     * @param string $entity
     * @return Office
     */
    public function setEntity(string $entity): Office
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntityDescription(): string
    {
        return $this->entityDescription;
    }

    /**
     * @param string $entityDescription
     * @return Office
     */
    public function setEntityDescription(string $entityDescription): Office
    {
        $this->entityDescription = $entityDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getOfficeType(): string
    {
        return $this->officeType;
    }

    /**
     * @param string $officeType
     * @return Office
     */
    public function setOfficeType(string $officeType): Office
    {
        $this->officeType = $officeType;
        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     * @return Office
     */
    public function setAddress(Address $address): Office
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * @param string|null $telephone
     * @return Office
     */
    public function setTelephone(?string $telephone): Office
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkingDays(): string
    {
        return $this->workingDays;
    }

    /**
     * @param string $workingDays
     * @return Office
     */
    public function setWorkingDays(string $workingDays): Office
    {
        $this->workingDays = $workingDays;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkingHours(): string
    {
        return $this->workingHours;
    }

    /**
     * @param string $workingHours
     * @return Office
     */
    public function setWorkingHours(string $workingHours): Office
    {
        $this->workingHours = $workingHours;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getLongtitude(): ?float
    {
        return $this->longtitude;
    }

    /**
     * @param mixed $longtitude
     * @return Office
     */
    public function setLongtitude(float $longtitude): Office
    {
        $this->longtitude = $longtitude;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return Office
     */
    public function setLatitude(float $latitude): Office
    {
        $this->latitude = $latitude;
        return $this;
    }


    public function normalize(): array
    {
        return [
            'Code' => $this->getCode(),
        ];
    }
}