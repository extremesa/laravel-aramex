# Laravel Aramex

Adds Aramex Functionality to Laravel.

This repo is a rebuild of digitalcloud/aramex.

## Table of Contents

* Installation
* QuickStart
    * Location
    * Rate
    * Shipping
    * Tracking

## Installation

Run the following command to install the latest applicable version of the package: 
    
    composer require extremesa/aramex

## QuickStart

### Location

#### Fetch Countries

    Aramex::FetchCountries()->make();

#### Fetch Country

    Aramex::FetchCountry()->make();

#### Fetch States

    Aramex::FetchStates()->make();

#### Fetch Cities

    Aramex::FetchCities()->make();

#### Validate Address

    Aramex::ValidateAddress()->make();

### Rate

### Calculate Rate

    Aramex::CalculateRate()->make();

### Shipping

#### Create Pickup

    Aramex::CreatePickup()->make();

#### Cancel Pickup

    Aramex::CancelPickup()->make();

#### Create Shipments

    Aramex::CreateShipments()->make();

#### Get Last Shipments Numbers Range

    Aramex::GetLastShipmentsNumbersRange()->make();

#### Print Label

    Aramex::PrintLabel()->make();

#### Reserve Shipment Number Range

    Aramex::ReserveShipmentNumberRange()->make();

#### Schedule Delivery

    Aramex::ScheduleDelivery()->make();

### Tracking

#### Track Pickup

    Aramex::TrackPickup()->make();

#### Track Shipments

    Aramex::TrackShipments()->make();

