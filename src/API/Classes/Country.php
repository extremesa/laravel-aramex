<?php


namespace ExtremeSa\Aramex\API\Classes;

use ExtremeSa\Aramex\API\Interfaces\Normalize;

/**
 * Required – None.
 *
 * Class Address
 * @package ExtremeSa\Aramex\API\Classes
 */
class Country implements Normalize
{
    private $code;
    private $name;
    private $isoCode;
    private $stateRequired = false;
    private $postCodeRequired = false;
    private $postCodeRegex;
    private $internationalCallingNumber;

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     * @return Country
     */
    public function setCode(string $code): Country
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return Country
     */
    public function setName(string $name): Country
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIsoCode(): ?string
    {
        return $this->isoCode;
    }

    /**
     * @param string|null $isoCode
     * @return Country
     */
    public function setIsoCode(string $isoCode): Country
    {
        $this->isoCode = $isoCode;
        return $this;
    }

    /**
     * @return bool - defaukt: false
     */
    public function getStateRequired(): bool
    {
        return $this->stateRequired;
    }

    /**
     * @param bool $stateRequired
     * @return Country
     */
    public function setStateRequired(bool $stateRequired): Country
    {
        $this->stateRequired = $stateRequired;
        return $this;
    }

    /**
     * @return bool - defaukt: false
     */
    public function getPostCodeRequired(): bool
    {
        return $this->postCodeRequired;
    }

    /**
     * @param bool $postCodeRequired
     * @return Country
     */
    public function setPostCodeRequired(bool $postCodeRequired): Country
    {
        $this->postCodeRequired = $postCodeRequired;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getPostCodeRegex(): ?array
    {
        return $this->postCodeRegex;
    }

    /**
     * @param array $postCodeRegex
     * todo
     * @return Country
     */
    public function setPostCodeRegex(array $postCodeRegex): Country
    {
        $this->postCodeRegex = $postCodeRegex;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInternationalCallingNumber(): ?string
    {
        return $this->internationalCallingNumber;
    }

    /**
     * @param string|null $internationalCallingNumber
     * @return Country
     */
    public function setInternationalCallingNumber(string $internationalCallingNumber): Country
    {
        $this->internationalCallingNumber = $internationalCallingNumber;
        return $this;
    }

    public function normalize(): array
    {
        return [
            'Code' => $this->getCode(),
            'Name' => $this->getName(),
            'IsoCode' => $this->getIsoCode(),
            'StateRequired' => $this->getStateRequired(),
            'PostCodeRequired' => $this->getPostCodeRequired(),
            'PostCodeRegex' => $this->getPostCodeRegex(),
            'InternationalCallingNumber' => $this->getInternationalCallingNumber(),
        ];
    }
}