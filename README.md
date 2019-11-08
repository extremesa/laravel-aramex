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

    Aramex::FetchCountry()
        ->setCode('PS')
        ->make();

#### Fetch States
This method allows users to get all the states within a certain country (country code).

    Aramex::FetchStates()
        ->setCountryCode('AE')
        ->make();

#### Fetch Cities
This method allows users to get all the cities within a certain country (country code). And allows users to get list of the cities that start with a specific prefix. The required nodes to be filled are Client Info and Country Code. 

    Aramex::FetchCities()
        ->setCountryCode('AE')
        ->make();

#### Validate Address
This method Allows users to search for certain addresses and make sure that the address structure is correct. 
 
    Aramex::ValidateAddress()
        ->setAddress(
            (new Address()) ...
        )->make()

### Rate

#### Calculate Rate
This method allows users to get rate for source/destinations shipment.

    $source = (new Address()) ... ;

    $destination = (new Address()) ...;

    $details = (new ShipmentDetails()) ...;

    Aramex::CalculateRate()
        ->setOriginalAddress($source)
        ->setDestinationAddress($destination)
        ->setShipmentDetails($details)
        ->setPreferredCurrencyCode('USD')
        ->make();

### Shipping

#### Create Pickup
This method allows users to create a pickup request.

    $source = (new Address());
    
    $contact = (new Contact());
        
    $pickupItem = (new PickupItem());
    
    $pickup = (new Pickup())
        ->setPickupAddress($source)
        ->setPickupContact($contact)
        ->setPickupLocation('Reception')
        ->setPickupDate(Carbon::now()->timestamp)
        ->setReadyTime(Carbon::now()->timestamp)
        ->setLastPickupTime(Carbon::now()->addDay()->timestamp)
        ->setClosingTime(Carbon::now()->addDay()->timestamp)
        ->setStatus('Pending')
        ->setReference1('')
        ->addPickupItem($pickupItem);
        
    $labelInfo = (new LabelInfo())
        ->setReportId(9201)
        ->setReportType('URL');
        
    Aramex::CreatePickup()
        ->setLabelInfo($labelInfo)
        ->setPickup($pickup)
        ->make();

#### Cancel Pickup
This method allows you to cancel a pickup as long as it is un-assigned or pending details.

    Aramex::CancelPickup()
        ->setPickupGUID('PICKUP_GUID')
        ->make();

#### Create Shipments
This method allows users to create shipments on Aramex’s system.

    Aramex::CreateShipments()->make();

#### Get Last Shipments Numbers Range
This method allows you to inquire about the last reserved range using a specific entity and product group

    Aramex::GetLastShipmentsNumbersRange()
        ->setEntity('ENTITY')
        ->setProductGroup('PRODUCT_GROUP')
        ->make();

#### Print Label
This method allows the user to print a label for an existing shipment.

    $labelInfo = (new \ExtremeSa\Aramex\API\Classes\LabelInfo())
        ->setReportId(9201)
        ->setReportType('URL');
        
    Aramex::PrintLabel()
        ->setShipmentNumber('SHIPMENT_NO')
        ->setLabelInfo()
        ->make();

#### Reserve Shipment Number Range
This method allows you to reserve a range of shipment numbers.

    Aramex::ReserveShipmentNumberRange()->make();

#### Schedule Delivery
This method allows you to schedule the delivery of a shipment at a specified time and place (Longitude and Latitude)

    Aramex::ScheduleDelivery()->make();

### Tracking

#### Track Pickup
This method allows the user to track an existing pickup’s updates and latest status.

    Aramex::TrackPickup()
        ->setReference('PICKUP_NO')
        ->setPickup('PICKUP') // any number
        ->track();

#### Track Shipments
This method allows the user to track an existing shipment’s updates and latest status.

    Aramex::TrackShipments()
        ->setShipments(['SHIPMENT_NO'])
        ->make();
        
## Credits

* [Ismail Ashour](https://github.com/drashoor/)
* All Contributors
