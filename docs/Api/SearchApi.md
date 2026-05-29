# Infocenter\Client\SearchApi

All URIs are relative to *https://api.discover.swiss/test/info/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createView**](SearchApi.md#createview) | **POST** /search/views | CreateView
[**deleteView**](SearchApi.md#deleteview) | **DELETE** /search/views/{id} | DeleteView
[**getAllViews**](SearchApi.md#getallviews) | **GET** /search/views | GetAllViews
[**getViewById**](SearchApi.md#getviewbyid) | **GET** /search/views/{id} | GetViewById
[**updateView**](SearchApi.md#updateview) | **PUT** /search/views/{id} | UpdateView

# **createView**
> \Infocenter\Client\Model\DsSearchViewResponse createView($ocp_apim_subscription_key, $body, $authorization, $accept_language, $accept_timezone, $category_version)

CreateView

Create search view.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Infocenter\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$body = new \Infocenter\Client\Model\DsSearchViewRequest(); // \Infocenter\Client\Model\DsSearchViewRequest | 
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->createView($ocp_apim_subscription_key, $body, $authorization, $accept_language, $accept_timezone, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->createView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **body** | [**\Infocenter\Client\Model\DsSearchViewRequest**](../Model/DsSearchViewRequest.md)|  | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsSearchViewResponse**](../Model/DsSearchViewResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteView**
> deleteView($id, $ocp_apim_subscription_key, $authorization, $accept_language, $accept_timezone, $category_version)

DeleteView

Delete search view by Id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Infocenter\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Search view identifier.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $apiInstance->deleteView($id, $ocp_apim_subscription_key, $authorization, $accept_language, $accept_timezone, $category_version);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->deleteView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Search view identifier. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllViews**
> \Infocenter\Client\Model\DsSearchViewResponseArray getAllViews($ocp_apim_subscription_key, $select, $authorization, $accept_language, $accept_timezone, $category_version)

GetAllViews

Get all search views.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Infocenter\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->getAllViews($ocp_apim_subscription_key, $select, $authorization, $accept_language, $accept_timezone, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getAllViews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsSearchViewResponseArray**](../Model/DsSearchViewResponseArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getViewById**
> \Infocenter\Client\Model\DsSearchViewResponse getViewById($id, $ocp_apim_subscription_key, $authorization, $accept_language, $accept_timezone, $category_version)

GetViewById

Get search view by Id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Infocenter\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Search view identifier.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->getViewById($id, $ocp_apim_subscription_key, $authorization, $accept_language, $accept_timezone, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getViewById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Search view identifier. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsSearchViewResponse**](../Model/DsSearchViewResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateView**
> \Infocenter\Client\Model\DsSearchViewResponse updateView($ocp_apim_subscription_key, $id, $body, $authorization, $accept_language, $accept_timezone, $category_version)

UpdateView

Update search view.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infocenter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Infocenter\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$id = "id_example"; // string | Search view identifier.
$body = new \Infocenter\Client\Model\DsSearchViewRequest(); // \Infocenter\Client\Model\DsSearchViewRequest | 
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->updateView($ocp_apim_subscription_key, $id, $body, $authorization, $accept_language, $accept_timezone, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->updateView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **id** | **string**| Search view identifier. |
 **body** | [**\Infocenter\Client\Model\DsSearchViewRequest**](../Model/DsSearchViewRequest.md)|  | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsSearchViewResponse**](../Model/DsSearchViewResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

