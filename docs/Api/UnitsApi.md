# CureDAO\Client\UnitsApi

All URIs are relative to *https://v7.curedao.org*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUnitCategories**](UnitsApi.md#getUnitCategories) | **GET** /v3/unitCategories | Get unit categories
[**getUnits**](UnitsApi.md#getUnits) | **GET** /v3/units | Get units
# **getUnitCategories**
> \CureDAO\Client\Model\UnitCategory[] getUnitCategories()

Get unit categories

Get a list of the categories of measurement units such as 'Distance', 'Duration', 'Energy', 'Frequency', 'Miscellany', 'Pressure', 'Proportion', 'Rating', 'Temperature', 'Volume', and 'Weight'.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = CureDAO\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CureDAO\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure OAuth2 access token for authorization: curedao_oauth2
$config = CureDAO\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new CureDAO\Client\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUnitCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->getUnitCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\CureDAO\Client\Model\UnitCategory[]**](../Model/UnitCategory.md)

### Authorization

[access_token](../../README.md#access_token), [curedao_oauth2](../../README.md#curedao_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnits**
> \CureDAO\Client\Model\Unit[] getUnits()

Get units

Get a list of the available measurement units

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = CureDAO\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CureDAO\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure OAuth2 access token for authorization: curedao_oauth2
$config = CureDAO\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new CureDAO\Client\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUnits();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->getUnits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\CureDAO\Client\Model\Unit[]**](../Model/Unit.md)

### Authorization

[access_token](../../README.md#access_token), [curedao_oauth2](../../README.md#curedao_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

