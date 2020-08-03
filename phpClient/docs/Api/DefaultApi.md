# Swagger\Client\DefaultApi

All URIs are relative to *https://demo.fareharbor.com/api/external/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bookingTour**](DefaultApi.md#bookingtour) | **POST** /companies/{company-short-name}/availabilities/{availability-id}/bookings/ | Booking tour
[**companiesCompanyShortNameBookingsBookingIdDelete**](DefaultApi.md#companiescompanyshortnamebookingsbookingiddelete) | **DELETE** /companies/{company-short-name}/bookings/{booking-id}/ | Cancel a booking
[**getBookingDetail**](DefaultApi.md#getbookingdetail) | **GET** /companies/{company-short-name}/bookings/{booking-id}/ | Get booking details
[**getCompanies**](DefaultApi.md#getcompanies) | **GET** /companies/ | Get companies
[**getCompanyItems**](DefaultApi.md#getcompanyitems) | **GET** /companies/{company-short-name}/items/ | Get company tours
[**getDetailAvailabilityTour**](DefaultApi.md#getdetailavailabilitytour) | **GET** /companies/{company-short-name}/availabilities/{availability-id}/ | Get availability tour
[**getToursByDateRange**](DefaultApi.md#gettoursbydaterange) | **GET** /companies/{company-short-name}/items/{tour-id}/minimal/availabilities/date-range/{start-date}/{end-date}/ | Get company tours by date range
[**getToursOnDate**](DefaultApi.md#gettoursondate) | **GET** /companies/{company-short-name}/items/{tour-id}/minimal/availabilities/date/{date}/ | Get tours for date
[**validateBookingTour**](DefaultApi.md#validatebookingtour) | **POST** /companies/{company-short-name}/availabilities/{availability-id}/bookings/validate/ | Validate bookings

# **bookingTour**
> \Swagger\Client\Model\BookingResponse bookingTour($company_short_name, $availability_id, $body)

Booking tour

create booking; isset(rebooking param) ? rebooking :booking

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
    $result = $apiInstance->bookingTour($company_short_name, $availability_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->bookingTour: ', $e->getMessage(), PHP_EOL;
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

# **companiesCompanyShortNameBookingsBookingIdDelete**
> \Swagger\Client\Model\AvailabilitiesList companiesCompanyShortNameBookingsBookingIdDelete($company_short_name, $booking_id)

Cancel a booking

Cancel a booking

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

# **getBookingDetail**
> \Swagger\Client\Model\AvailabilitiesList getBookingDetail($company_short_name, $booking_id)

Get booking details

Retrieve details for a specific booking

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
    $result = $apiInstance->getBookingDetail($company_short_name, $booking_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBookingDetail: ', $e->getMessage(), PHP_EOL;
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

# **getCompanies**
> \Swagger\Client\Model\CompaniesList getCompanies()

Get companies

The response provides the list of partner companies that Meine Landausfluege has access to in FareHarbor.

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
    $result = $apiInstance->getCompanies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCompanies: ', $e->getMessage(), PHP_EOL;
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

# **getCompanyItems**
> \Swagger\Client\Model\ToursList getCompanyItems($company_short_name)

Get company tours

The response provides the list of items that Meine Landausfluege can book for Sweden Walking Tours.

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
    $result = $apiInstance->getCompanyItems($company_short_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCompanyItems: ', $e->getMessage(), PHP_EOL;
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

# **getDetailAvailabilityTour**
> \Swagger\Client\Model\AvailabilitiesList getDetailAvailabilityTour($company_short_name, $availability_id)

Get availability tour

The response provides details for availability 21198329 (Sweden Walking Tours).

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
    $result = $apiInstance->getDetailAvailabilityTour($company_short_name, $availability_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getDetailAvailabilityTour: ', $e->getMessage(), PHP_EOL;
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

# **getToursByDateRange**
> \Swagger\Client\Model\AvailabilitiesList getToursByDateRange($company_short_name, $tour_id, $start_date, $end_date)

Get company tours by date range

The response provides the list of bookable availabilities for 05August2020 through 07August2020 for item 27550 (Sweden Walking Tours). A date range that occurs in the future should be specified.

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
    $result = $apiInstance->getToursByDateRange($company_short_name, $tour_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getToursByDateRange: ', $e->getMessage(), PHP_EOL;
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

# **getToursOnDate**
> \Swagger\Client\Model\AvailabilitiesList getToursOnDate($company_short_name, $tour_id, $date)

Get tours for date

The response provides the list of bookable availabilities on 05August2020 for item 27550 (Sweden Walking Tours).A date that occurs in the future should be specified.

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
    $result = $apiInstance->getToursOnDate($company_short_name, $tour_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getToursOnDate: ', $e->getMessage(), PHP_EOL;
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

# **validateBookingTour**
> \Swagger\Client\Model\BookingValidateResponse validateBookingTour($company_short_name, $availability_id, $body)

Validate bookings

Prior to creating a booking, the validate endpoint provides a means to validate a booking request.

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
    $result = $apiInstance->validateBookingTour($company_short_name, $availability_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->validateBookingTour: ', $e->getMessage(), PHP_EOL;
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

