# Infocenter\Client\SearchApi

All URIs are relative to *https://api.discover.swiss/test/info/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createView**](SearchApi.md#createview) | **POST** /search/views | 
[**deleteView**](SearchApi.md#deleteview) | **DELETE** /search/views/{id} | 
[**getAllViews**](SearchApi.md#getallviews) | **GET** /search/views | 
[**getViewById**](SearchApi.md#getviewbyid) | **GET** /search/views/{id} | 
[**updateView**](SearchApi.md#updateview) | **PUT** /search/views/{id} | 

# **createView**
> \Infocenter\Client\Model\DsSearchView createView($ocp_apim_subscription_key, $body, $authorization, $accept_language, $accept_timezone, $category_version)



Create search view.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Infocenter\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

[**\Infocenter\Client\Model\DsSearchView**](../Model/DsSearchView.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteView**
> deleteView($ocp_apim_subscription_key, $id, $authorization, $accept_language, $accept_timezone, $category_version)



Delete search view by Id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Infocenter\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$id = "id_example"; // string | Search view identifier.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $apiInstance->deleteView($ocp_apim_subscription_key, $id, $authorization, $accept_language, $accept_timezone, $category_version);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->deleteView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **id** | **string**| Search view identifier. |
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllViews**
> \Infocenter\Client\Model\DsSearchView[] getAllViews($ocp_apim_subscription_key, $authorization, $accept_language, $accept_timezone, $category_version)



Get all search views.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Infocenter\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->getAllViews($ocp_apim_subscription_key, $authorization, $accept_language, $accept_timezone, $category_version);
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
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsSearchView[]**](../Model/DsSearchView.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getViewById**
> \Infocenter\Client\Model\DsSearchView getViewById($ocp_apim_subscription_key, $id, $authorization, $accept_language, $accept_timezone, $category_version)



Get search view by Id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Infocenter\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$id = "id_example"; // string | Search view identifier.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->getViewById($ocp_apim_subscription_key, $id, $authorization, $accept_language, $accept_timezone, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getViewById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **id** | **string**| Search view identifier. |
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsSearchView**](../Model/DsSearchView.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateView**
> \Infocenter\Client\Model\DsSearchView updateView($ocp_apim_subscription_key, $id, $body, $authorization, $accept_language, $accept_timezone, $category_version)



Update search view.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Infocenter\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

[**\Infocenter\Client\Model\DsSearchView**](../Model/DsSearchView.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

