# Swagger\Client\DefaultApi

All URIs are relative to *https://demo.fareharbor.com/api/external/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companiesCompanyShortNameAvailabilitiesAvailabilityIdBookingsPost**](DefaultApi.md#companiescompanyshortnameavailabilitiesavailabilityidbookingspost) | **POST** /companies/{company-short-name}/availabilities/{availability-id}/bookings/ | booking
[**companiesCompanyShortNameAvailabilitiesAvailabilityIdBookingsValidatePost**](DefaultApi.md#companiescompanyshortnameavailabilitiesavailabilityidbookingsvalidatepost) | **POST** /companies/{company-short-name}/availabilities/{availability-id}/bookings/validate/ | check bookings
[**companiesCompanyShortNameAvailabilitiesAvailabilityIdGet**](DefaultApi.md#companiescompanyshortnameavailabilitiesavailabilityidget) | **GET** /companies/{company-short-name}/availabilities/{availability-id}/ | get availability tour
[**companiesCompanyShortNameBookingsBookingIdDelete**](DefaultApi.md#companiescompanyshortnamebookingsbookingiddelete) | **DELETE** /companies/{company-short-name}/bookings/{booking-id}/ | get availability tour
[**companiesCompanyShortNameBookingsBookingIdGet**](DefaultApi.md#companiescompanyshortnamebookingsbookingidget) | **GET** /companies/{company-short-name}/bookings/{booking-id}/ | get availability tour
[**companiesCompanyShortNameItemsGet**](DefaultApi.md#companiescompanyshortnameitemsget) | **GET** /companies/{company-short-name}/items/ | get company tours
[**companiesCompanyShortNameItemsTourIdMinimalAvailabilitiesDateDateGet**](DefaultApi.md#companiescompanyshortnameitemstouridminimalavailabilitiesdatedateget) | **GET** /companies/{company-short-name}/items/{tour-id}/minimal/availabilities/date/{date}/ | get company tours
[**companiesCompanyShortNameItemsTourIdMinimalAvailabilitiesDateRangeStartDateEndDateGet**](DefaultApi.md#companiescompanyshortnameitemstouridminimalavailabilitiesdaterangestartdateenddateget) | **GET** /companies/{company-short-name}/items/{tour-id}/minimal/availabilities/date-range/{start-date}/{end-date}/ | get company tours
[**companiesGet**](DefaultApi.md#companiesget) | **GET** /companies/ | Get companies

# **companiesCompanyShortNameAvailabilitiesAvailabilityIdBookingsPost**
> \Swagger\Client\Model\BookingResponse companiesCompanyShortNameAvailabilitiesAvailabilityIdBookingsPost($company_short_name, $availability_id, $body)

booking

isset(rebooking param) ? rebooking :booking

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiApp
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-App', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-App', 'Bearer');// Configure API key authorization: apiUser
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_short_name** | **string**| Company short name |
 **availability_id** | **int**| Availability id |
 **body** | [**\Swagger\Client\Model\Booking**](../Model/Booking.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BookingResponse**](../Model/BookingResponse.md)

### Authorization

[apiApp](../../README.md#apiApp), [apiUser](../../README.md#apiUser)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companiesCompanyShortNameAvailabilitiesAvailabilityIdBookingsValidatePost**
> \Swagger\Client\Model\BookingValidateResponse companiesCompanyShortNameAvailabilitiesAvailabilityIdBookingsValidatePost($company_short_name, $availability_id, $body)

check bookings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiApp
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-App', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-App', 'Bearer');// Configure API key authorization: apiUser
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_short_name** | **string**| Company short name |
 **availability_id** | **int**| Availability id |
 **body** | [**\Swagger\Client\Model\Booking**](../Model/Booking.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BookingValidateResponse**](../Model/BookingValidateResponse.md)

### Authorization

[apiApp](../../README.md#apiApp), [apiUser](../../README.md#apiUser)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companiesCompanyShortNameAvailabilitiesAvailabilityIdGet**
> \Swagger\Client\Model\AvailabilitiesList companiesCompanyShortNameAvailabilitiesAvailabilityIdGet($company_short_name, $availability_id)

get availability tour

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiApp
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-App', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-App', 'Bearer');// Configure API key authorization: apiUser
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_short_name** | **string**| Company short name |
 **availability_id** | **int**| Availability id |

### Return type

[**\Swagger\Client\Model\AvailabilitiesList**](../Model/AvailabilitiesList.md)

### Authorization

[apiApp](../../README.md#apiApp), [apiUser](../../README.md#apiUser)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companiesCompanyShortNameBookingsBookingIdDelete**
> \Swagger\Client\Model\AvailabilitiesList companiesCompanyShortNameBookingsBookingIdDelete($company_short_name, $booking_id)

get availability tour

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiApp
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-App', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-App', 'Bearer');// Configure API key authorization: apiUser
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_short_name** | **string**| Company short name |
 **booking_id** | **string**| Booking id |

### Return type

[**\Swagger\Client\Model\AvailabilitiesList**](../Model/AvailabilitiesList.md)

### Authorization

[apiApp](../../README.md#apiApp), [apiUser](../../README.md#apiUser)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companiesCompanyShortNameBookingsBookingIdGet**
> \Swagger\Client\Model\AvailabilitiesList companiesCompanyShortNameBookingsBookingIdGet($company_short_name, $booking_id)

get availability tour

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiApp
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-App', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-App', 'Bearer');// Configure API key authorization: apiUser
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_short_name** | **string**| Company short name |
 **booking_id** | **string**| Booking id |

### Return type

[**\Swagger\Client\Model\AvailabilitiesList**](../Model/AvailabilitiesList.md)

### Authorization

[apiApp](../../README.md#apiApp), [apiUser](../../README.md#apiUser)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companiesCompanyShortNameItemsGet**
> \Swagger\Client\Model\ToursList companiesCompanyShortNameItemsGet($company_short_name)

get company tours

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiApp
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-App', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-App', 'Bearer');// Configure API key authorization: apiUser
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_short_name** | **string**| Company short name |

### Return type

[**\Swagger\Client\Model\ToursList**](../Model/ToursList.md)

### Authorization

[apiApp](../../README.md#apiApp), [apiUser](../../README.md#apiUser)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companiesCompanyShortNameItemsTourIdMinimalAvailabilitiesDateDateGet**
> \Swagger\Client\Model\AvailabilitiesList companiesCompanyShortNameItemsTourIdMinimalAvailabilitiesDateDateGet($company_short_name, $tour_id, $date)

get company tours

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiApp
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-App', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-App', 'Bearer');// Configure API key authorization: apiUser
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_short_name** | **string**| Company short name |
 **tour_id** | **int**| Tour id |
 **date** | **string**| Date |

### Return type

[**\Swagger\Client\Model\AvailabilitiesList**](../Model/AvailabilitiesList.md)

### Authorization

[apiApp](../../README.md#apiApp), [apiUser](../../README.md#apiUser)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companiesCompanyShortNameItemsTourIdMinimalAvailabilitiesDateRangeStartDateEndDateGet**
> \Swagger\Client\Model\AvailabilitiesList companiesCompanyShortNameItemsTourIdMinimalAvailabilitiesDateRangeStartDateEndDateGet($company_short_name, $tour_id, $start_date, $end_date)

get company tours

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiApp
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-App', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-App', 'Bearer');// Configure API key authorization: apiUser
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_short_name** | **string**| Company short name |
 **tour_id** | **int**| Tour id |
 **start_date** | **string**| Date |
 **end_date** | **string**| Date |

### Return type

[**\Swagger\Client\Model\AvailabilitiesList**](../Model/AvailabilitiesList.md)

### Authorization

[apiApp](../../README.md#apiApp), [apiUser](../../README.md#apiUser)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companiesGet**
> \Swagger\Client\Model\CompaniesList companiesGet()

Get companies

Get companies list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiApp
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-FareHarbor-API-App', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-FareHarbor-API-App', 'Bearer');// Configure API key authorization: apiUser
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

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CompaniesList**](../Model/CompaniesList.md)

### Authorization

[apiApp](../../README.md#apiApp), [apiUser](../../README.md#apiUser)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

