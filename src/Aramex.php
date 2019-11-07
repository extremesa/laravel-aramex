<?php

namespace ExtremeSa\Aramex;

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

class Aramex
{
    // Location
    public static function FetchCities()
    {
        return new FetchCities();
    }

    public static function FetchCountries()
    {
        return new FetchCountries();
    }

    public static function FetchCountry()
    {
        return new FetchCountry();
    }

    public static function FetchDropOffLocations()
    {
        return new FetchDropOffLocations();
    }

    public static function FetchOffices()
    {
        return new FetchOffices();
    }

    public static function FetchStates()
    {
        return new FetchStates();
    }

    public static function ValidateAddress()
    {
        return new ValidateAddress();
    }

    // Rate
    public static function CalculateRate()
    {
        return new CalculateRate();
    }

    // Shipping
    public static function CancelPickup()
    {
        return new CancelPickup();
    }

    public static function CreatePickup()
    {
        return new CreatePickup();
    }

    public static function CreateShipments()
    {
        return new CreateShipments();
    }

    public static function GetLastShipmentsNumbersRange()
    {
        return new GetLastShipmentsNumbersRange();
    }

    public static function PrintLabel()
    {
        return new PrintLabel();
    }

    public static function ReserveShipmentNumberRange()
    {
        return new ReserveShipmentNumberRange();
    }

    public static function ScheduleDelivery()
    {
        return new ScheduleDelivery();
    }

    // Traching
    public static function TrackPickup()
    {
        return new TrackPickup();
    }

    public static function TrackShipments()
    {
        return new TrackShipments();
    }
}