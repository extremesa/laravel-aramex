<?php


namespace ExtremeSa\Aramex\API\Classes;

use ExtremeSa\Aramex\API\Interfaces\Normalize;

/**
 * Depending on the method chosen, certain elements are required and others optional.
 * Shipment Creation:
 * Required – Person Name, Company Name, Phone Number1, and Email Address.
 *
 * Pickup Creation:
 * Required – Person Name, Company Name, Phone Number1, and Cell Phone.
 *
 * Class Contact
 * @package ExtremeSa\Aramex\API\Classes
 */
class Contact implements Normalize
{
    private $department;
    private $personName;
    private $title;
    private $companyName;
    private $phoneNumber1;
    private $phoneNumber1Ext;
    private $phoneNumber2;
    private $phoneNumber2Ext;
    private $faxNumber;
    private $cellPhone;
    private $emailAddress;
    private $type;

    /**
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * User’s Work Department
     * @param string $department
     * @return $this
     */
    public function setDepartment(string $department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return string
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * User’s Name, Sent By or in the case of the consignee, to the Attention of.
     * @param string $personName
     * @return $this
     */
    public function setPersonName(string $personName)
    {
        $this->personName = $personName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * User’s Title
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Company or Person name.
     * @param string $companyName
     * @return $this
     */
    public function setCompanyName(string $companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber1()
    {
        return $this->phoneNumber1;
    }

    /**
     * Valid Phone Number
     * @param string $phoneNumber1
     * @return $this
     */
    public function setPhoneNumber1(string $phoneNumber1)
    {
        $this->phoneNumber1 = $phoneNumber1;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber1Ext()
    {
        return $this->phoneNumber1Ext;
    }

    /**
     * Valid Extension to the phone number.
     * @param string $phoneNumber1Ext
     * @return $this
     */
    public function setPhoneNumber1Ext(string $phoneNumber1Ext)
    {
        $this->phoneNumber1Ext = $phoneNumber1Ext;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber2()
    {
        return $this->phoneNumber2;
    }

    /**
     * Valid Phone Number
     * @param string $phoneNumber2
     * @return $this
     */
    public function setPhoneNumber2(string $phoneNumber2)
    {
        $this->phoneNumber2 = $phoneNumber2;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber2Ext()
    {
        return $this->phoneNumber2Ext;
    }

    /**
     * Valid Extension to the phone number.
     * @param string $phoneNumber2Ext
     * @return $this
     */
    public function setPhoneNumber2Ext(string $phoneNumber2Ext)
    {
        $this->phoneNumber2Ext = $phoneNumber2Ext;
        return $this;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * Fax Number
     * @param string $faxNumber
     * @return $this
     */
    public function setFaxNumber(string $faxNumber)
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCellPhone()
    {
        return $this->cellPhone;
    }

    /**
     * Cell Phone Number
     * @param string $cellPhone
     * @return $this
     */
    public function setCellPhone(string $cellPhone)
    {
        $this->cellPhone = $cellPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Email Address
     * @param string $emailAddress
     * @return $this
     */
    public function setEmailAddress(string $emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type)
    {
        $this->type = $type;
        return $this;
    }

    public function normalize(): array
    {
        return [
            'Department' => $this->getDepartment(),
            'PersonName' => $this->getPersonName(),
            'Title' => $this->getTitle(),
            'CompanyName' => $this->getCompanyName(),
            'PhoneNumber1' => $this->getPhoneNumber1(),
            'PhoneNumber1Ext' => $this->getPhoneNumber1Ext(),
            'PhoneNumber2' => $this->getPhoneNumber2(),
            'PhoneNumber2Ext' => $this->getPhoneNumber2Ext(),
            'FaxNumber' => $this->getFaxNumber(),
            'CellPhone' => $this->getCellPhone(),
            'EmailAddress' => $this->getEmailAddress(),
            'Type' => $this->getType()
        ];
    }
}