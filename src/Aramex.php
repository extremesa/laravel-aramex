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
    public static function fetchCities()
    {
        return new FetchCities();
    }

    public static function fetchCountries()
    {
        return new FetchCountries();
    }

    public static function fetchCountry()
    {
        return new FetchCountry();
    }

    public static function fetchDropOffLocations()
    {
        return new FetchDropOffLocations();
    }

    public static function fetchOffices()
    {
        return new FetchOffices();
    }

    public static function fetchStates()
    {
        return new FetchStates();
    }

    public static function validateAddress()
    {
        return new ValidateAddress();
    }

    // Rate
    public static function calculateRate()
    {
        return new CalculateRate();
    }

    // Shipping
    public static function cancelPickup()
    {
        return new CancelPickup();
    }

    public static function createPickup()
    {
        return new CreatePickup();
    }

    public static function createShipments()
    {
        return new CreateShipments();
    }

    public static function getLastShipmentsNumbersRange()
    {
        return new GetLastShipmentsNumbersRange();
    }

    public static function printLabel()
    {
        return new PrintLabel();
    }

    public static function reserveShipmentNumberRange()
    {
        return new ReserveShipmentNumberRange();
    }

    public static function scheduleDelivery()
    {
        return new ScheduleDelivery();
    }

    // Tracking
    public static function trackPickup()
    {
        return new TrackPickup();
    }

    public static function trackShipments()
    {
        return new TrackShipments();
    }
}