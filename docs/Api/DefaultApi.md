# Infocenter\Client\DefaultApi

All URIs are relative to *https://api.discover.swiss/test/info/v2*

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
[**getStatusAbout**](DefaultApi.md#getstatusabout) | **GET** /status/about | GetStatusAbout
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
[**listTag**](DefaultApi.md#listtag) | **GET** /tags | List Tag
[**listTimezones**](DefaultApi.md#listtimezones) | **GET** /timezones | List Timezones
[**listTour**](DefaultApi.md#listtour) | **GET** /tours | List Tour
[**listWebcams**](DefaultApi.md#listwebcams) | **GET** /webcams | List Webcams
[**localBusiness**](DefaultApi.md#localbusiness) | **GET** /localbusinesses/{id} | LocalBusiness
[**lodgingBusiness**](DefaultApi.md#lodgingbusiness) | **GET** /lodgingbusinesses/{id} | LodgingBusiness
[**mediaObject**](DefaultApi.md#mediaobject) | **GET** /mediaObjects/{id} | MediaObject
[**place**](DefaultApi.md#place) | **GET** /places/{id} | Place
[**product**](DefaultApi.md#product) | **GET** /products/{id} | Product
[**search**](DefaultApi.md#search) | **POST** /search | Search
[**searchByGET**](DefaultApi.md#searchbyget) | **GET** /search | Search by GET
[**tag**](DefaultApi.md#tag) | **GET** /tags/{id} | Tag
[**termVersion**](DefaultApi.md#termversion) | **GET** /termversions/{code} | TermVersion
[**tour**](DefaultApi.md#tour) | **GET** /tours/{id} | Tour
[**treeAdministrativeAreaRegion**](DefaultApi.md#treeadministrativearearegion) | **GET** /areas/{id}/tree | Tree AdministrativeArea (Region)
[**webcam**](DefaultApi.md#webcam) | **GET** /webcams/{id} | Webcam

# **administrativeAreaRegion**
> \Infocenter\Client\Model\DsAdministrativeArea administrativeAreaRegion($id, $project, $contained_in_place, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->administrativeAreaRegion($id, $project, $contained_in_place, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsAdministrativeArea**](../Model/DsAdministrativeArea.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **category**
> \Infocenter\Client\Model\DsCategory category($id, $project, $contained_in_place, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->category($id, $project, $contained_in_place, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsCategory**](../Model/DsCategory.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryTree**
> \Infocenter\Client\Model\DsCategoryTreeItem categoryTree($id, $accept_language, $accept_timezone)

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
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->categoryTree($id, $accept_language, $accept_timezone);
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
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsCategoryTreeItem**](../Model/DsCategoryTreeItem.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **civicStructure**
> \Infocenter\Client\Model\DsCivicStructure civicStructure($id, $project, $contained_in_place, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->civicStructure($id, $project, $contained_in_place, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsCivicStructure**](../Model/DsCivicStructure.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **condition**
> \Infocenter\Client\Model\DsCondition condition($id, $project, $contained_in_place, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->condition($id, $project, $contained_in_place, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsCondition**](../Model/DsCondition.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creativeWork**
> \Infocenter\Client\Model\DsCreativeWork creativeWork($id, $project, $contained_in_place, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->creativeWork($id, $project, $contained_in_place, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsCreativeWork**](../Model/DsCreativeWork.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currentTermVersion**
> \Infocenter\Client\Model\DsTermVersion currentTermVersion($term_code, $accept_language, $accept_timezone)

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
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->currentTermVersion($term_code, $accept_language, $accept_timezone);
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
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsTermVersion**](../Model/DsTermVersion.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **event**
> \Infocenter\Client\Model\DsEvent event($id, $project, $contained_in_place, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->event($id, $project, $contained_in_place, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsEvent**](../Model/DsEvent.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foodEstablishment**
> \Infocenter\Client\Model\DsFoodEstablishment foodEstablishment($id, $project, $contained_in_place, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->foodEstablishment($id, $project, $contained_in_place, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsFoodEstablishment**](../Model/DsFoodEstablishment.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatus**
> \Infocenter\Client\Model\DsStatusGet200TextPlainResponse getStatus()

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
    $result = $apiInstance->getStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Infocenter\Client\Model\DsStatusGet200TextPlainResponse**](../Model/DsStatusGet200TextPlainResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatusAbout**
> \Infocenter\Client\Model\DsStatusResponse getStatusAbout()

GetStatusAbout

Get API Status, Version and Name

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
    $result = $apiInstance->getStatusAbout();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStatusAbout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Infocenter\Client\Model\DsStatusResponse**](../Model/DsStatusResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageObject**
> \Infocenter\Client\Model\DsImageObject imageObject($id, $project, $contained_in_place, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->imageObject($id, $project, $contained_in_place, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsImageObject**](../Model/DsImageObject.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAdministrativeAreaRegion**
> \Infocenter\Client\Model\DsAdministrativeAreasResponse listAdministrativeAreaRegion($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $admin_areas_only, $root_objects_only, $accept_timezone, $accept_language)

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
$project = "project_example"; // string | Use this property to filter objects by project
$select = "select_example"; // string | Pass list of object properties to query
$include_count = true; // bool | Pass 'true' if you want to get total filtered items count in response
$admin_areas_only = "admin_areas_only_example"; // string | set to true all types of areas are included. This kind of destroys the tree structure and combined with high levels the performance is bad. default = false (works only in combination with rootObjectsOnly).
$root_objects_only = true; // bool | Pass 'true' if you want to get only root areas.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listAdministrativeAreaRegion($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $admin_areas_only, $root_objects_only, $accept_timezone, $accept_language);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **select** | **string**| Pass list of object properties to query | [optional]
 **include_count** | **bool**| Pass &#x27;true&#x27; if you want to get total filtered items count in response | [optional]
 **admin_areas_only** | **string**| set to true all types of areas are included. This kind of destroys the tree structure and combined with high levels the performance is bad. default &#x3D; false (works only in combination with rootObjectsOnly). | [optional]
 **root_objects_only** | **bool**| Pass &#x27;true&#x27; if you want to get only root areas. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\DsAdministrativeAreasResponse**](../Model/DsAdministrativeAreasResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCategory**
> \Infocenter\Client\Model\DsCategoriesResponse listCategory($parent_category, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $root_objects_only, $accept_language)

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
$project = "project_example"; // string | Use this property to filter objects by project
$select = "select_example"; // string | Pass list of object properties to query
$include_count = true; // bool | Pass 'true' if you want to get total filtered items count in response
$root_objects_only = true; // bool | Pass 'true' if you want to get only root categories.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listCategory($parent_category, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $root_objects_only, $accept_language);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **select** | **string**| Pass list of object properties to query | [optional]
 **include_count** | **bool**| Pass &#x27;true&#x27; if you want to get total filtered items count in response | [optional]
 **root_objects_only** | **bool**| Pass &#x27;true&#x27; if you want to get only root categories. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\DsCategoriesResponse**](../Model/DsCategoriesResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCivicStructure**
> \Infocenter\Client\Model\DsCivicStructuresResponse listCivicStructure($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$select = "select_example"; // string | Pass list of object properties to query
$include_count = true; // bool | Pass 'true' if you want to get total filtered items count in response
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->listCivicStructure($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **select** | **string**| Pass list of object properties to query | [optional]
 **include_count** | **bool**| Pass &#x27;true&#x27; if you want to get total filtered items count in response | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsCivicStructuresResponse**](../Model/DsCivicStructuresResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCondition**
> \Infocenter\Client\Model\DsConditionsResponse listCondition($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_timezone, $accept_language)

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
$project = "project_example"; // string | Use this property to filter objects by project
$select = "select_example"; // string | Pass list of object properties to query
$include_count = true; // bool | Pass 'true' if you want to get total filtered items count in response
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listCondition($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_timezone, $accept_language);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **select** | **string**| Pass list of object properties to query | [optional]
 **include_count** | **bool**| Pass &#x27;true&#x27; if you want to get total filtered items count in response | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\DsConditionsResponse**](../Model/DsConditionsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCreativeWork**
> \Infocenter\Client\Model\DsCreativeWorksResponse listCreativeWork($updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$select = "select_example"; // string | Pass list of object properties to query
$include_count = true; // bool | Pass 'true' if you want to get total filtered items count in response
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->listCreativeWork($updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **select** | **string**| Pass list of object properties to query | [optional]
 **include_count** | **bool**| Pass &#x27;true&#x27; if you want to get total filtered items count in response | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsCreativeWorksResponse**](../Model/DsCreativeWorksResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listEvents**
> \Infocenter\Client\Model\DsEventsResponse listEvents($updated_since, $category, $datasource, $continuation_token, $top, $contained_in_place, $location, $project, $select, $include_count, $accept_timezone, $accept_language)

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
$project = "project_example"; // string | Use this property to filter objects by project
$select = "select_example"; // string | Pass list of object properties to query
$include_count = true; // bool | Pass 'true' if you want to get total filtered items count in response
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listEvents($updated_since, $category, $datasource, $continuation_token, $top, $contained_in_place, $location, $project, $select, $include_count, $accept_timezone, $accept_language);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **select** | **string**| Pass list of object properties to query | [optional]
 **include_count** | **bool**| Pass &#x27;true&#x27; if you want to get total filtered items count in response | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\DsEventsResponse**](../Model/DsEventsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFoodEstablishment**
> \Infocenter\Client\Model\DsFoodEstablishmentsResponse listFoodEstablishment($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$select = "select_example"; // string | Pass list of object properties to query
$include_count = true; // bool | Pass 'true' if you want to get total filtered items count in response
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->listFoodEstablishment($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **select** | **string**| Pass list of object properties to query | [optional]
 **include_count** | **bool**| Pass &#x27;true&#x27; if you want to get total filtered items count in response | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsFoodEstablishmentsResponse**](../Model/DsFoodEstablishmentsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listImageObject**
> \Infocenter\Client\Model\DsImageObjectsResponse listImageObject($updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$select = "select_example"; // string | Pass list of object properties to query
$include_count = true; // bool | Pass 'true' if you want to get total filtered items count in response
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->listImageObject($updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **select** | **string**| Pass list of object properties to query | [optional]
 **include_count** | **bool**| Pass &#x27;true&#x27; if you want to get total filtered items count in response | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsImageObjectsResponse**](../Model/DsImageObjectsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listLocalBusiness**
> \Infocenter\Client\Model\DsLocalBusinessesResponse listLocalBusiness($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$select = "select_example"; // string | Pass list of object properties to query
$include_count = true; // bool | Pass 'true' if you want to get total filtered items count in response
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->listLocalBusiness($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **select** | **string**| Pass list of object properties to query | [optional]
 **include_count** | **bool**| Pass &#x27;true&#x27; if you want to get total filtered items count in response | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsLocalBusinessesResponse**](../Model/DsLocalBusinessesResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listLodgingBusiness**
> \Infocenter\Client\Model\DsLodgingBusinessesResponse listLodgingBusiness($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$select = "select_example"; // string | Pass list of object properties to query
$include_count = true; // bool | Pass 'true' if you want to get total filtered items count in response
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->listLodgingBusiness($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **select** | **string**| Pass list of object properties to query | [optional]
 **include_count** | **bool**| Pass &#x27;true&#x27; if you want to get total filtered items count in response | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsLodgingBusinessesResponse**](../Model/DsLodgingBusinessesResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMediaObject**
> \Infocenter\Client\Model\DsMediaObjectsResponse listMediaObject($updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$select = "select_example"; // string | Pass list of object properties to query
$include_count = true; // bool | Pass 'true' if you want to get total filtered items count in response
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->listMediaObject($updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **select** | **string**| Pass list of object properties to query | [optional]
 **include_count** | **bool**| Pass &#x27;true&#x27; if you want to get total filtered items count in response | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsMediaObjectsResponse**](../Model/DsMediaObjectsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPlace**
> \Infocenter\Client\Model\DsPlacesResponse listPlace($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$select = "select_example"; // string | Pass list of object properties to query
$include_count = true; // bool | Pass 'true' if you want to get total filtered items count in response
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->listPlace($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **select** | **string**| Pass list of object properties to query | [optional]
 **include_count** | **bool**| Pass &#x27;true&#x27; if you want to get total filtered items count in response | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsPlacesResponse**](../Model/DsPlacesResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProducts**
> \Infocenter\Client\Model\DsProductsResponse listProducts($datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language)

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
$project = "project_example"; // string | Use this property to filter objects by project
$select = "select_example"; // string | Pass list of object properties to query
$include_count = true; // bool | Pass 'true' if you want to get total filtered items count in response
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->listProducts($datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **select** | **string**| Pass list of object properties to query | [optional]
 **include_count** | **bool**| Pass &#x27;true&#x27; if you want to get total filtered items count in response | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\DsProductsResponse**](../Model/DsProductsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTag**
> \Infocenter\Client\Model\DsTagsResponse listTag($updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone)

List Tag

Get the list of the Tags with full detailed information.

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
$project = "project_example"; // string | Use this property to filter objects by project
$select = "select_example"; // string | Pass list of object properties to query
$include_count = true; // bool | Pass 'true' if you want to get total filtered items count in response
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->listTag($updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listTag: ', $e->getMessage(), PHP_EOL;
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **select** | **string**| Pass list of object properties to query | [optional]
 **include_count** | **bool**| Pass &#x27;true&#x27; if you want to get total filtered items count in response | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsTagsResponse**](../Model/DsTagsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTimezones**
> \Infocenter\Client\Model\DsTimeZoneResponseArray listTimezones()

List Timezones

Get the list of the timezones.

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
    $result = $apiInstance->listTimezones();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listTimezones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Infocenter\Client\Model\DsTimeZoneResponseArray**](../Model/DsTimeZoneResponseArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTour**
> \Infocenter\Client\Model\DsToursResponse listTour($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$select = "select_example"; // string | Pass list of object properties to query
$include_count = true; // bool | Pass 'true' if you want to get total filtered items count in response
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->listTour($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **select** | **string**| Pass list of object properties to query | [optional]
 **include_count** | **bool**| Pass &#x27;true&#x27; if you want to get total filtered items count in response | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsToursResponse**](../Model/DsToursResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listWebcams**
> \Infocenter\Client\Model\DsWebcamsResponse listWebcams($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$select = "select_example"; // string | Pass list of object properties to query
$include_count = true; // bool | Pass 'true' if you want to get total filtered items count in response
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->listWebcams($category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **select** | **string**| Pass list of object properties to query | [optional]
 **include_count** | **bool**| Pass &#x27;true&#x27; if you want to get total filtered items count in response | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsWebcamsResponse**](../Model/DsWebcamsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **localBusiness**
> \Infocenter\Client\Model\DsLocalBusiness localBusiness($id, $project, $contained_in_place, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->localBusiness($id, $project, $contained_in_place, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsLocalBusiness**](../Model/DsLocalBusiness.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lodgingBusiness**
> \Infocenter\Client\Model\DsLodgingBusiness lodgingBusiness($id, $project, $contained_in_place, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->lodgingBusiness($id, $project, $contained_in_place, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsLodgingBusiness**](../Model/DsLodgingBusiness.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mediaObject**
> \Infocenter\Client\Model\DsMediaObject mediaObject($id, $project, $contained_in_place, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->mediaObject($id, $project, $contained_in_place, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsMediaObject**](../Model/DsMediaObject.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **place**
> \Infocenter\Client\Model\DsPlace place($id, $project, $contained_in_place, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->place($id, $project, $contained_in_place, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsPlace**](../Model/DsPlace.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **product**
> \Infocenter\Client\Model\DsProduct product($id, $project, $contained_in_place, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->product($id, $project, $contained_in_place, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsProduct**](../Model/DsProduct.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \Infocenter\Client\Model\DsSearchResponse search($body, $accept_language, $accept_timezone)

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
$body = new \Infocenter\Client\Model\DsExtendedSearchRequest(); // \Infocenter\Client\Model\DsExtendedSearchRequest | 
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->search($body, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infocenter\Client\Model\DsExtendedSearchRequest**](../Model/DsExtendedSearchRequest.md)|  | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsSearchResponse**](../Model/DsSearchResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchByGET**
> \Infocenter\Client\Model\DsSearchResponse searchByGET($search_text, $current_page, $results_per_page, $order_by, $filters, $accept_language, $accept_timezone)

Search by GET

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
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->searchByGET($search_text, $current_page, $results_per_page, $order_by, $filters, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchByGET: ', $e->getMessage(), PHP_EOL;
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
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsSearchResponse**](../Model/DsSearchResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tag**
> \Infocenter\Client\Model\DsTag tag($id, $project, $accept_language, $accept_timezone)

Tag

Get the full detailed information of a Tag object.

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
$id = "id_example"; // string | Use property identifier of Tag to get single object.
$project = "project_example"; // string | Use this property to filter objects by project
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->tag($id, $project, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->tag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Tag to get single object. |
 **project** | **string**| Use this property to filter objects by project | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsTag**](../Model/DsTag.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **termVersion**
> \Infocenter\Client\Model\DsTermVersion termVersion($code, $accept_language, $accept_timezone)

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
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->termVersion($code, $accept_language, $accept_timezone);
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
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsTermVersion**](../Model/DsTermVersion.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tour**
> \Infocenter\Client\Model\DsTour tour($id, $project, $contained_in_place, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->tour($id, $project, $contained_in_place, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsTour**](../Model/DsTour.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **treeAdministrativeAreaRegion**
> \Infocenter\Client\Model\DsAdministrativeAreaTreeItem treeAdministrativeAreaRegion($id, $levels, $admin_areas_only, $accept_timezone, $accept_language)

Tree AdministrativeArea (Region)

Get a tree of the Regions with the most important information started from defined Region.

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
$id = "id_example"; // string | Use property identifier of Region to set root Region.
$levels = "levels_example"; // string | controls how deep the tree should go. default = 1
$admin_areas_only = "admin_areas_only_example"; // string | set to true all types of areas are included. This kind of destroys the tree structure and combined with high levels the performance is bad. default = false
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->treeAdministrativeAreaRegion($id, $levels, $admin_areas_only, $accept_timezone, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->treeAdministrativeAreaRegion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Region to set root Region. |
 **levels** | **string**| controls how deep the tree should go. default &#x3D; 1 | [optional]
 **admin_areas_only** | **string**| set to true all types of areas are included. This kind of destroys the tree structure and combined with high levels the performance is bad. default &#x3D; false | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\DsAdministrativeAreaTreeItem**](../Model/DsAdministrativeAreaTreeItem.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webcam**
> \Infocenter\Client\Model\DsWebcam webcam($id, $project, $contained_in_place, $accept_language, $accept_timezone)

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
$project = "project_example"; // string | Use this property to filter objects by project
$contained_in_place = "contained_in_place_example"; // string | Use property identifier of place to filter.
$accept_language = "accept_language_example"; // string | Localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates and times

try {
    $result = $apiInstance->webcam($id, $project, $contained_in_place, $accept_language, $accept_timezone);
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
 **project** | **string**| Use this property to filter objects by project | [optional]
 **contained_in_place** | **string**| Use property identifier of place to filter. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates and times | [optional]

### Return type

[**\Infocenter\Client\Model\DsWebcam**](../Model/DsWebcam.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

