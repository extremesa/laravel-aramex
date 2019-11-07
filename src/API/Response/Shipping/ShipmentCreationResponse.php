<?php

namespace ExtremeSa\Aramex\API\Response\Shipping;

use ExtremeSa\Aramex\API\Classes\Notification;
use ExtremeSa\Aramex\API\Classes\Shipment;
use ExtremeSa\Aramex\API\Response\Response;

/**
 * Informs the user on the status of their submitted shipment.
 * Success = an AWB number is supplied
 * Failure = an error message specifically states the location of the error and its nature.
 * The Transaction Parameter is sent as filled in the request for identification purposes.
 *
 * Class ShipmentCreationResponse
 * @package ExtremeSa\Aramex\API\Response
 */
class ShipmentCreationResponse extends Response
{
    private $shipments;

    /**
     * @return Shipment[]
     */
    public function getShipments(): array
    {
        return $this->shipments;
    }


    public function setShipments(array $shipments): ShipmentCreationResponse
    {
        $this->shipments = $shipments;
        return $this;
    }

    /**
     * @param object $obj
     * @return self
     */
    protected function parse($obj)
    {
        parent::parse($obj);

        if ($obj->Shipments->ProcessedShipment->Notifications) {
            $newNotifications = Notification::parseArray($obj->Shipments->ProcessedShipment->Notifications);
            if ($newNotifications) {
                $this->setHasErrors(true)
                    ->addNotifications($newNotifications);
            }
        }

        $this->setShipments([$obj->Shipments->ProcessedShipment]);

        return $this;
    }

    /**
     * @param object $obj
     * @return ShipmentCreationResponse
     */
    public static function make($obj)
    {
        return (new self())->parse($obj);
    }
}