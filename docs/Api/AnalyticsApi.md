# CureDAO\Client\AnalyticsApi

All URIs are relative to *https://v7.curedao.org/api*

| Method                                                                       | HTTP request                          | Description                  |
|------------------------------------------------------------------------------|---------------------------------------|------------------------------|
| [**getCorrelationExplanations**](AnalyticsApi.md#getCorrelationExplanations) | **GET** /v3/correlations/explanations | Get correlation explanations |
| [**getCorrelations**](AnalyticsApi.md#getCorrelations)                       | **GET** /v3/correlations              | Get correlations             |

# **getCorrelationExplanations**
> \CureDAO\Client\Models\Correlation[] getCorrelationExplanations($predictor_variable_name, $outcome_variable_name)

Get correlation explanations

Get explanations of  correlations based on data from a single user.

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

$apiInstance = new CureDAO\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$predictor_variable_name = "predictor_variable_name_example"; // string | Name of the hypothetical predictor variable.  Ex: Sleep Duration
$outcome_variable_name = "outcome_variable_name_example"; // string | Name of the outcome variable of interest.  Ex: Overall Mood

try {
    $result = $apiInstance->getCorrelationExplanations($predictor_variable_name, $outcome_variable_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getCorrelationExplanations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                        | Type       | Description                                                                  | Notes      |
|-----------------------------|------------|------------------------------------------------------------------------------|------------|
| **cause_variable_name**     | **string** | Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration | [optional] |
| **effect_variable_name**    | **string** | Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood      | [optional] |
| **cause_variable_id**       | **int**    | Variable id of the hypothetical predictor variable.  Ex: 1398                | [optional] |
| **effect_variable_id**      | **int**    | Variable id of the outcome variable of interest.  Ex: 1398                   | [optional] |
| **predictor_variable_name** | **string** | Name of the hypothetical predictor variable.  Ex: Sleep Duration             | [optional] |
| **outcome_variable_name**   | **string** | Name of the outcome variable of interest.  Ex: Overall Mood                  | [optional] |

### Return type

[**\CureDAO\Client\Models\Correlation[]**](../Model/Correlation.md)

### Authorization

[access_token](../../README.md#access_token), [curedao_oauth2](../../README.md#curedao_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorrelations**
> \CureDAO\Client\Models\GetCorrelationsResponse getCorrelations($predictor_variable_name, $outcome_variable_name, $sort, $limit, $offset, $user_id, $correlation_coefficient, $updated_at, $outcomes_of_interest, $client_id, $common_only, $platform)

Get correlations

Get a list of correlations that can be used to display top predictors of a given outcome like mood, for instance.

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

$apiInstance = new CureDAO\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$predictor_variable_name = "predictor_variable_name_example"; // string | Name of the hypothetical predictor variable.  Ex: Sleep Duration
$outcome_variable_name = "outcome_variable_name_example"; // string | Name of the outcome variable of interest.  Ex: Overall Mood
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$user_id = 8.14; // float | User's id
$correlation_coefficient = "correlation_coefficient_example"; // string | Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$outcomes_of_interest = true; // bool | Only include correlations for which the effect is an outcome of interest for the user
$client_id = "client_id_example"; // string | Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org
$common_only = true; // bool | Return only public, anonymized and aggregated population data instead of user-specific variables
$platform = "platform_example"; // string | Ex: chrome, android, ios, web

try {
    $result = $apiInstance->getCorrelations($predictor_variable_name, $outcome_variable_name, $sort, $limit, $offset, $user_id, $correlation_coefficient, $updated_at, $outcomes_of_interest, $client_id, $common_only, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getCorrelations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                        | Type       | Description                                                                                                                                                                                                                                                   | Notes                       |
|-----------------------------|------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|-----------------------------|
| **cause_variable_name**     | **string** | Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration                                                                                                                                                                                  | [optional]                  |
| **effect_variable_name**    | **string** | Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood                                                                                                                                                                                       | [optional]                  |
| **cause_variable_id**       | **int**    | Variable id of the hypothetical predictor variable.  Ex: 1398                                                                                                                                                                                                 | [optional]                  |
| **effect_variable_id**      | **int**    | Variable id of the outcome variable of interest.  Ex: 1398                                                                                                                                                                                                    | [optional]                  |
| **predictor_variable_name** | **string** | Name of the hypothetical predictor variable.  Ex: Sleep Duration                                                                                                                                                                                              | [optional]                  |
| **outcome_variable_name**   | **string** | Name of the outcome variable of interest.  Ex: Overall Mood                                                                                                                                                                                                   | [optional]                  |
| **sort**                    | **string** | Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order.                                                                                                                                    | [optional]                  |
| **limit**                   | **int**    | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.                                                            | [optional] [default to 100] |
| **offset**                  | **int**    | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]                  |
| **user_id**                 | **float**  | User&#39;s id                                                                                                                                                                                                                                                 | [optional]                  |
| **correlation_coefficient** | **string** | Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action                                                                                                                                      | [optional]                  |
| **updated_at**              | **string** | When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.                                                                                                                                | [optional]                  |
| **outcomes_of_interest**    | **bool**   | Only include correlations for which the effect is an outcome of interest for the user                                                                                                                                                                         | [optional]                  |
| **client_id**               | **string** | Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org                                                                                                                                                                      | [optional]                  |
| **common_only**             | **bool**   | Return only public, anonymized and aggregated population data instead of user-specific variables                                                                                                                                                              | [optional]                  |
| **platform**                | **string** | Ex: chrome, android, ios, web                                                                                                                                                                                                                                 | [optional]                  |

### Return type

[**\CureDAO\Client\Models\GetCorrelationsResponse**](../Model/GetCorrelationsResponse.md)

### Authorization

[access_token](../../README.md#access_token), [curedao_oauth2](../../README.md#curedao_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

