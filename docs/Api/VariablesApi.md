# CureDAO\Client\VariablesApi

All URIs are relative to *https://v7.curedao.org*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUserTag**](VariablesApi.md#deleteUserTag) | **DELETE** /v3/userTags/delete | Delete user tag or ingredient
[**deleteUserVariable**](VariablesApi.md#deleteUserVariable) | **DELETE** /v3/userVariables/delete | Delete All Measurements For Variable
[**getVariableCategories**](VariablesApi.md#getVariableCategories) | **GET** /v3/variableCategories | Variable categories
[**getVariables**](VariablesApi.md#getVariables) | **GET** /v3/variables | Get variables along with related user-specific analysis settings and statistics
[**postUserTags**](VariablesApi.md#postUserTags) | **POST** /v3/userTags | Post or update user tags or ingredients
[**postUserVariables**](VariablesApi.md#postUserVariables) | **POST** /v3/variables | Update User Settings for a Variable
[**resetUserVariableSettings**](VariablesApi.md#resetUserVariableSettings) | **POST** /v3/userVariables/reset | Reset user settings for a variable to defaults
# **deleteUserTag**
> \CureDAO\Client\Model\CommonResponse deleteUserTag($tagged_variable_id, $tag_variable_id)

Delete user tag or ingredient

Delete previously created user tags or ingredients.

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

$apiInstance = new CureDAO\Client\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tagged_variable_id = 56; // int | Id of the tagged variable (i.e. Lollipop) you would like to get variables it can be tagged with (i.e. Sugar).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient).
$tag_variable_id = 56; // int | Id of the tag variable (i.e. Sugar) you would like to get variables it can be tagged to (i.e. Lollipop).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient).

try {
    $result = $apiInstance->deleteUserTag($tagged_variable_id, $tag_variable_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->deleteUserTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tagged_variable_id** | **int**| Id of the tagged variable (i.e. Lollipop) you would like to get variables it can be tagged with (i.e. Sugar).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). | [optional]
 **tag_variable_id** | **int**| Id of the tag variable (i.e. Sugar) you would like to get variables it can be tagged to (i.e. Lollipop).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). | [optional]

### Return type

[**\CureDAO\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[access_token](../../README.md#access_token), [curedao_oauth2](../../README.md#curedao_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserVariable**
> deleteUserVariable($variable_id)

Delete All Measurements For Variable

Users can delete all of their measurements for a variable

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

$apiInstance = new CureDAO\Client\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$variable_id = new \CureDAO\Client\Model\UserVariableDelete(); // \CureDAO\Client\Model\UserVariableDelete | Id of the variable whose measurements should be deleted

try {
    $apiInstance->deleteUserVariable($variable_id);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->deleteUserVariable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variable_id** | [**\CureDAO\Client\Model\UserVariableDelete**](../Model/UserVariableDelete.md)| Id of the variable whose measurements should be deleted |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token), [curedao_oauth2](../../README.md#curedao_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVariableCategories**
> \CureDAO\Client\Model\VariableCategory[] getVariableCategories()

Variable categories

The variable categories include Activity, Causes of Illness, Cognitive Performance, Conditions, Environment, Foods, Location, Miscellaneous, Mood, Nutrition, Physical Activity, Physique, Sleep, Social Interactions, Symptoms, Treatments, Vital Signs, and Goals.

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

$apiInstance = new CureDAO\Client\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVariableCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->getVariableCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\CureDAO\Client\Model\VariableCategory[]**](../Model/VariableCategory.md)

### Authorization

[access_token](../../README.md#access_token), [curedao_oauth2](../../README.md#curedao_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVariables**
> \CureDAO\Client\Model\Variable[] getVariables($include_charts, $number_of_raw_measurements, $user_id, $variable_category_name, $name, $variable_name, $updated_at, $source_name, $earliest_measurement_time, $latest_measurement_time, $id, $last_source_name, $limit, $offset, $sort, $include_public, $manual_tracking, $client_id, $upc, $effect_or_cause, $public_effect_or_cause, $exact_match, $variable_category_id, $include_private, $search_phrase, $synonyms, $tagged_variable_id, $tag_variable_id, $join_variable_id, $parent_user_tag_variable_id, $child_user_tag_variable_id, $ingredient_user_tag_variable_id, $ingredient_of_user_tag_variable_id, $common_only, $user_only, $platform, $include_tags, $recalculate, $variable_id, $concise, $refresh)

Get variables along with related user-specific analysis settings and statistics

Get variables. If the user has specified variable settings, these are provided instead of the common variable defaults.

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

$apiInstance = new CureDAO\Client\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_charts = true; // bool | Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided.
$number_of_raw_measurements = "number_of_raw_measurements_example"; // string | Filter variables by the total number of measurements that they have. This could be used of you want to filter or sort by popularity.
$user_id = 8.14; // float | User's id
$variable_category_name = "variable_category_name_example"; // string | Ex: Emotions, Treatments, Symptoms...
$name = "name_example"; // string | Name of the variable. To get results matching a substring, add % as a wildcard as the first and/or last character of a query string parameter. In order to get variables that contain `Mood`, the following query should be used: ?variableName=%Mood%
$variable_name = "variable_name_example"; // string | Name of the variable you want measurements for
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$source_name = "source_name_example"; // string | ID of the source you want measurements for (supports exact name match only)
$earliest_measurement_time = "earliest_measurement_time_example"; // string | Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local.
$latest_measurement_time = "latest_measurement_time_example"; // string | Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local.
$id = 56; // int | Common variable id
$last_source_name = "last_source_name_example"; // string | Limit variables to those which measurements were last submitted by a specific source. So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.
$include_public = true; // bool | Include variables the user has no measurements for
$manual_tracking = true; // bool | Only include variables tracked manually by the user
$client_id = "client_id_example"; // string | Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org
$upc = "upc_example"; // string | UPC or other barcode scan result
$effect_or_cause = "effect_or_cause_example"; // string | Provided variable is the effect or cause
$public_effect_or_cause = "public_effect_or_cause_example"; // string | Ex:
$exact_match = true; // bool | Require exact match
$variable_category_id = 56; // int | Ex: 13
$include_private = true; // bool | Include user-specific variables in results
$search_phrase = "search_phrase_example"; // string | Ex: %Body Fat%
$synonyms = "synonyms_example"; // string | Ex: McDonalds hotcake
$tagged_variable_id = 56; // int | Id of the tagged variable (i.e. Lollipop) you would like to get variables it can be tagged with (i.e. Sugar).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient).
$tag_variable_id = 56; // int | Id of the tag variable (i.e. Sugar) you would like to get variables it can be tagged to (i.e. Lollipop).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient).
$join_variable_id = 56; // int | Id of the variable you would like to get variables that can be joined to.  This is used to merge duplicate variables.   If joinVariableId is specified, this returns only variables eligible to be joined to the variable specified by the joinVariableId.
$parent_user_tag_variable_id = 56; // int | Id of the parent category variable (i.e. Fruit) you would like to get eligible child sub-type variables (i.e. Apple) for.  Child variable measurements will be included in analysis of the parent variable.  For instance, a child sub-type of the parent category Fruit could be Apple.  When Apple is tagged with the parent category Fruit, Apple measurements will be included when Fruit is analyzed.
$child_user_tag_variable_id = 56; // int | Id of the child sub-type variable (i.e. Apple) you would like to get eligible parent variables (i.e. Fruit) for.  Child variable measurements will be included in analysis of the parent variable.  For instance, a child sub-type of the parent category Fruit could be Apple. When Apple is tagged with the parent category Fruit, Apple measurements will be included when Fruit is analyzed.
$ingredient_user_tag_variable_id = 56; // int | Id of the ingredient variable (i.e. Fructose)  you would like to get eligible ingredientOf variables (i.e. Apple) for.  IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredientOf of variable Fruit could be Apple.
$ingredient_of_user_tag_variable_id = 56; // int | Id of the ingredientOf variable (i.e. Apple) you would like to get eligible ingredient variables (i.e. Fructose) for.  IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredientOf of variable Fruit could be Apple.
$common_only = true; // bool | Return only public and aggregated common variable data instead of user-specific variables
$user_only = true; // bool | Return only user-specific variables and data, excluding common aggregated variable data
$platform = "platform_example"; // string | Ex: chrome, android, ios, web
$include_tags = true; // bool | Return parent, child, duplicate, and ingredient variables
$recalculate = true; // bool | Recalculate instead of using cached analysis
$variable_id = 56; // int | Ex: 13
$concise = true; // bool | Only return field required for variable auto-complete searches.  The smaller size allows for storing more variable results locally reducing API requests.
$refresh = true; // bool | Regenerate charts instead of getting from the cache

try {
    $result = $apiInstance->getVariables($include_charts, $number_of_raw_measurements, $user_id, $variable_category_name, $name, $variable_name, $updated_at, $source_name, $earliest_measurement_time, $latest_measurement_time, $id, $last_source_name, $limit, $offset, $sort, $include_public, $manual_tracking, $client_id, $upc, $effect_or_cause, $public_effect_or_cause, $exact_match, $variable_category_id, $include_private, $search_phrase, $synonyms, $tagged_variable_id, $tag_variable_id, $join_variable_id, $parent_user_tag_variable_id, $child_user_tag_variable_id, $ingredient_user_tag_variable_id, $ingredient_of_user_tag_variable_id, $common_only, $user_only, $platform, $include_tags, $recalculate, $variable_id, $concise, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->getVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_charts** | **bool**| Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. | [optional]
 **number_of_raw_measurements** | **string**| Filter variables by the total number of measurements that they have. This could be used of you want to filter or sort by popularity. | [optional]
 **user_id** | **float**| User&#39;s id | [optional]
 **variable_category_name** | **string**| Ex: Emotions, Treatments, Symptoms... | [optional]
 **name** | **string**| Name of the variable. To get results matching a substring, add % as a wildcard as the first and/or last character of a query string parameter. In order to get variables that contain &#x60;Mood&#x60;, the following query should be used: ?variableName&#x3D;%Mood% | [optional]
 **variable_name** | **string**| Name of the variable you want measurements for | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **source_name** | **string**| ID of the source you want measurements for (supports exact name match only) | [optional]
 **earliest_measurement_time** | **string**| Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. | [optional]
 **latest_measurement_time** | **string**| Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. | [optional]
 **id** | **int**| Common variable id | [optional]
 **last_source_name** | **string**| Limit variables to those which measurements were last submitted by a specific source. So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] [default to 100]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **sort** | **string**| Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. | [optional]
 **include_public** | **bool**| Include variables the user has no measurements for | [optional]
 **manual_tracking** | **bool**| Only include variables tracked manually by the user | [optional]
 **client_id** | **string**| Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org | [optional]
 **upc** | **string**| UPC or other barcode scan result | [optional]
 **effect_or_cause** | **string**| Provided variable is the effect or cause | [optional]
 **public_effect_or_cause** | **string**| Ex: | [optional]
 **exact_match** | **bool**| Require exact match | [optional]
 **variable_category_id** | **int**| Ex: 13 | [optional]
 **include_private** | **bool**| Include user-specific variables in results | [optional]
 **search_phrase** | **string**| Ex: %Body Fat% | [optional]
 **synonyms** | **string**| Ex: McDonalds hotcake | [optional]
 **tagged_variable_id** | **int**| Id of the tagged variable (i.e. Lollipop) you would like to get variables it can be tagged with (i.e. Sugar).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). | [optional]
 **tag_variable_id** | **int**| Id of the tag variable (i.e. Sugar) you would like to get variables it can be tagged to (i.e. Lollipop).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). | [optional]
 **join_variable_id** | **int**| Id of the variable you would like to get variables that can be joined to.  This is used to merge duplicate variables.   If joinVariableId is specified, this returns only variables eligible to be joined to the variable specified by the joinVariableId. | [optional]
 **parent_user_tag_variable_id** | **int**| Id of the parent category variable (i.e. Fruit) you would like to get eligible child sub-type variables (i.e. Apple) for.  Child variable measurements will be included in analysis of the parent variable.  For instance, a child sub-type of the parent category Fruit could be Apple.  When Apple is tagged with the parent category Fruit, Apple measurements will be included when Fruit is analyzed. | [optional]
 **child_user_tag_variable_id** | **int**| Id of the child sub-type variable (i.e. Apple) you would like to get eligible parent variables (i.e. Fruit) for.  Child variable measurements will be included in analysis of the parent variable.  For instance, a child sub-type of the parent category Fruit could be Apple. When Apple is tagged with the parent category Fruit, Apple measurements will be included when Fruit is analyzed. | [optional]
 **ingredient_user_tag_variable_id** | **int**| Id of the ingredient variable (i.e. Fructose)  you would like to get eligible ingredientOf variables (i.e. Apple) for.  IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredientOf of variable Fruit could be Apple. | [optional]
 **ingredient_of_user_tag_variable_id** | **int**| Id of the ingredientOf variable (i.e. Apple) you would like to get eligible ingredient variables (i.e. Fructose) for.  IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredientOf of variable Fruit could be Apple. | [optional]
 **common_only** | **bool**| Return only public and aggregated common variable data instead of user-specific variables | [optional]
 **user_only** | **bool**| Return only user-specific variables and data, excluding common aggregated variable data | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]
 **include_tags** | **bool**| Return parent, child, duplicate, and ingredient variables | [optional]
 **recalculate** | **bool**| Recalculate instead of using cached analysis | [optional]
 **variable_id** | **int**| Ex: 13 | [optional]
 **concise** | **bool**| Only return field required for variable auto-complete searches.  The smaller size allows for storing more variable results locally reducing API requests. | [optional]
 **refresh** | **bool**| Regenerate charts instead of getting from the cache | [optional]

### Return type

[**\CureDAO\Client\Model\Variable[]**](../Model/Variable.md)

### Authorization

[access_token](../../README.md#access_token), [curedao_oauth2](../../README.md#curedao_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserTags**
> \CureDAO\Client\Model\CommonResponse postUserTags($body, $user_id)

Post or update user tags or ingredients

This endpoint allows users to tag foods with their ingredients.  This information will then be used to infer the user intake of the different ingredients by just entering the foods. The inferred intake levels will then be used to determine the effects of different nutrients on the user during analysis.

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

$apiInstance = new CureDAO\Client\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CureDAO\Client\Model\UserTag(); // \CureDAO\Client\Model\UserTag | Contains the new user tag data
$user_id = 8.14; // float | User's id

try {
    $result = $apiInstance->postUserTags($body, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->postUserTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CureDAO\Client\Model\UserTag**](../Model/UserTag.md)| Contains the new user tag data |
 **user_id** | **float**| User&#39;s id | [optional]

### Return type

[**\CureDAO\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[access_token](../../README.md#access_token), [curedao_oauth2](../../README.md#curedao_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserVariables**
> \CureDAO\Client\Model\CommonResponse postUserVariables($user_variables, $include_private, $client_id, $include_public, $search_phrase, $exact_match, $manual_tracking, $variable_category_name, $variable_category_id, $synonyms, $platform)

Update User Settings for a Variable

Users can change the parameters used in analysis of that variable such as the expected duration of action for a variable to have an effect, the estimated delay before the onset of action. In order to filter out erroneous data, they are able to set the maximum and minimum reasonable daily values for a variable.

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

$apiInstance = new CureDAO\Client\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_variables = array(new \CureDAO\Client\Model\Variable()); // \CureDAO\Client\Model\Variable[] | Variable user settings data
$include_private = true; // bool | Include user-specific variables in results
$client_id = "client_id_example"; // string | Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org
$include_public = true; // bool | Include variables the user has no measurements for
$search_phrase = "search_phrase_example"; // string | Ex: %Body Fat%
$exact_match = true; // bool | Require exact match
$manual_tracking = true; // bool | Only include variables tracked manually by the user
$variable_category_name = "variable_category_name_example"; // string | Ex: Emotions, Treatments, Symptoms...
$variable_category_id = 56; // int | Ex: 13
$synonyms = "synonyms_example"; // string | Ex: McDonalds hotcake
$platform = "platform_example"; // string | Ex: chrome, android, ios, web

try {
    $result = $apiInstance->postUserVariables($user_variables, $include_private, $client_id, $include_public, $search_phrase, $exact_match, $manual_tracking, $variable_category_name, $variable_category_id, $synonyms, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->postUserVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_variables** | [**\CureDAO\Client\Model\Variable[]**](../Model/Variable.md)| Variable user settings data |
 **include_private** | **bool**| Include user-specific variables in results | [optional]
 **client_id** | **string**| Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org | [optional]
 **include_public** | **bool**| Include variables the user has no measurements for | [optional]
 **search_phrase** | **string**| Ex: %Body Fat% | [optional]
 **exact_match** | **bool**| Require exact match | [optional]
 **manual_tracking** | **bool**| Only include variables tracked manually by the user | [optional]
 **variable_category_name** | **string**| Ex: Emotions, Treatments, Symptoms... | [optional]
 **variable_category_id** | **int**| Ex: 13 | [optional]
 **synonyms** | **string**| Ex: McDonalds hotcake | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]

### Return type

[**\CureDAO\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[access_token](../../README.md#access_token), [curedao_oauth2](../../README.md#curedao_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetUserVariableSettings**
> resetUserVariableSettings($variable_id)

Reset user settings for a variable to defaults

Reset user settings for a variable to defaults

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

$apiInstance = new CureDAO\Client\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$variable_id = new \CureDAO\Client\Model\UserVariableDelete(); // \CureDAO\Client\Model\UserVariableDelete | Id of the variable whose measurements should be deleted

try {
    $apiInstance->resetUserVariableSettings($variable_id);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->resetUserVariableSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variable_id** | [**\CureDAO\Client\Model\UserVariableDelete**](../Model/UserVariableDelete.md)| Id of the variable whose measurements should be deleted |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token), [curedao_oauth2](../../README.md#curedao_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

