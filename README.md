# SwaggerClient-php
This is a simple API

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiApp
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-App', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-App', 'Bearer');
// Configure API key authorization: apiUser
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-User', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-User', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_short_name = "company_short_name_example"; // string | Company short name
$availability_id = 56; // int | Availability id
$body = new \Swagger\Client\Model\Booking(); // \Swagger\Client\Model\Booking | 

try {
    $result = $apiInstance->companiesCompanyShortNameAvailabilitiesAvailabilityIdBookingsPost($company_short_name, $availability_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companiesCompanyShortNameAvailabilitiesAvailabilityIdBookingsPost: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiApp
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-App', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-App', 'Bearer');
// Configure API key authorization: apiUser
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-User', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-User', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_short_name = "company_short_name_example"; // string | Company short name
$availability_id = 56; // int | Availability id
$body = new \Swagger\Client\Model\Booking(); // \Swagger\Client\Model\Booking | 

try {
    $result = $apiInstance->companiesCompanyShortNameAvailabilitiesAvailabilityIdBookingsValidatePost($company_short_name, $availability_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companiesCompanyShortNameAvailabilitiesAvailabilityIdBookingsValidatePost: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiApp
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-App', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-App', 'Bearer');
// Configure API key authorization: apiUser
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-User', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-User', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_short_name = "company_short_name_example"; // string | Company short name
$availability_id = 56; // int | Availability id

try {
    $result = $apiInstance->companiesCompanyShortNameAvailabilitiesAvailabilityIdGet($company_short_name, $availability_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companiesCompanyShortNameAvailabilitiesAvailabilityIdGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiApp
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-App', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-App', 'Bearer');
// Configure API key authorization: apiUser
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-User', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-User', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_short_name = "company_short_name_example"; // string | Company short name
$booking_id = "booking_id_example"; // string | Booking id

try {
    $result = $apiInstance->companiesCompanyShortNameBookingsBookingIdDelete($company_short_name, $booking_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companiesCompanyShortNameBookingsBookingIdDelete: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiApp
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-App', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-App', 'Bearer');
// Configure API key authorization: apiUser
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-User', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-User', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_short_name = "company_short_name_example"; // string | Company short name
$booking_id = "booking_id_example"; // string | Booking id

try {
    $result = $apiInstance->companiesCompanyShortNameBookingsBookingIdGet($company_short_name, $booking_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companiesCompanyShortNameBookingsBookingIdGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiApp
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-App', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-App', 'Bearer');
// Configure API key authorization: apiUser
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-User', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-User', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_short_name = "company_short_name_example"; // string | Company short name

try {
    $result = $apiInstance->companiesCompanyShortNameItemsGet($company_short_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companiesCompanyShortNameItemsGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiApp
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-App', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-App', 'Bearer');
// Configure API key authorization: apiUser
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-User', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-User', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_short_name = "company_short_name_example"; // string | Company short name
$tour_id = 56; // int | Tour id
$date = "date_example"; // string | Date

try {
    $result = $apiInstance->companiesCompanyShortNameItemsTourIdMinimalAvailabilitiesDateDateGet($company_short_name, $tour_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companiesCompanyShortNameItemsTourIdMinimalAvailabilitiesDateDateGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiApp
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-App', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-App', 'Bearer');
// Configure API key authorization: apiUser
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-User', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-User', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_short_name = "company_short_name_example"; // string | Company short name
$tour_id = 56; // int | Tour id
$start_date = "start_date_example"; // string | Date
$end_date = "end_date_example"; // string | Date

try {
    $result = $apiInstance->companiesCompanyShortNameItemsTourIdMinimalAvailabilitiesDateRangeStartDateEndDateGet($company_short_name, $tour_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companiesCompanyShortNameItemsTourIdMinimalAvailabilitiesDateRangeStartDateEndDateGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiApp
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-App', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-App', 'Bearer');
// Configure API key authorization: apiUser
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-User', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-User', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->companiesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://demo.fareharbor.com/api/external/v1/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**companiesCompanyShortNameAvailabilitiesAvailabilityIdBookingsPost**](docs/Api/DefaultApi.md#companiescompanyshortnameavailabilitiesavailabilityidbookingspost) | **POST** /companies/{company-short-name}/availabilities/{availability-id}/bookings/ | booking
*DefaultApi* | [**companiesCompanyShortNameAvailabilitiesAvailabilityIdBookingsValidatePost**](docs/Api/DefaultApi.md#companiescompanyshortnameavailabilitiesavailabilityidbookingsvalidatepost) | **POST** /companies/{company-short-name}/availabilities/{availability-id}/bookings/validate/ | check bookings
*DefaultApi* | [**companiesCompanyShortNameAvailabilitiesAvailabilityIdGet**](docs/Api/DefaultApi.md#companiescompanyshortnameavailabilitiesavailabilityidget) | **GET** /companies/{company-short-name}/availabilities/{availability-id}/ | get availability tour
*DefaultApi* | [**companiesCompanyShortNameBookingsBookingIdDelete**](docs/Api/DefaultApi.md#companiescompanyshortnamebookingsbookingiddelete) | **DELETE** /companies/{company-short-name}/bookings/{booking-id}/ | get availability tour
*DefaultApi* | [**companiesCompanyShortNameBookingsBookingIdGet**](docs/Api/DefaultApi.md#companiescompanyshortnamebookingsbookingidget) | **GET** /companies/{company-short-name}/bookings/{booking-id}/ | get availability tour
*DefaultApi* | [**companiesCompanyShortNameItemsGet**](docs/Api/DefaultApi.md#companiescompanyshortnameitemsget) | **GET** /companies/{company-short-name}/items/ | get company tours
*DefaultApi* | [**companiesCompanyShortNameItemsTourIdMinimalAvailabilitiesDateDateGet**](docs/Api/DefaultApi.md#companiescompanyshortnameitemstouridminimalavailabilitiesdatedateget) | **GET** /companies/{company-short-name}/items/{tour-id}/minimal/availabilities/date/{date}/ | get company tours
*DefaultApi* | [**companiesCompanyShortNameItemsTourIdMinimalAvailabilitiesDateRangeStartDateEndDateGet**](docs/Api/DefaultApi.md#companiescompanyshortnameitemstouridminimalavailabilitiesdaterangestartdateenddateget) | **GET** /companies/{company-short-name}/items/{tour-id}/minimal/availabilities/date-range/{start-date}/{end-date}/ | get company tours
*DefaultApi* | [**companiesGet**](docs/Api/DefaultApi.md#companiesget) | **GET** /companies/ | Get companies

## Documentation For Models

 - [AvailabilitiesList](docs/Model/AvailabilitiesList.md)
 - [Availability](docs/Model/Availability.md)
 - [Booking](docs/Model/Booking.md)
 - [BookingContact](docs/Model/BookingContact.md)
 - [BookingResponse](docs/Model/BookingResponse.md)
 - [BookingResponseBooking](docs/Model/BookingResponseBooking.md)
 - [BookingResponseBookingAvailability](docs/Model/BookingResponseBookingAvailability.md)
 - [BookingResponseBookingAvailabilityCustomerTypeRates](docs/Model/BookingResponseBookingAvailabilityCustomerTypeRates.md)
 - [BookingResponseBookingAvailabilityCustomerTypeRatesCustomerPrototype](docs/Model/BookingResponseBookingAvailabilityCustomerTypeRatesCustomerPrototype.md)
 - [BookingResponseBookingAvailabilityCustomerTypeRatesCustomerType](docs/Model/BookingResponseBookingAvailabilityCustomerTypeRatesCustomerType.md)
 - [BookingResponseBookingAvailabilityItem](docs/Model/BookingResponseBookingAvailabilityItem.md)
 - [BookingValidateResponse](docs/Model/BookingValidateResponse.md)
 - [CompaniesList](docs/Model/CompaniesList.md)
 - [Company](docs/Model/Company.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerBookingPrototype](docs/Model/CustomerBookingPrototype.md)
 - [CustomerCheckinStatus](docs/Model/CustomerCheckinStatus.md)
 - [CustomerCustomerTypeRate](docs/Model/CustomerCustomerTypeRate.md)
 - [CustomerPrototype](docs/Model/CustomerPrototype.md)
 - [CustomerType](docs/Model/CustomerType.md)
 - [CustomerTypeRate](docs/Model/CustomerTypeRate.md)
 - [Location](docs/Model/Location.md)
 - [LocationAddress](docs/Model/LocationAddress.md)
 - [Tour](docs/Model/Tour.md)
 - [TourImage](docs/Model/TourImage.md)
 - [ToursList](docs/Model/ToursList.md)

## Documentation For Authorization


## apiApp

- **Type**: API key
- **API key parameter name**: X-FareHarbor-API-App
- **Location**: HTTP header

## apiUser

- **Type**: API key
- **API key parameter name**: X-FareHarbor-API-User
- **Location**: HTTP header


## Author

you@your-company.com

