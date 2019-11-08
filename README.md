# Laravel Aramex

Adds Aramex Functionality to Laravel.

This repo is a rebuild of digitalcloud/aramex.

## Table of Contents

* Installation
* QuickStart
    * Location
        * Fetch Countries
        * Fetch Country
        * Fetch States
        * Fetch Cities
        * Validate Address
    * Rate
        * Calculate Rate
    * Shipping
        * Create Pickup
        * Cancel Pickup
        * Create Shipments
        * Get Last Shipments Numbers Range
        * Print Label
        * Reserve Shipment Number Range
        * Schedule Delivery
    * Tracking
        * Track Pickup
        * Track Shipments

## Installation

Run the following command to install the latest applicable version of the package: 
    
    composer require extremesa/aramex

## QuickStart

### Location

#### Fetch Countries
This method allows users to get the world countries list.

    Aramex::FetchCountries()->make();

#### Fetch Country
This method allows users to get details of a certain country. 

    Aramex::FetchCountry()->make();

#### Fetch States
This method allows users to get all the states within a certain country (country code).

    Aramex::FetchStates()->make();

#### Fetch Cities
This method allows users to get all the cities within a certain country (country code). And allows users to get list of the cities that start with a specific prefix. The required nodes to be filled are Client Info and Country Code. 

    Aramex::FetchCities()->make();

#### Validate Address
This method Allows users to search for certain addresses and make sure that the address structure is correct. 
 
    Aramex::ValidateAddress()->make();

### Rate

#### Calculate Rate
This method allows users to get rate for source/destinations shipment.

    Aramex::CalculateRate()->make();

### Shipping

#### Create Pickup
This method allows users to create a pickup request.

    Aramex::CreatePickup()->make();

#### Cancel Pickup
This method allows you to cancel a pickup as long as it is un-assigned or pending details.

    Aramex::CancelPickup()->make();

#### Create Shipments
This method allows users to create shipments on Aramex’s system.

    Aramex::CreateShipments()->make();

#### Get Last Shipments Numbers Range
This method allows you to inquire about the last reserved range using a specific entity and product group

    Aramex::GetLastShipmentsNumbersRange()->make();

#### Print Label
This method allows the user to print a label for an existing shipment.

    Aramex::PrintLabel()->make();

#### Reserve Shipment Number Range
This method allows you to reserve a range of shipment numbers.

    Aramex::ReserveShipmentNumberRange()->make();

#### Schedule Delivery
This method allows you to schedule the delivery of a shipment at a specified time and place (Longitude and Latitude)

    Aramex::ScheduleDelivery()->make();

### Tracking

#### Track Pickup
This method allows the user to track an existing pickup’s updates and latest status.

    Aramex::TrackPickup()->make();

#### Track Shipments
This method allows the user to track an existing shipment’s updates and latest status.

    Aramex::TrackShipments()->make();

