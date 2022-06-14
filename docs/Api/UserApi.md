# CureDAO\Client\UserApi

All URIs are relative to *https://v7.curedao.org*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUser**](UserApi.md#deleteUser) | **DELETE** /v3/user/delete | Delete user
[**getUser**](UserApi.md#getUser) | **GET** /v3/user | Get user info
[**getUserBlogs**](UserApi.md#getUserBlogs) | **GET** /v3/userBlogs | Get UserBlogs
[**getUsers**](UserApi.md#getUsers) | **GET** /v3/users | Get users who shared data
[**postUserBlogs**](UserApi.md#postUserBlogs) | **POST** /v3/userBlogs | Post UserBlogs
[**postUserSettings**](UserApi.md#postUserSettings) | **POST** /v3/userSettings | Post UserSettings
# **deleteUser**
> \CureDAO\Client\Models\CommonResponse deleteUser($reason, $client_id, $platform)

Delete user

Delete user account. Only the client app that created a user can delete that user.

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

$apiInstance = new CureDAO\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reason = "reason_example"; // string | Ex: I hate you!
$client_id = "client_id_example"; // string | Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org
$platform = "platform_example"; // string | Ex: chrome, android, ios, web

try {
    $result = $apiInstance->deleteUser($reason, $client_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reason** | **string**| Ex: I hate you! |
 **client_id** | **string**| Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]

### Return type

[**\CureDAO\Client\Models\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[access_token](../../README.md#access_token), [curedao_oauth2](../../README.md#curedao_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUser**
> \CureDAO\Client\Models\User getUser($user_id, $created_at, $updated_at, $limit, $offset, $sort, $client_id, $app_version, $client_user_id, $platform, $log, $pwd, $include_authorized_clients)

Get user info

Returns user info.  If no userId is specified, returns info for currently authenticated user

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

$apiInstance = new CureDAO\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 8.14; // float | User's id
$created_at = "created_at_example"; // string | When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.
$client_id = "client_id_example"; // string | Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org
$app_version = "app_version_example"; // string | Ex: 2.1.1.0
$client_user_id = 56; // int | Ex: 74802
$platform = "platform_example"; // string | Ex: chrome, android, ios, web
$log = "log_example"; // string | Username or email
$pwd = "pwd_example"; // string | User password
$include_authorized_clients = true; // bool | Return list of apps, studies, and individuals with access to user data

try {
    $result = $apiInstance->getUser($user_id, $created_at, $updated_at, $limit, $offset, $sort, $client_id, $app_version, $client_user_id, $platform, $log, $pwd, $include_authorized_clients);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **float**| User&#39;s id | [optional]
 **created_at** | **string**| When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] [default to 100]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **sort** | **string**| Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. | [optional]
 **client_id** | **string**| Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org | [optional]
 **app_version** | **string**| Ex: 2.1.1.0 | [optional]
 **client_user_id** | **int**| Ex: 74802 | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]
 **log** | **string**| Username or email | [optional]
 **pwd** | **string**| User password | [optional]
 **include_authorized_clients** | **bool**| Return list of apps, studies, and individuals with access to user data | [optional]

### Return type

[**\CureDAO\Client\Models\User**](../Model/User.md)

### Authorization

[access_token](../../README.md#access_token), [curedao_oauth2](../../README.md#curedao_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserBlogs**
> \CureDAO\Client\Models\UserBlogsResponse[] getUserBlogs($sort, $limit, $offset, $updated_at, $user_id, $created_at, $id, $client_id, $platform)

Get UserBlogs

Get UserBlogs

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

$apiInstance = new CureDAO\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$user_id = 8.14; // float | User's id
$created_at = "created_at_example"; // string | When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$id = 56; // int | Id
$client_id = "client_id_example"; // string | Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org
$platform = "platform_example"; // string | Ex: chrome, android, ios, web

try {
    $result = $apiInstance->getUserBlogs($sort, $limit, $offset, $updated_at, $user_id, $created_at, $id, $client_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserBlogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] [default to 100]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **user_id** | **float**| User&#39;s id | [optional]
 **created_at** | **string**| When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **id** | **int**| Id | [optional]
 **client_id** | **string**| Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]

### Return type

[**\CureDAO\Client\Models\UserBlogsResponse[]**](../Model/UserBlogsResponse.md)

### Authorization

[access_token](../../README.md#access_token), [curedao_oauth2](../../README.md#curedao_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsers**
> \CureDAO\Client\Models\UsersResponse getUsers($user_id, $created_at, $updated_at, $limit, $offset, $sort, $client_id, $app_version, $client_user_id, $platform, $log, $pwd)

Get users who shared data

Returns users who have granted access to their data

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

$apiInstance = new CureDAO\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 8.14; // float | User's id
$created_at = "created_at_example"; // string | When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.
$client_id = "client_id_example"; // string | Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org
$app_version = "app_version_example"; // string | Ex: 2.1.1.0
$client_user_id = 56; // int | Ex: 74802
$platform = "platform_example"; // string | Ex: chrome, android, ios, web
$log = "log_example"; // string | Username or email
$pwd = "pwd_example"; // string | User password

try {
    $result = $apiInstance->getUsers($user_id, $created_at, $updated_at, $limit, $offset, $sort, $client_id, $app_version, $client_user_id, $platform, $log, $pwd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **float**| User&#39;s id | [optional]
 **created_at** | **string**| When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] [default to 100]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **sort** | **string**| Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. | [optional]
 **client_id** | **string**| Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org | [optional]
 **app_version** | **string**| Ex: 2.1.1.0 | [optional]
 **client_user_id** | **int**| Ex: 74802 | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]
 **log** | **string**| Username or email | [optional]
 **pwd** | **string**| User password | [optional]

### Return type

[**\CureDAO\Client\Models\UsersResponse**](../Model/UsersResponse.md)

### Authorization

[access_token](../../README.md#access_token), [curedao_oauth2](../../README.md#curedao_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserBlogs**
> \CureDAO\Client\Models\UserBlogsResponse[] postUserBlogs($sort, $limit, $offset, $updated_at, $user_id, $created_at, $id, $client_id, $platform)

Post UserBlogs

Post UserBlogs

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

$apiInstance = new CureDAO\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$user_id = 8.14; // float | User's id
$created_at = "created_at_example"; // string | When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$id = 56; // int | Id
$client_id = "client_id_example"; // string | Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org
$platform = "platform_example"; // string | Ex: chrome, android, ios, web

try {
    $result = $apiInstance->postUserBlogs($sort, $limit, $offset, $updated_at, $user_id, $created_at, $id, $client_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postUserBlogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] [default to 100]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **user_id** | **float**| User&#39;s id | [optional]
 **created_at** | **string**| When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **id** | **int**| Id | [optional]
 **client_id** | **string**| Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]

### Return type

[**\CureDAO\Client\Models\UserBlogsResponse[]**](../Model/UserBlogsResponse.md)

### Authorization

[access_token](../../README.md#access_token), [curedao_oauth2](../../README.md#curedao_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserSettings**
> \CureDAO\Client\Models\PostUserSettingsResponse postUserSettings($body, $client_id, $platform)

Post UserSettings

Post UserSettings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CureDAO\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \CureDAO\Client\Models\User(); // \CureDAO\Client\Models\User | User settings to update
$client_id = "client_id_example"; // string | Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org
$platform = "platform_example"; // string | Ex: chrome, android, ios, web

try {
    $result = $apiInstance->postUserSettings($body, $client_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postUserSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CureDAO\Client\Models\User**](../Model/User.md)| User settings to update |
 **client_id** | **string**| Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]

### Return type

[**\CureDAO\Client\Models\PostUserSettingsResponse**](../Model/PostUserSettingsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

