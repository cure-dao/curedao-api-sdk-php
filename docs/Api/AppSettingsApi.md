# CureDAO\Client\AppSettingsApi

All URIs are relative to *https://v7.curedao.org*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAppSettings**](AppSettingsApi.md#getAppSettings) | **GET** /v3/appSettings | Get client app settings
# **getAppSettings**
> \CureDAO\Client\Models\AppSettingsResponse getAppSettings($client_id, $client_secret, $platform)

Get client app settings

Get the settings for your application configurable at https://build.quantimo.do

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CureDAO\Client\Api\AppSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = "client_id_example"; // string | Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org
$client_secret = "client_secret_example"; // string | This is the secret for your obtained clientId. We use this to ensure that only your application uses the clientId.  Obtain this by creating a free application at [https://builder.curedao.org](https://builder.curedao.org).
$platform = "platform_example"; // string | Ex: chrome, android, ios, web

try {
    $result = $apiInstance->getAppSettings($client_id, $client_secret, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingsApi->getAppSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org | [optional]
 **client_secret** | **string**| This is the secret for your obtained clientId. We use this to ensure that only your application uses the clientId.  Obtain this by creating a free application at [https://builder.curedao.org](https://builder.curedao.org). | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]

### Return type

[**\CureDAO\Client\Models\AppSettingsResponse**](../Model/AppSettingsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

