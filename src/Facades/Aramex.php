<?php

namespace ExtremeSa\Aramex\Facades;

use ExtremeSa\Aramex\API\Requests\Location\FetchCities;
use ExtremeSa\Aramex\API\Requests\Location\FetchCountries;
use ExtremeSa\Aramex\API\Requests\Location\FetchCountry;
use ExtremeSa\Aramex\API\Requests\Location\FetchDropOffLocations;
use ExtremeSa\Aramex\API\Requests\Location\FetchOffices;
use ExtremeSa\Aramex\API\Requests\Location\FetchStates;
use ExtremeSa\Aramex\API\Requests\Location\ValidateAddress;
use ExtremeSa\Aramex\API\Requests\Rate\CalculateRate;
use ExtremeSa\Aramex\API\Requests\Shipping\CancelPickup;
use ExtremeSa\Aramex\API\Requests\Shipping\CreatePickup;
use ExtremeSa\Aramex\API\Requests\Shipping\CreateShipments;
use ExtremeSa\Aramex\API\Requests\Shipping\GetLastShipmentsNumbersRange;
use ExtremeSa\Aramex\API\Requests\Shipping\PrintLabel;
use ExtremeSa\Aramex\API\Requests\Shipping\ReserveShipmentNumberRange;
use ExtremeSa\Aramex\API\Requests\Shipping\ScheduleDelivery;
use ExtremeSa\Aramex\API\Requests\Tracking\TrackPickup;
use ExtremeSa\Aramex\API\Requests\Tracking\TrackShipments;
use Illuminate\Support\Facades\Facade;

/**
 * Class Aramex
 * @package ExtremeSa\Aramex
 *
 * @method static FetchCities fetchCities
 * @method static FetchCountries fetchCountries
 * @method static FetchCountry fetchCountry
 * @method static FetchDropOffLocations fetchDropOffLocations
 * @method static FetchOffices fetchOffices
 * @method static FetchStates fetchStates
 * @method static ValidateAddress validateAddress
 * @method static CalculateRate calculateRate
 * @method static CancelPickup cancelPickup
 * @method static CreatePickup createPickup
 * @method static CreateShipments createShipments
 * @method static GetLastShipmentsNumbersRange getLastShipmentsNumbersRange
 * @method static PrintLabel printLabel
 * @method static ReserveShipmentNumberRange reserveShipmentNumberRange
 * @method static ScheduleDelivery scheduleDelivery
 * @method static TrackPickup trackPickup
 * @method static TrackShipments trackShipments
 */
class Aramex extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Aramex::class;
    }
}