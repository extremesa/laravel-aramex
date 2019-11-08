<?php

namespace ExtremeSa\Aramex\API\Response\Location;

use ExtremeSa\Aramex\API\Classes\Address;
use ExtremeSa\Aramex\API\Classes\Office;
use ExtremeSa\Aramex\API\Response\Response;

class OfficesFetchingResponse extends Response
{

    private $offices;

    /**
     * @return Office
     */
    public function getOffices(): array
    {
        return $this->offices;
    }

    /**
     * @param Office[] $offices
     * @return $this
     */
    public function setOffices(array $offices): OfficesFetchingResponse
    {
        $this->offices = $offices;
        return $this;
    }

    /**
     * @param Office $office
     * @return $this
     */
    public function addOffice(Office $office): OfficesFetchingResponse
    {
        $this->offices[] = $office;
        return $this;
    }

    /**
     * @param object $obj
     * @return self
     */
    protected function parse($obj)
    {
        parent::parse($obj);

        if (is_array($obj->Offices->Office)) {

            foreach ($obj->Offices->Office as $office) {

                if (property_exists($office, 'Address')) {
                    $addressObj = $office->Address;

                    $officeAddress = new Address();
                    $officeAddress
                        ->setLine1($addressObj->Line1)
                        ->setLine2($addressObj->Line2)
                        ->setLine3($addressObj->Line3)
                        ->setCity($addressObj->City)
                        ->setStateOrProvinceCode($addressObj->StateOrProvinceCode)
                        ->setPostCode($addressObj->PostCode)
                        ->setCountryCode($addressObj->CountryCode)
                        ->setLongitude($addressObj->Longitude)
                        ->setLatitude($addressObj->Latitude)
                        ->setBuildingNumber($addressObj->BuildingNumber)
                        ->setBuildingName($addressObj->BuildingName)
                        ->setFloor($addressObj->Floor)
                        ->setApartment($addressObj->Apartment)
                        ->setPOBox($addressObj->POBox)
                        ->setDescription($addressObj->Description);
                }

                $officeObject = (new Office())
                    ->setEntity($office->Entity)
                    ->setEntityDescription($office->EntityDescription)
                    ->setOfficeType($office->OfficeType)
                    ->setTelephone($office->Telephone)
                    ->setWorkingDays($office->WorkingDays)
                    ->setWorkingHours($office->WorkingHours)
                    ->setLongtitude($office->Longtitude)
                    ->setLatitude($office->Latitude);

                if (isset($addressObj)) {
                    $officeObject->setAddress($officeAddress);
                }


                $this->addOffice($officeObject);
            }
        }

        return $this;
    }

    public function objectToObject($instance, $className)
    {
        return unserialize(sprintf(
            'O:%d:"%s"%s',
            strlen($className),
            $className,
            strstr(strstr(serialize($instance), '"'), ':')
        ));
    }

    /**
     * @param object $obj
     * @return OfficesFetchingResponse
     */
    public static function make($obj)
    {
        return (new self())->parse($obj);
    }
}