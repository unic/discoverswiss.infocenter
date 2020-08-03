# Infocenter\Client\DefaultApi

All URIs are relative to *https://api.discover.swiss/test/info*

Method | HTTP request | Description
------------- | ------------- | -------------
[**administrativeAreaRegion**](DefaultApi.md#administrativearearegion) | **GET** /areas/{id} | AdministrativeArea (Region)
[**category**](DefaultApi.md#category) | **GET** /categories/{id} | Category
[**categoryTree**](DefaultApi.md#categorytree) | **GET** /categories/{id}/tree | Category Tree
[**civicStructure**](DefaultApi.md#civicstructure) | **GET** /civicStructures/{id} | CivicStructure
[**condition**](DefaultApi.md#condition) | **GET** /conditions/{id} | Condition
[**creativeWork**](DefaultApi.md#creativework) | **GET** /creativeWorks/{id} | CreativeWork
[**currentTermVersion**](DefaultApi.md#currenttermversion) | **GET** /termversions/{termCode}/currentVersion | Current TermVersion
[**event**](DefaultApi.md#event) | **GET** /events/{id} | Event
[**foodEstablishment**](DefaultApi.md#foodestablishment) | **GET** /foodEstablishments/{id} | FoodEstablishment
[**getStatus**](DefaultApi.md#getstatus) | **GET** /status | GetStatus
[**imageObject**](DefaultApi.md#imageobject) | **GET** /imageObjects/{id} | ImageObject
[**listAdministrativeAreaRegion**](DefaultApi.md#listadministrativearearegion) | **GET** /areas | List AdministrativeArea (Region)
[**listCategory**](DefaultApi.md#listcategory) | **GET** /categories | List Category
[**listCivicStructure**](DefaultApi.md#listcivicstructure) | **GET** /civicStructures | List CivicStructure
[**listCondition**](DefaultApi.md#listcondition) | **GET** /conditions | List Condition
[**listCreativeWork**](DefaultApi.md#listcreativework) | **GET** /creativeWorks | List CreativeWork
[**listEvents**](DefaultApi.md#listevents) | **GET** /events | List Events
[**listFoodEstablishment**](DefaultApi.md#listfoodestablishment) | **GET** /foodEstablishments | List FoodEstablishment
[**listImageObject**](DefaultApi.md#listimageobject) | **GET** /imageObjects | List ImageObject
[**listLocalBusiness**](DefaultApi.md#listlocalbusiness) | **GET** /localbusinesses | List LocalBusiness
[**listLodgingBusiness**](DefaultApi.md#listlodgingbusiness) | **GET** /lodgingbusinesses | List LodgingBusiness
[**listMediaObject**](DefaultApi.md#listmediaobject) | **GET** /mediaObjects | List MediaObject
[**listPlace**](DefaultApi.md#listplace) | **GET** /places | List Place
[**listProducts**](DefaultApi.md#listproducts) | **GET** /products | List Products
[**listTour**](DefaultApi.md#listtour) | **GET** /tours | List Tour
[**listWebcams**](DefaultApi.md#listwebcams) | **GET** /webcams | List Webcams
[**localBusiness**](DefaultApi.md#localbusiness) | **GET** /localbusinesses/{id} | LocalBusiness
[**lodgingBusiness**](DefaultApi.md#lodgingbusiness) | **GET** /lodgingbusinesses/{id} | LodgingBusiness
[**mediaObject**](DefaultApi.md#mediaobject) | **GET** /mediaObjects/{id} | MediaObject
[**place**](DefaultApi.md#place) | **GET** /places/{id} | Place
[**product**](DefaultApi.md#product) | **GET** /products/{id} | Product
[**search**](DefaultApi.md#search) | **GET** /search | Search
[**termVersion**](DefaultApi.md#termversion) | **GET** /termversions/{code} | TermVersion
[**tour**](DefaultApi.md#tour) | **GET** /tours/{id} | Tour
[**webcam**](DefaultApi.md#webcam) | **GET** /webcams/{id} | Webcam

# **administrativeAreaRegion**
> \Infocenter\Client\Model\AdministrativeArea administrativeAreaRegion($id, $accept_language)

AdministrativeArea (Region)

Get the full detailed information of a Region object.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Use property identifier of Region to get single object.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->administrativeAreaRegion($id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->administrativeAreaRegion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Region to get single object. |
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\AdministrativeArea**](../Model/AdministrativeArea.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **category**
> \Infocenter\Client\Model\Category category($id, $accept_language)

Category

Get the full detailed information of a Category object.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Use property identifier of Category to get single object.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->category($id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->category: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Category to get single object. |
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\Category**](../Model/Category.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryTree**
> \Infocenter\Client\Model\Category categoryTree($id, $accept_language)

Category Tree

Get the full detailed information of a Category tree.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Use property identifier of Category to set root category.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->categoryTree($id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->categoryTree: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Category to set root category. |
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\Category**](../Model/Category.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **civicStructure**
> \Infocenter\Client\Model\CivicStructure civicStructure($id, $accept_language)

CivicStructure

Get the full detailed information of a CivicStructure object.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Use property identifier of CivicStructure to get single object.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->civicStructure($id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->civicStructure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of CivicStructure to get single object. |
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\CivicStructure**](../Model/CivicStructure.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **condition**
> \Infocenter\Client\Model\Condition condition($id, $accept_language)

Condition

Get the full detailed information of a Condition object.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Use property identifier of Condition to get single object.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->condition($id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->condition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Condition to get single object. |
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\Condition**](../Model/Condition.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creativeWork**
> \Infocenter\Client\Model\CreativeWork creativeWork($id, $accept_language)

CreativeWork

Get the full detailed information of a CreativeWork object.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Use property identifier of CreativeWork to get single object.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->creativeWork($id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->creativeWork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of CreativeWork to get single object. |
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\CreativeWork**](../Model/CreativeWork.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currentTermVersion**
> \Infocenter\Client\Model\TermVersion currentTermVersion($term_code, $accept_language)

Current TermVersion

Get the full detailed information of a current TermVersion object queried by the term-code and the language (Accept-Language header)

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$term_code = "term_code_example"; // string | Use property code of a term to get the current term version.
$accept_language = "accept_language_example"; // string | Supply this header to select the term version in the correct language and deliver localized properties.

try {
    $result = $apiInstance->currentTermVersion($term_code, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->currentTermVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **term_code** | **string**| Use property code of a term to get the current term version. |
 **accept_language** | **string**| Supply this header to select the term version in the correct language and deliver localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\TermVersion**](../Model/TermVersion.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **event**
> \Infocenter\Client\Model\Event event($id, $accept_language)

Event

Get the full detailed information of a Event object.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Use property identifier of Event to get single object.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->event($id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->event: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Event to get single object. |
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\Event**](../Model/Event.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foodEstablishment**
> \Infocenter\Client\Model\FoodEstablishment foodEstablishment($id, $accept_language)

FoodEstablishment

Get the full detailed information of a FoodEstablishment object.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Use property identifier of FoodEstablishment to get single object.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->foodEstablishment($id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->foodEstablishment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of FoodEstablishment to get single object. |
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\FoodEstablishment**](../Model/FoodEstablishment.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatus**
> getStatus()

GetStatus

Get API Status

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getStatus();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageObject**
> \Infocenter\Client\Model\ImageObject imageObject($id, $accept_language)

ImageObject

Get the full detailed information of a ImageObject object.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Use property identifier of ImageObject to get single object.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->imageObject($id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->imageObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of ImageObject to get single object. |
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\ImageObject**](../Model/ImageObject.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAdministrativeAreaRegion**
> \Infocenter\Client\Model\AdministrativeAreasResponse listAdministrativeAreaRegion($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $accept_language)

List AdministrativeArea (Region)

Get the list of the Regions with full detailed information.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = "category_example"; // string | Use property identifier of category to filter.
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$updated_since = "updated_since_example"; // string | Format - date-time (as date-time in RFC3339). Return only changed data since specific date.
$datasource = "datasource_example"; // string | Use datasource to filter.
$continuation_token = "continuation_token_example"; // string | Use it for get next set of data.
$top = 56; // int | Format - int32. Number of next set of entities.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listAdministrativeAreaRegion($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listAdministrativeAreaRegion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**| Use property identifier of category to filter. | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **updated_since** | **string**| Format - date-time (as date-time in RFC3339). Return only changed data since specific date. | [optional]
 **datasource** | **string**| Use datasource to filter. | [optional]
 **continuation_token** | **string**| Use it for get next set of data. | [optional]
 **top** | **int**| Format - int32. Number of next set of entities. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\AdministrativeAreasResponse**](../Model/AdministrativeAreasResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCategory**
> \Infocenter\Client\Model\CategoriesResponse listCategory($parent_category, $updated_since, $datasource, $continuation_token, $top, $accept_language)

List Category

Get the list of the Categories with full detailed information.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_category = "parent_category_example"; // string | Use property identifier of category to filter.
$updated_since = "updated_since_example"; // string | Format - date-time (as date-time in RFC3339). Return only changed data since specific date.
$datasource = "datasource_example"; // string | Use datasource to filter.
$continuation_token = "continuation_token_example"; // string | Use it for get next set of data.
$top = 56; // int | Format - int32. Number of next set of entities.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listCategory($parent_category, $updated_since, $datasource, $continuation_token, $top, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_category** | **string**| Use property identifier of category to filter. | [optional]
 **updated_since** | **string**| Format - date-time (as date-time in RFC3339). Return only changed data since specific date. | [optional]
 **datasource** | **string**| Use datasource to filter. | [optional]
 **continuation_token** | **string**| Use it for get next set of data. | [optional]
 **top** | **int**| Format - int32. Number of next set of entities. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\CategoriesResponse**](../Model/CategoriesResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCivicStructure**
> \Infocenter\Client\Model\CivicStructuresResponse listCivicStructure($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $accept_language)

List CivicStructure

Get the list of the CivicStructures with full detailed information.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = "category_example"; // string | Use property identifier of category to filter.
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$updated_since = "updated_since_example"; // string | Format - date-time (as date-time in RFC3339). Return only changed data since specific date.
$datasource = "datasource_example"; // string | Use datasource to filter.
$continuation_token = "continuation_token_example"; // string | Use it for get next set of data.
$top = 56; // int | Format - int32. Number of next set of entities.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listCivicStructure($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCivicStructure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**| Use property identifier of category to filter. | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **updated_since** | **string**| Format - date-time (as date-time in RFC3339). Return only changed data since specific date. | [optional]
 **datasource** | **string**| Use datasource to filter. | [optional]
 **continuation_token** | **string**| Use it for get next set of data. | [optional]
 **top** | **int**| Format - int32. Number of next set of entities. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\CivicStructuresResponse**](../Model/CivicStructuresResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCondition**
> \Infocenter\Client\Model\ConditionsResponse listCondition($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $accept_language)

List Condition

Get the list of the Conditions with full detailed information.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = "category_example"; // string | Use property identifier of category to filter.
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$updated_since = "updated_since_example"; // string | Format - date-time (as date-time in RFC3339). Return only changed data since specific date.
$datasource = "datasource_example"; // string | Use datasource to filter.
$continuation_token = "continuation_token_example"; // string | Use it for get next set of data.
$top = 56; // int | Format - int32. Number of next set of entities.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listCondition($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCondition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**| Use property identifier of category to filter. | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **updated_since** | **string**| Format - date-time (as date-time in RFC3339). Return only changed data since specific date. | [optional]
 **datasource** | **string**| Use datasource to filter. | [optional]
 **continuation_token** | **string**| Use it for get next set of data. | [optional]
 **top** | **int**| Format - int32. Number of next set of entities. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\ConditionsResponse**](../Model/ConditionsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCreativeWork**
> \Infocenter\Client\Model\CreativeWorksResponse listCreativeWork($updated_since, $datasource, $continuation_token, $top, $accept_language)

List CreativeWork

Get the list of the CreativeWorks with full detailed information.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_since = "updated_since_example"; // string | Format - date-time (as date-time in RFC3339). Return only changed data since specific date.
$datasource = "datasource_example"; // string | Use datasource to filter.
$continuation_token = "continuation_token_example"; // string | Use it for get next set of data.
$top = 56; // int | Format - int32. Number of next set of entities.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listCreativeWork($updated_since, $datasource, $continuation_token, $top, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCreativeWork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updated_since** | **string**| Format - date-time (as date-time in RFC3339). Return only changed data since specific date. | [optional]
 **datasource** | **string**| Use datasource to filter. | [optional]
 **continuation_token** | **string**| Use it for get next set of data. | [optional]
 **top** | **int**| Format - int32. Number of next set of entities. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\CreativeWorksResponse**](../Model/CreativeWorksResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listEvents**
> \Infocenter\Client\Model\EventsResponse listEvents($updated_since, $category, $datasource, $continuation_token, $top, $contained_in_place, $location, $accept_language)

List Events

Get the list of the Events with full detailed information.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_since = "updated_since_example"; // string | Format - date-time (as date-time in RFC3339). Return only changed data since specific date.
$category = "category_example"; // string | Use property identifier of category to filter.
$datasource = "datasource_example"; // string | Use datasource to filter.
$continuation_token = "continuation_token_example"; // string | Use it for get next set of data.
$top = 56; // int | Format - int32. Number of next set of entities.
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter by the region (administrative area).
$location = "location_example"; // string | Use property identifier of place to filter by the location (business).
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listEvents($updated_since, $category, $datasource, $continuation_token, $top, $contained_in_place, $location, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updated_since** | **string**| Format - date-time (as date-time in RFC3339). Return only changed data since specific date. | [optional]
 **category** | **string**| Use property identifier of category to filter. | [optional]
 **datasource** | **string**| Use datasource to filter. | [optional]
 **continuation_token** | **string**| Use it for get next set of data. | [optional]
 **top** | **int**| Format - int32. Number of next set of entities. | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter by the region (administrative area). | [optional]
 **location** | **string**| Use property identifier of place to filter by the location (business). | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\EventsResponse**](../Model/EventsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFoodEstablishment**
> \Infocenter\Client\Model\FoodEstablishmentsResponse listFoodEstablishment($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $accept_language)

List FoodEstablishment

Get the list of the FoodEstablishments with full detailed information.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = "category_example"; // string | Use property identifier of category to filter.
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$updated_since = "updated_since_example"; // string | Format - date-time (as date-time in RFC3339). Return only changed data since specific date.
$datasource = "datasource_example"; // string | Use datasource to filter.
$continuation_token = "continuation_token_example"; // string | Use it for get next set of data.
$top = 56; // int | Format - int32. Number of next set of entities.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listFoodEstablishment($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listFoodEstablishment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**| Use property identifier of category to filter. | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **updated_since** | **string**| Format - date-time (as date-time in RFC3339). Return only changed data since specific date. | [optional]
 **datasource** | **string**| Use datasource to filter. | [optional]
 **continuation_token** | **string**| Use it for get next set of data. | [optional]
 **top** | **int**| Format - int32. Number of next set of entities. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\FoodEstablishmentsResponse**](../Model/FoodEstablishmentsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listImageObject**
> \Infocenter\Client\Model\ImageObjectsResponse listImageObject($updated_since, $datasource, $continuation_token, $top, $accept_language)

List ImageObject

Get the list of the ImageObjects with full detailed information.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_since = "updated_since_example"; // string | Format - date-time (as date-time in RFC3339). Return only changed data since specific date.
$datasource = "datasource_example"; // string | Use datasource to filter.
$continuation_token = "continuation_token_example"; // string | Use it for get next set of data.
$top = 56; // int | Format - int32. Number of next set of entities.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listImageObject($updated_since, $datasource, $continuation_token, $top, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listImageObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updated_since** | **string**| Format - date-time (as date-time in RFC3339). Return only changed data since specific date. | [optional]
 **datasource** | **string**| Use datasource to filter. | [optional]
 **continuation_token** | **string**| Use it for get next set of data. | [optional]
 **top** | **int**| Format - int32. Number of next set of entities. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\ImageObjectsResponse**](../Model/ImageObjectsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listLocalBusiness**
> \Infocenter\Client\Model\LocalBusinessesResponse listLocalBusiness($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $accept_language)

List LocalBusiness

Get the list of the LocalBusinesses with full detailed information.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = "category_example"; // string | Use property identifier of category to filter.
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$updated_since = "updated_since_example"; // string | Format - date-time (as date-time in RFC3339). Return only changed data since specific date.
$datasource = "datasource_example"; // string | Use datasource to filter.
$continuation_token = "continuation_token_example"; // string | Use it for get next set of data.
$top = 56; // int | Format - int32. Number of next set of entities.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listLocalBusiness($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listLocalBusiness: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**| Use property identifier of category to filter. | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **updated_since** | **string**| Format - date-time (as date-time in RFC3339). Return only changed data since specific date. | [optional]
 **datasource** | **string**| Use datasource to filter. | [optional]
 **continuation_token** | **string**| Use it for get next set of data. | [optional]
 **top** | **int**| Format - int32. Number of next set of entities. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\LocalBusinessesResponse**](../Model/LocalBusinessesResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listLodgingBusiness**
> \Infocenter\Client\Model\LodgingBusinessesResponse listLodgingBusiness($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $accept_language)

List LodgingBusiness

Get the list of the LodgingBusinesses with full detailed information.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = "category_example"; // string | Use property identifier of category to filter.
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$updated_since = "updated_since_example"; // string | Format - date-time (as date-time in RFC3339). Return only changed data since specific date.
$datasource = "datasource_example"; // string | Use datasource to filter.
$continuation_token = "continuation_token_example"; // string | Use it for get next set of data.
$top = 56; // int | Format - int32. Number of next set of entities.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listLodgingBusiness($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listLodgingBusiness: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**| Use property identifier of category to filter. | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **updated_since** | **string**| Format - date-time (as date-time in RFC3339). Return only changed data since specific date. | [optional]
 **datasource** | **string**| Use datasource to filter. | [optional]
 **continuation_token** | **string**| Use it for get next set of data. | [optional]
 **top** | **int**| Format - int32. Number of next set of entities. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\LodgingBusinessesResponse**](../Model/LodgingBusinessesResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMediaObject**
> \Infocenter\Client\Model\MediaObjectsResponse listMediaObject($updated_since, $datasource, $continuation_token, $top, $accept_language)

List MediaObject

Get the list of the MediaObjects with full detailed information.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_since = "updated_since_example"; // string | Format - date-time (as date-time in RFC3339). Return only changed data since specific date.
$datasource = "datasource_example"; // string | Use datasource to filter.
$continuation_token = "continuation_token_example"; // string | Use it for get next set of data.
$top = 56; // int | Format - int32. Number of next set of entities.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listMediaObject($updated_since, $datasource, $continuation_token, $top, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMediaObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updated_since** | **string**| Format - date-time (as date-time in RFC3339). Return only changed data since specific date. | [optional]
 **datasource** | **string**| Use datasource to filter. | [optional]
 **continuation_token** | **string**| Use it for get next set of data. | [optional]
 **top** | **int**| Format - int32. Number of next set of entities. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\MediaObjectsResponse**](../Model/MediaObjectsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPlace**
> \Infocenter\Client\Model\PlacesResponse listPlace($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $accept_language)

List Place

Get the list of the Places with full detailed information.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = "category_example"; // string | Use property identifier of category to filter.
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$updated_since = "updated_since_example"; // string | Format - date-time (as date-time in RFC3339). Return only changed data since specific date.
$datasource = "datasource_example"; // string | Use datasource to filter.
$continuation_token = "continuation_token_example"; // string | Use it for get next set of data.
$top = 56; // int | Format - int32. Number of next set of entities.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listPlace($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listPlace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**| Use property identifier of category to filter. | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **updated_since** | **string**| Format - date-time (as date-time in RFC3339). Return only changed data since specific date. | [optional]
 **datasource** | **string**| Use datasource to filter. | [optional]
 **continuation_token** | **string**| Use it for get next set of data. | [optional]
 **top** | **int**| Format - int32. Number of next set of entities. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\PlacesResponse**](../Model/PlacesResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProducts**
> \Infocenter\Client\Model\ProductsResponse listProducts($datasource, $continuation_token, $top, $accept_language)

List Products

Get the list of the Products with full detailed information.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datasource = "datasource_example"; // string | Use datasource to filter.
$continuation_token = "continuation_token_example"; // string | Use it for get next set of Data.
$top = 56; // int | Format - int32. Number of next set of entities.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listProducts($datasource, $continuation_token, $top, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| Use datasource to filter. | [optional]
 **continuation_token** | **string**| Use it for get next set of Data. | [optional]
 **top** | **int**| Format - int32. Number of next set of entities. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\ProductsResponse**](../Model/ProductsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTour**
> \Infocenter\Client\Model\ToursResponse listTour($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $accept_language)

List Tour

Get the list of the Tours with full detailed information.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = "category_example"; // string | Use property identifier of category to filter.
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$updated_since = "updated_since_example"; // string | Format - date-time (as date-time in RFC3339). Return only changed data since specific date.
$datasource = "datasource_example"; // string | Use datasource to filter.
$continuation_token = "continuation_token_example"; // string | Use it for get next set of data.
$top = 56; // int | Format - int32. Number of next set of entities.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listTour($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listTour: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**| Use property identifier of category to filter. | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **updated_since** | **string**| Format - date-time (as date-time in RFC3339). Return only changed data since specific date. | [optional]
 **datasource** | **string**| Use datasource to filter. | [optional]
 **continuation_token** | **string**| Use it for get next set of data. | [optional]
 **top** | **int**| Format - int32. Number of next set of entities. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\ToursResponse**](../Model/ToursResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listWebcams**
> \Infocenter\Client\Model\WebcamsResponse listWebcams($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $accept_language)

List Webcams

Get the list of the Webcams with full detailed information.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = "category_example"; // string | Use property identifier of category to filter.
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$updated_since = "updated_since_example"; // string | Format - date-time (as date-time in RFC3339). Return only changed data since specific date.
$datasource = "datasource_example"; // string | Use datasource to filter.
$continuation_token = "continuation_token_example"; // string | Use it for get next set of data.
$top = 56; // int | Format - int32. Number of next set of entities.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listWebcams($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listWebcams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**| Use property identifier of category to filter. | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **updated_since** | **string**| Format - date-time (as date-time in RFC3339). Return only changed data since specific date. | [optional]
 **datasource** | **string**| Use datasource to filter. | [optional]
 **continuation_token** | **string**| Use it for get next set of data. | [optional]
 **top** | **int**| Format - int32. Number of next set of entities. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\WebcamsResponse**](../Model/WebcamsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **localBusiness**
> \Infocenter\Client\Model\LocalBusiness localBusiness($id, $accept_language)

LocalBusiness

Get the full detailed information of a LocalBusiness object.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Use property identifier of LocalBusiness to get single object.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->localBusiness($id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->localBusiness: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of LocalBusiness to get single object. |
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\LocalBusiness**](../Model/LocalBusiness.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lodgingBusiness**
> \Infocenter\Client\Model\LodgingBusiness lodgingBusiness($id, $accept_language)

LodgingBusiness

Get the full detailed information of a LodgingBusiness object.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Use property identifier of LodgingBusiness to get single object.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->lodgingBusiness($id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->lodgingBusiness: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of LodgingBusiness to get single object. |
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\LodgingBusiness**](../Model/LodgingBusiness.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mediaObject**
> \Infocenter\Client\Model\MediaObject mediaObject($id, $accept_language)

MediaObject

Get the full detailed information of a MediaObject object.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Use property identifier of MediaObject to get single object.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->mediaObject($id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->mediaObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of MediaObject to get single object. |
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\MediaObject**](../Model/MediaObject.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **place**
> \Infocenter\Client\Model\Place place($id, $accept_language)

Place

Get the full detailed information of a Place object.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Use property identifier of Place to get single object.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->place($id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->place: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Place to get single object. |
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\Place**](../Model/Place.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **product**
> \Infocenter\Client\Model\Product product($id, $accept_language)

Product

Get the full detailed information of a Product object.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Use property identifier of Product to get single object.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->product($id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->product: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Product to get single object. |
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\Product**](../Model/Product.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \Infocenter\Client\Model\SearchResponse search($search_text, $current_page, $results_per_page, $order_by, $filters, $accept_language)

Search

Search for the Index objects.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_text = "search_text_example"; // string | Use property for search request text
$current_page = 56; // int | Format - int32. Use property to set number of page
$results_per_page = 56; // int | Format - int32. Use property to set count of results per page
$order_by = "order_by_example"; // string | Use property for ordering
$filters = "filters_example"; // string | Use property for odata filters
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->search($search_text, $current_page, $results_per_page, $order_by, $filters, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_text** | **string**| Use property for search request text | [optional]
 **current_page** | **int**| Format - int32. Use property to set number of page | [optional]
 **results_per_page** | **int**| Format - int32. Use property to set count of results per page | [optional]
 **order_by** | **string**| Use property for ordering | [optional]
 **filters** | **string**| Use property for odata filters | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\SearchResponse**](../Model/SearchResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **termVersion**
> \Infocenter\Client\Model\TermVersion termVersion($code, $accept_language)

TermVersion

Get the full detailed information of a TermVersion object.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | Use property code of TermVersion to get single object.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->termVersion($code, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->termVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Use property code of TermVersion to get single object. |
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\TermVersion**](../Model/TermVersion.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tour**
> \Infocenter\Client\Model\Tour tour($id, $accept_language)

Tour

Get the full detailed information of a Tour object.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Use property identifier of Tour to get single object.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->tour($id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->tour: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Tour to get single object. |
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\Tour**](../Model/Tour.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webcam**
> \Infocenter\Client\Model\Webcam webcam($id, $accept_language)

Webcam

Get the full detailed information of a Webcam object.

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

$apiInstance = new Infocenter\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Use property identifier of Webcam to get single object.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->webcam($id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->webcam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Webcam to get single object. |
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\Webcam**](../Model/Webcam.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

