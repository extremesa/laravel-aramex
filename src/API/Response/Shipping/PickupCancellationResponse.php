<?php

namespace ExtremeSa\Aramex\API\Response\Shipping;

use ExtremeSa\Aramex\API\Response\Response;

/**
 * Informs the user that the pickup was successfully canceled.
 *
 * Class PickupCancellationResponse
 * @package ExtremeSa\Aramex\API\Response\Shipping
 */
class PickupCancellationResponse extends Response
{
    private $message;

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return PickupCancellationResponse
     */
    public function setMessage(string $message): PickupCancellationResponse
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @param object $obj
     * @return self
     */
    protected function parse($obj): PickupCancellationResponse
    {
        parent::parse($obj);

        $this->setMessage($obj->Message);

        return $this;
    }

    /**
     * @param object $obj
     * @return PickupCancellationResponse
     */
    public static function make($obj)
    {
        return (new self())->parse($obj);
    }
}