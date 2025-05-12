# Infocenter\Client\DefaultApi

All URIs are relative to *https://api.discover.swiss/test/info/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accommodation**](DefaultApi.md#accommodation) | **GET** /accommodations/{id} | Accommodation
[**administrativeAreaRegion**](DefaultApi.md#administrativearearegion) | **GET** /areas/{id} | AdministrativeArea (Region)
[**administrativeAreaRegionDailyForecast**](DefaultApi.md#administrativearearegiondailyforecast) | **GET** /areas/{id}/weather/forecast/daily | AdministrativeArea (Region) daily forecast
[**administrativeAreaRegionHourlyForecast**](DefaultApi.md#administrativearearegionhourlyforecast) | **GET** /areas/{id}/weather/forecast/hourly | AdministrativeArea (Region) hourly forecast
[**administrativeAreaRegionWeather**](DefaultApi.md#administrativearearegionweather) | **GET** /areas/{id}/weather | AdministrativeArea (Region) weather
[**amenity**](DefaultApi.md#amenity) | **GET** /amenities/{id} | Amenity
[**audioObject**](DefaultApi.md#audioobject) | **GET** /audioObjects/{id} | AudioObject
[**award**](DefaultApi.md#award) | **GET** /awards/{id} | Award
[**category**](DefaultApi.md#category) | **GET** /categories/{id} | Category
[**categoryTree**](DefaultApi.md#categorytree) | **GET** /categories/{id}/tree | Category Tree
[**civicStructure**](DefaultApi.md#civicstructure) | **GET** /civicStructures/{id} | CivicStructure
[**civicStructureDailyForecast**](DefaultApi.md#civicstructuredailyforecast) | **GET** /civicStructures/{id}/weather/forecast/daily | CivicStructure daily forecast
[**civicStructureHourlyForecast**](DefaultApi.md#civicstructurehourlyforecast) | **GET** /civicStructures/{id}/weather/forecast/hourly | CivicStructure hourly forecast
[**civicStructureWeather**](DefaultApi.md#civicstructureweather) | **GET** /civicStructures/{id}/weather | CivicStructure weather
[**condition**](DefaultApi.md#condition) | **GET** /conditions/{id} | Condition
[**conditionDailyForecast**](DefaultApi.md#conditiondailyforecast) | **GET** /conditions/{id}/weather/forecast/daily | Condition daily forecast
[**conditionHourlyForecast**](DefaultApi.md#conditionhourlyforecast) | **GET** /conditions/{id}/weather/forecast/hourly | Condition hourly forecast
[**conditionWeather**](DefaultApi.md#conditionweather) | **GET** /conditions/{id}/weather | Condition weather
[**creativeWork**](DefaultApi.md#creativework) | **GET** /creativeWorks/{id} | CreativeWork
[**currentTermVersion**](DefaultApi.md#currenttermversion) | **GET** /termversions/{termCode}/currentVersion | Current TermVersion
[**event**](DefaultApi.md#event) | **GET** /events/{id} | Event
[**eventDailyForecast**](DefaultApi.md#eventdailyforecast) | **GET** /events/{id}/weather/forecast/daily | Event daily forecast
[**eventHourlyForecast**](DefaultApi.md#eventhourlyforecast) | **GET** /events/{id}/weather/forecast/hourly | Event hourly forecast
[**eventWeather**](DefaultApi.md#eventweather) | **GET** /events/{id}/weather | Event weather
[**foodEstablishment**](DefaultApi.md#foodestablishment) | **GET** /foodEstablishments/{id} | FoodEstablishment
[**foodEstablishmentWeather**](DefaultApi.md#foodestablishmentweather) | **GET** /foodEstablishments/{id}/weather | FoodEstablishment weather
[**foodEstablishmentWeatherDailyForecast**](DefaultApi.md#foodestablishmentweatherdailyforecast) | **GET** /foodEstablishments/{id}/weather/forecast/daily | FoodEstablishment weather daily forecast
[**foodEstablishmentWeatherHourlyForecast**](DefaultApi.md#foodestablishmentweatherhourlyforecast) | **GET** /foodEstablishments/{id}/weather/forecast/hourly | FoodEstablishment weather hourly forecast
[**getStatus**](DefaultApi.md#getstatus) | **GET** /status | GetStatus
[**getStatusAbout**](DefaultApi.md#getstatusabout) | **GET** /status/about | GetStatusAbout
[**getTheCurrentTermVersionsOfThePartner**](DefaultApi.md#getthecurrenttermversionsofthepartner) | **GET** /partners/{partnerAcronym}/terms/currentVersion | Get the current TermVersions of the partner
[**imageObject**](DefaultApi.md#imageobject) | **GET** /imageObjects/{id} | ImageObject
[**listAccommodation**](DefaultApi.md#listaccommodation) | **GET** /accommodations | List Accommodation
[**listAdministrativeAreaRegion**](DefaultApi.md#listadministrativearearegion) | **GET** /areas | List AdministrativeArea (Region)
[**listAmenities**](DefaultApi.md#listamenities) | **GET** /amenities | List Amenities
[**listAudioObject**](DefaultApi.md#listaudioobject) | **GET** /audioObjects | List AudioObject
[**listAward**](DefaultApi.md#listaward) | **GET** /awards | List Award
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
[**listProductsPOST**](DefaultApi.md#listproductspost) | **POST** /getProducts | List Products (POST)
[**listReview**](DefaultApi.md#listreview) | **GET** /reviews | List Review
[**listSkiResort**](DefaultApi.md#listskiresort) | **GET** /skiresorts | List SkiResort
[**listTag**](DefaultApi.md#listtag) | **GET** /tags | List Tag
[**listTimezones**](DefaultApi.md#listtimezones) | **GET** /timezones | List Timezones
[**listTour**](DefaultApi.md#listtour) | **GET** /tours | List Tour
[**listTransportationSystem**](DefaultApi.md#listtransportationsystem) | **GET** /transportationSystems | List TransportationSystem
[**listVideoObject**](DefaultApi.md#listvideoobject) | **GET** /videoObjects | List VideoObject
[**listWebcams**](DefaultApi.md#listwebcams) | **GET** /webcams | List Webcams
[**localBusiness**](DefaultApi.md#localbusiness) | **GET** /localbusinesses/{id} | LocalBusiness
[**localBusinessDailyForecast**](DefaultApi.md#localbusinessdailyforecast) | **GET** /localbusinesses/{id}/weather/forecast/daily | LocalBusiness daily forecast
[**localBusinessHourlyForecast**](DefaultApi.md#localbusinesshourlyforecast) | **GET** /localbusinesses/{id}/weather/forecast/hourly | LocalBusiness hourly forecast
[**localBusinessWeather**](DefaultApi.md#localbusinessweather) | **GET** /localbusinesses/{id}/weather | LocalBusiness weather
[**lodgingBusiness**](DefaultApi.md#lodgingbusiness) | **GET** /lodgingbusinesses/{id} | LodgingBusiness
[**lodgingBusinessDailyForecast**](DefaultApi.md#lodgingbusinessdailyforecast) | **GET** /lodgingbusinesses/{id}/weather/forecast/daily | LodgingBusiness daily forecast
[**lodgingBusinessHourlyForecast**](DefaultApi.md#lodgingbusinesshourlyforecast) | **GET** /lodgingbusinesses/{id}/weather/forecast/hourly | LodgingBusiness hourly forecast
[**lodgingBusinessWeather**](DefaultApi.md#lodgingbusinessweather) | **GET** /lodgingbusinesses/{id}/weather | LodgingBusiness weather
[**mediaObject**](DefaultApi.md#mediaobject) | **GET** /mediaObjects/{id} | MediaObject
[**place**](DefaultApi.md#place) | **GET** /places/{id} | Place
[**placeDailyForecast**](DefaultApi.md#placedailyforecast) | **GET** /places/{id}/weather/forecast/daily | Place daily forecast
[**placeHourlyForecast**](DefaultApi.md#placehourlyforecast) | **GET** /places/{id}/weather/forecast/hourly | Place hourly forecast
[**placeWeather**](DefaultApi.md#placeweather) | **GET** /places/{id}/weather | Place weather
[**product**](DefaultApi.md#product) | **GET** /products/{id} | Product
[**productByProductVariantId**](DefaultApi.md#productbyproductvariantid) | **GET** /productVariants/{productVariantId}/products | Product by ProductVariantId
[**review**](DefaultApi.md#review) | **GET** /reviews/{id} | Review
[**search**](DefaultApi.md#search) | **POST** /search | Search
[**searchByGET**](DefaultApi.md#searchbyget) | **GET** /search | Search by GET
[**searchByGETForPdf**](DefaultApi.md#searchbygetforpdf) | **GET** /search/pdf/{templateProject}/{template} | Search by GET for pdf
[**searchByPOSTForPdf**](DefaultApi.md#searchbypostforpdf) | **POST** /search/pdf/{templateProject}/{template} | Search by POST for pdf
[**skiResort**](DefaultApi.md#skiresort) | **GET** /skiresorts/{id} | SkiResort
[**skiResortDailyForecast**](DefaultApi.md#skiresortdailyforecast) | **GET** /skiresorts/{id}/weather/forecast/daily | SkiResort daily forecast
[**skiResortHourlyForecast**](DefaultApi.md#skiresorthourlyforecast) | **GET** /skiresorts/{id}/weather/forecast/hourly | SkiResort hourly forecast
[**skiResortWeather**](DefaultApi.md#skiresortweather) | **GET** /skiresorts/{id}/weather | SkiResort weather
[**tag**](DefaultApi.md#tag) | **GET** /tags/{id} | Tag
[**termVersion**](DefaultApi.md#termversion) | **GET** /termversions/{code} | TermVersion
[**tour**](DefaultApi.md#tour) | **GET** /tours/{id} | Tour
[**tourDailyForecast**](DefaultApi.md#tourdailyforecast) | **GET** /tours/{id}/weather/forecast/daily | Tour daily forecast
[**tourHourlyForecast**](DefaultApi.md#tourhourlyforecast) | **GET** /tours/{id}/weather/forecast/hourly | Tour hourly forecast
[**tourWeather**](DefaultApi.md#tourweather) | **GET** /tours/{id}/weather | Tour weather
[**transportationSystem**](DefaultApi.md#transportationsystem) | **GET** /transportationSystems/{id} | TransportationSystem
[**transportationSystemDailyForecast**](DefaultApi.md#transportationsystemdailyforecast) | **GET** /transportationSystems/{id}/weather/forecast/daily | TransportationSystem daily forecast
[**transportationSystemHourlyForecast**](DefaultApi.md#transportationsystemhourlyforecast) | **GET** /transportationSystems/{id}/weather/forecast/hourly | TransportationSystem hourly forecast
[**transportationSystemWeather**](DefaultApi.md#transportationsystemweather) | **GET** /transportationSystems/{id}/weather | TransportationSystem weather
[**treeAdministrativeAreaRegion**](DefaultApi.md#treeadministrativearearegion) | **GET** /areas/{id}/tree | Tree AdministrativeArea (Region)
[**typeTree**](DefaultApi.md#typetree) | **GET** /types/tree | Type Tree
[**videoObject**](DefaultApi.md#videoobject) | **GET** /videoObjects/{id} | VideoObject
[**webcam**](DefaultApi.md#webcam) | **GET** /webcams/{id} | Webcam
[**webcamDailyForecast**](DefaultApi.md#webcamdailyforecast) | **GET** /webcams/{id}/weather/forecast/daily | Webcam daily forecast
[**webcamHourlyForecast**](DefaultApi.md#webcamhourlyforecast) | **GET** /webcams/{id}/weather/forecast/hourly | Webcam hourly forecast
[**webcamWeather**](DefaultApi.md#webcamweather) | **GET** /webcams/{id}/weather | Webcam weather

# **accommodation**
> \Infocenter\Client\Model\DsAccommodation accommodation($id, $ocp_apim_subscription_key, $project, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

Accommodation

Get the full detailed information of an Accommodation object.

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
$id = "id_example"; // string | Use property identifier of Accommodation to get single object.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->accommodation($id, $ocp_apim_subscription_key, $project, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->accommodation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Accommodation to get single object. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsAccommodation**](../Model/DsAccommodation.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **administrativeAreaRegion**
> \Infocenter\Client\Model\DsAdministrativeArea administrativeAreaRegion($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $accept_language, $accept_timezone, $scope, $ds_contained_in_place_filter)

AdministrativeArea (Region)

Get the full detailed information of an Region object.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.

try {
    $result = $apiInstance->administrativeAreaRegion($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $accept_language, $accept_timezone, $scope, $ds_contained_in_place_filter);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]

### Return type

[**\Infocenter\Client\Model\DsAdministrativeArea**](../Model/DsAdministrativeArea.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **administrativeAreaRegionDailyForecast**
> \Infocenter\Client\Model\DsDailyForecast[] administrativeAreaRegionDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

AdministrativeArea (Region) daily forecast

Get the full detailed information about the weather daily forecast for the AdministrativeArea object.

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
$id = "id_example"; // string | Use property identifier of AdministrativeArea to get the weather daily forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:<br>`1` - Return forecast data for the next day. Returned by default.<br>`5` - Return forecast data for the next 5 days.<br>`10` - Return forecast data for the next 10 days.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->administrativeAreaRegionDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->administrativeAreaRegionDailyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of AdministrativeArea to get the weather daily forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next day. Returned by default.&lt;br&gt;&#x60;5&#x60; - Return forecast data for the next 5 days.&lt;br&gt;&#x60;10&#x60; - Return forecast data for the next 10 days. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsDailyForecast[]**](../Model/DsDailyForecast.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **administrativeAreaRegionHourlyForecast**
> \Infocenter\Client\Model\DsHourlyForecastArray administrativeAreaRegionHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

AdministrativeArea (Region) hourly forecast

Get the full detailed information about the weather hourly forecast for the AdministrativeArea object.

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
$id = "id_example"; // string | Use property identifier of AdministrativeArea to get the weather hourly forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:<br>`1` - Return forecast data for the next hour. Default value.<br>`12` - Return hourly forecast for next 12 hours.<br>`24` - Return hourly forecast for next 24 hours.<br>`72` - Return hourly forecast for next 72 hours (3 days).
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->administrativeAreaRegionHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->administrativeAreaRegionHourlyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of AdministrativeArea to get the weather hourly forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next hour. Default value.&lt;br&gt;&#x60;12&#x60; - Return hourly forecast for next 12 hours.&lt;br&gt;&#x60;24&#x60; - Return hourly forecast for next 24 hours.&lt;br&gt;&#x60;72&#x60; - Return hourly forecast for next 72 hours (3 days). | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsHourlyForecastArray**](../Model/DsHourlyForecastArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **administrativeAreaRegionWeather**
> \Infocenter\Client\Model\DsWeatherArray administrativeAreaRegionWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone)

AdministrativeArea (Region) weather

Get the full detailed information about the weather for the AdministrativeArea object.

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
$id = "id_example"; // string | Use property identifier of AdministrativeArea to get the weather information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:<br>`0` - Return the most current weather conditions. Default value.<br>`6` - Return weather conditions from past 6 hours.<br>`24` - Return weather conditions from past 24 hours.
$details = true; // bool | Returns full details for the current conditions, `false` by default.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->administrativeAreaRegionWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->administrativeAreaRegionWeather: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of AdministrativeArea to get the weather information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:&lt;br&gt;&#x60;0&#x60; - Return the most current weather conditions. Default value.&lt;br&gt;&#x60;6&#x60; - Return weather conditions from past 6 hours.&lt;br&gt;&#x60;24&#x60; - Return weather conditions from past 24 hours. | [optional]
 **details** | **bool**| Returns full details for the current conditions, &#x60;false&#x60; by default. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsWeatherArray**](../Model/DsWeatherArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **amenity**
> \Infocenter\Client\Model\DsLocationFeatureSpecification amenity($id, $ocp_apim_subscription_key, $accept_language)

Amenity

Get the full detailed information of an Amenity object.

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
$id = "id_example"; // string | Use property identifier of Amenity to get single object.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.

try {
    $result = $apiInstance->amenity($id, $ocp_apim_subscription_key, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->amenity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Amenity to get single object. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\DsLocationFeatureSpecification**](../Model/DsLocationFeatureSpecification.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **audioObject**
> \Infocenter\Client\Model\DsAudioObject audioObject($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $accept_language, $accept_timezone, $scope)

AudioObject

Get the full detailed information of an AudioObject object.

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
$id = "id_example"; // string | Use property identifier of AudioObject to get single object.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).

try {
    $result = $apiInstance->audioObject($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $accept_language, $accept_timezone, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->audioObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of AudioObject to get single object. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]

### Return type

[**\Infocenter\Client\Model\DsAudioObject**](../Model/DsAudioObject.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **award**
> \Infocenter\Client\Model\DsAward award($id, $ocp_apim_subscription_key, $project, $select, $accept_language, $accept_timezone, $scope)

Award

Get the full detailed information of an Award object.

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
$id = "id_example"; // string | Use property identifier of Award to get single object.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).

try {
    $result = $apiInstance->award($id, $ocp_apim_subscription_key, $project, $select, $accept_language, $accept_timezone, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->award: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Award to get single object. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]

### Return type

[**\Infocenter\Client\Model\DsAward**](../Model/DsAward.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **category**
> \Infocenter\Client\Model\DsCategory category($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $accept_language, $accept_timezone, $scope)

Category

Get the full detailed information of an Category object.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).

try {
    $result = $apiInstance->category($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $accept_language, $accept_timezone, $scope);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]

### Return type

[**\Infocenter\Client\Model\DsCategory**](../Model/DsCategory.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryTree**
> \Infocenter\Client\Model\DsCategoryTreeItem categoryTree($id, $ocp_apim_subscription_key, $select, $accept_language, $accept_timezone, $scope)

Category Tree

Get the full detailed information of an Category tree.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).

try {
    $result = $apiInstance->categoryTree($id, $ocp_apim_subscription_key, $select, $accept_language, $accept_timezone, $scope);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]

### Return type

[**\Infocenter\Client\Model\DsCategoryTreeItem**](../Model/DsCategoryTreeItem.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **civicStructure**
> \Infocenter\Client\Model\DsCivicStructure civicStructure($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

CivicStructure

Get the full detailed information of an CivicStructure object.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->civicStructure($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsCivicStructure**](../Model/DsCivicStructure.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **civicStructureDailyForecast**
> \Infocenter\Client\Model\DsDailyForecast[] civicStructureDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

CivicStructure daily forecast

Get the full detailed information about the weather daily forecast for a CivicStructure object.

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
$id = "id_example"; // string | Use property identifier of CivicStructure to get the weather daily forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:<br>`1` - Return forecast data for the next day. Returned by default.<br>`5` - Return forecast data for the next 5 days.<br>`10` - Return forecast data for the next 10 days.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->civicStructureDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->civicStructureDailyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of CivicStructure to get the weather daily forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next day. Returned by default.&lt;br&gt;&#x60;5&#x60; - Return forecast data for the next 5 days.&lt;br&gt;&#x60;10&#x60; - Return forecast data for the next 10 days. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsDailyForecast[]**](../Model/DsDailyForecast.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **civicStructureHourlyForecast**
> \Infocenter\Client\Model\DsHourlyForecastArray civicStructureHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

CivicStructure hourly forecast

Get the full detailed information about the weather hourly forecast for a CivicStructure object.

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
$id = "id_example"; // string | Use property identifier of CivicStructure to get the weather hourly forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:<br>`1` - Return forecast data for the next hour. Default value.<br>`12` - Return hourly forecast for next 12 hours.<br>`24` - Return hourly forecast for next 24 hours.<br>`72` - Return hourly forecast for next 72 hours (3 days).
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->civicStructureHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->civicStructureHourlyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of CivicStructure to get the weather hourly forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next hour. Default value.&lt;br&gt;&#x60;12&#x60; - Return hourly forecast for next 12 hours.&lt;br&gt;&#x60;24&#x60; - Return hourly forecast for next 24 hours.&lt;br&gt;&#x60;72&#x60; - Return hourly forecast for next 72 hours (3 days). | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsHourlyForecastArray**](../Model/DsHourlyForecastArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **civicStructureWeather**
> \Infocenter\Client\Model\DsWeatherArray civicStructureWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone)

CivicStructure weather

Get the full detailed information about the weather for a CivicStructure object.

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
$id = "id_example"; // string | Use property identifier of CivicStructure to get the weather information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:<br>`0` - Return the most current weather conditions. Default value.<br>`6` - Return weather conditions from past 6 hours.<br>`24` - Return weather conditions from past 24 hours.
$details = true; // bool | Returns full details for the current conditions, `false` by default.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->civicStructureWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->civicStructureWeather: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of CivicStructure to get the weather information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:&lt;br&gt;&#x60;0&#x60; - Return the most current weather conditions. Default value.&lt;br&gt;&#x60;6&#x60; - Return weather conditions from past 6 hours.&lt;br&gt;&#x60;24&#x60; - Return weather conditions from past 24 hours. | [optional]
 **details** | **bool**| Returns full details for the current conditions, &#x60;false&#x60; by default. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsWeatherArray**](../Model/DsWeatherArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **condition**
> \Infocenter\Client\Model\DsCondition condition($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

Condition

Get the full detailed information of an Condition object.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->condition($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsCondition**](../Model/DsCondition.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conditionDailyForecast**
> \Infocenter\Client\Model\DsDailyForecast[] conditionDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

Condition daily forecast

Get the full detailed information about the weather daily forecast for a Condition object.

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
$id = "id_example"; // string | Use property identifier of Condition to get the weather daily forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:<br>`1` - Return forecast data for the next day. Returned by default.<br>`5` - Return forecast data for the next 5 days.<br>`10` - Return forecast data for the next 10 days.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->conditionDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->conditionDailyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Condition to get the weather daily forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next day. Returned by default.&lt;br&gt;&#x60;5&#x60; - Return forecast data for the next 5 days.&lt;br&gt;&#x60;10&#x60; - Return forecast data for the next 10 days. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsDailyForecast[]**](../Model/DsDailyForecast.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conditionHourlyForecast**
> \Infocenter\Client\Model\DsHourlyForecastArray conditionHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

Condition hourly forecast

Get the full detailed information about the weather daily forecast for a Condition object.

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
$id = "id_example"; // string | Use property identifier of Condition to get the weather hourly forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:<br>`1` - Return forecast data for the next hour. Default value.<br>`12` - Return hourly forecast for next 12 hours.<br>`24` - Return hourly forecast for next 24 hours.<br>`72` - Return hourly forecast for next 72 hours (3 days).
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->conditionHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->conditionHourlyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Condition to get the weather hourly forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next hour. Default value.&lt;br&gt;&#x60;12&#x60; - Return hourly forecast for next 12 hours.&lt;br&gt;&#x60;24&#x60; - Return hourly forecast for next 24 hours.&lt;br&gt;&#x60;72&#x60; - Return hourly forecast for next 72 hours (3 days). | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsHourlyForecastArray**](../Model/DsHourlyForecastArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conditionWeather**
> \Infocenter\Client\Model\DsWeatherArray conditionWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone)

Condition weather

Get the full detailed information about the weather for a Condition object.

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
$id = "id_example"; // string | Use property identifier of Condition to get the weather information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:<br>`0` - Return the most current weather conditions. Default value.<br>`6` - Return weather conditions from past 6 hours.<br>`24` - Return weather conditions from past 24 hours.
$details = true; // bool | Returns full details for the current conditions, `false` by default.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->conditionWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->conditionWeather: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Condition to get the weather information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:&lt;br&gt;&#x60;0&#x60; - Return the most current weather conditions. Default value.&lt;br&gt;&#x60;6&#x60; - Return weather conditions from past 6 hours.&lt;br&gt;&#x60;24&#x60; - Return weather conditions from past 24 hours. | [optional]
 **details** | **bool**| Returns full details for the current conditions, &#x60;false&#x60; by default. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsWeatherArray**](../Model/DsWeatherArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creativeWork**
> \Infocenter\Client\Model\DsCreativeWork creativeWork($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

CreativeWork

Get the full detailed information of an CreativeWork object.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->creativeWork($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsCreativeWork**](../Model/DsCreativeWork.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currentTermVersion**
> \Infocenter\Client\Model\DsTermVersion currentTermVersion($term_code, $ocp_apim_subscription_key, $accept_language, $accept_timezone)

Current TermVersion

Get the full detailed information of an current TermVersion object queried by the term-code and the language (Accept-Language header)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->currentTermVersion($term_code, $ocp_apim_subscription_key, $accept_language, $accept_timezone);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsTermVersion**](../Model/DsTermVersion.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **event**
> \Infocenter\Client\Model\DsEvent event($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

Event

Get the full detailed information of an Event object.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->event($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsEvent**](../Model/DsEvent.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventDailyForecast**
> \Infocenter\Client\Model\DsDailyForecast[] eventDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

Event daily forecast

Get the full detailed information about the weather daily forecast for a Event object.

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
$id = "id_example"; // string | Use property identifier of Event to get the weather daily forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:<br>`1` - Return forecast data for the next day. Returned by default.<br>`5` - Return forecast data for the next 5 days.<br>`10` - Return forecast data for the next 10 days.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->eventDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eventDailyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Event to get the weather daily forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next day. Returned by default.&lt;br&gt;&#x60;5&#x60; - Return forecast data for the next 5 days.&lt;br&gt;&#x60;10&#x60; - Return forecast data for the next 10 days. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsDailyForecast[]**](../Model/DsDailyForecast.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventHourlyForecast**
> \Infocenter\Client\Model\DsHourlyForecastArray eventHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

Event hourly forecast

Get the full detailed information about the weather hourly forecast for a Event object.

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
$id = "id_example"; // string | Use property identifier of Event to get the weather hourly forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:<br>`1` - Return forecast data for the next hour. Default value.<br>`12` - Return hourly forecast for next 12 hours.<br>`24` - Return hourly forecast for next 24 hours.<br>`72` - Return hourly forecast for next 72 hours (3 days).
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->eventHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eventHourlyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Event to get the weather hourly forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next hour. Default value.&lt;br&gt;&#x60;12&#x60; - Return hourly forecast for next 12 hours.&lt;br&gt;&#x60;24&#x60; - Return hourly forecast for next 24 hours.&lt;br&gt;&#x60;72&#x60; - Return hourly forecast for next 72 hours (3 days). | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsHourlyForecastArray**](../Model/DsHourlyForecastArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventWeather**
> \Infocenter\Client\Model\DsWeatherArray eventWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone)

Event weather

Get the full detailed information about the weather for a Event object.

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
$id = "id_example"; // string | Use property identifier of Event to get the weather information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:<br>`0` - Return the most current weather conditions. Default value.<br>`6` - Return weather conditions from past 6 hours.<br>`24` - Return weather conditions from past 24 hours.
$details = true; // bool | Returns full details for the current conditions, `false` by default.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->eventWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eventWeather: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Event to get the weather information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:&lt;br&gt;&#x60;0&#x60; - Return the most current weather conditions. Default value.&lt;br&gt;&#x60;6&#x60; - Return weather conditions from past 6 hours.&lt;br&gt;&#x60;24&#x60; - Return weather conditions from past 24 hours. | [optional]
 **details** | **bool**| Returns full details for the current conditions, &#x60;false&#x60; by default. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsWeatherArray**](../Model/DsWeatherArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foodEstablishment**
> \Infocenter\Client\Model\DsFoodEstablishment foodEstablishment($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

FoodEstablishment

Get the full detailed information of an FoodEstablishment object.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->foodEstablishment($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsFoodEstablishment**](../Model/DsFoodEstablishment.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foodEstablishmentWeather**
> \Infocenter\Client\Model\DsWeatherArray foodEstablishmentWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone)

FoodEstablishment weather

Get the full detailed information about the weather for a FoodEstablishment object.

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
$id = "id_example"; // string | Use property identifier of FoodEstablishment to get the weather information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:<br>`0` - Return the most current weather conditions. Default value.<br>`6` - Return weather conditions from past 6 hours.<br>`24` - Return weather conditions from past 24 hours.
$details = true; // bool | Returns full details for the current conditions, `false` by default.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->foodEstablishmentWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->foodEstablishmentWeather: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of FoodEstablishment to get the weather information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:&lt;br&gt;&#x60;0&#x60; - Return the most current weather conditions. Default value.&lt;br&gt;&#x60;6&#x60; - Return weather conditions from past 6 hours.&lt;br&gt;&#x60;24&#x60; - Return weather conditions from past 24 hours. | [optional]
 **details** | **bool**| Returns full details for the current conditions, &#x60;false&#x60; by default. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsWeatherArray**](../Model/DsWeatherArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foodEstablishmentWeatherDailyForecast**
> \Infocenter\Client\Model\DsDailyForecast[] foodEstablishmentWeatherDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

FoodEstablishment weather daily forecast

Get the full detailed information about the weather daily forecast for a FoodEstablishment object.

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
$id = "id_example"; // string | Use property identifier of FoodEstablishment to get the weather daily forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:<br>`1` - Return forecast data for the next day. Returned by default.<br>`5` - Return forecast data for the next 5 days.<br>`10` - Return forecast data for the next 10 days.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->foodEstablishmentWeatherDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->foodEstablishmentWeatherDailyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of FoodEstablishment to get the weather daily forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next day. Returned by default.&lt;br&gt;&#x60;5&#x60; - Return forecast data for the next 5 days.&lt;br&gt;&#x60;10&#x60; - Return forecast data for the next 10 days. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsDailyForecast[]**](../Model/DsDailyForecast.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foodEstablishmentWeatherHourlyForecast**
> \Infocenter\Client\Model\DsHourlyForecastArray foodEstablishmentWeatherHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

FoodEstablishment weather hourly forecast

Get the full detailed information about the weather hourly forecast for a FoodEstablishment object.

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
$id = "id_example"; // string | Use property identifier of FoodEstablishment to get the weather hourly forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:<br>`1` - Return forecast data for the next hour. Default value.<br>`12` - Return hourly forecast for next 12 hours.<br>`24` - Return hourly forecast for next 24 hours.<br>`72` - Return hourly forecast for next 72 hours (3 days).
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->foodEstablishmentWeatherHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->foodEstablishmentWeatherHourlyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of FoodEstablishment to get the weather hourly forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next hour. Default value.&lt;br&gt;&#x60;12&#x60; - Return hourly forecast for next 12 hours.&lt;br&gt;&#x60;24&#x60; - Return hourly forecast for next 24 hours.&lt;br&gt;&#x60;72&#x60; - Return hourly forecast for next 72 hours (3 days). | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsHourlyForecastArray**](../Model/DsHourlyForecastArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatus**
> getStatus($ocp_apim_subscription_key)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $apiInstance->getStatus($ocp_apim_subscription_key);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatusAbout**
> \Infocenter\Client\Model\DsStatusResponse getStatusAbout($ocp_apim_subscription_key)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->getStatusAbout($ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStatusAbout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |

### Return type

[**\Infocenter\Client\Model\DsStatusResponse**](../Model/DsStatusResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTheCurrentTermVersionsOfThePartner**
> \Infocenter\Client\Model\DsTermVersionArray getTheCurrentTermVersionsOfThePartner($partner_acronym, $ocp_apim_subscription_key, $accept_language, $accept_timezone, $scope)

Get the current TermVersions of the partner

Get the full detailed information of an Partner current TermVersion object and the language (Accept-Language header)

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
$partner_acronym = "partner_acronym_example"; // string | Use partner acronym to set the partner which should be used in the request.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).

try {
    $result = $apiInstance->getTheCurrentTermVersionsOfThePartner($partner_acronym, $ocp_apim_subscription_key, $accept_language, $accept_timezone, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTheCurrentTermVersionsOfThePartner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_acronym** | **string**| Use partner acronym to set the partner which should be used in the request. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]

### Return type

[**\Infocenter\Client\Model\DsTermVersionArray**](../Model/DsTermVersionArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageObject**
> \Infocenter\Client\Model\DsImageObject imageObject($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $accept_language, $accept_timezone, $scope, $ds_tag_filter)

ImageObject

Get the full detailed information of an ImageObject object.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.

try {
    $result = $apiInstance->imageObject($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $accept_language, $accept_timezone, $scope, $ds_tag_filter);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]

### Return type

[**\Infocenter\Client\Model\DsImageObject**](../Model/DsImageObject.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAccommodation**
> \Infocenter\Client\Model\DsAccommodationsResponse listAccommodation($ocp_apim_subscription_key, $project, $select, $updated_since, $datasource, $continuation_token, $top, $additional_type, $include_count, $usage, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

List Accommodation

Get the list of the Accommodations with full detailed information.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$additional_type = "additional_type_example"; // string | Filters by `additional type`.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$usage = "usage_example"; // string | 
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->listAccommodation($ocp_apim_subscription_key, $project, $select, $updated_since, $datasource, $continuation_token, $top, $additional_type, $include_count, $usage, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listAccommodation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **additional_type** | **string**| Filters by &#x60;additional type&#x60;. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **usage** | **string**|  | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsAccommodationsResponse**](../Model/DsAccommodationsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAdministrativeAreaRegion**
> \Infocenter\Client\Model\DsAdministrativeAreasResponse listAdministrativeAreaRegion($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $admin_areas_only, $root_objects_only, $identifiers, $accept_language, $accept_timezone, $scope, $ds_contained_in_place_filter)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$category = "category_example"; // string | Filters by `category`. Use property identifier of category.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$admin_areas_only = "admin_areas_only_example"; // string | set to true only administrative areas are included. Set to false then all types of areas are included. This kind can destroy the tree structure and combined with high levels the performance can be bad. default = false (works only in combination with rootObjectsOnly).
$root_objects_only = true; // bool | Pass 'true' if you want to get only root areas.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.

try {
    $result = $apiInstance->listAdministrativeAreaRegion($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $admin_areas_only, $root_objects_only, $identifiers, $accept_language, $accept_timezone, $scope, $ds_contained_in_place_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listAdministrativeAreaRegion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **category** | **string**| Filters by &#x60;category&#x60;. Use property identifier of category. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **admin_areas_only** | **string**| set to true only administrative areas are included. Set to false then all types of areas are included. This kind can destroy the tree structure and combined with high levels the performance can be bad. default &#x3D; false (works only in combination with rootObjectsOnly). | [optional]
 **root_objects_only** | **bool**| Pass &#x27;true&#x27; if you want to get only root areas. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]

### Return type

[**\Infocenter\Client\Model\DsAdministrativeAreasResponse**](../Model/DsAdministrativeAreasResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAmenities**
> \Infocenter\Client\Model\DsLocationFeatureSpecificationArray listAmenities($ocp_apim_subscription_key, $additional_type, $place_features, $lodging_business_features, $accommodation_features, $accept_language)

List Amenities

Get the list of the Amenities with full detailed information.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$additional_type = "additional_type_example"; // string | Filters by `additional type`.
$place_features = true; // bool | Filter by place features.
$lodging_business_features = true; // bool | Filter by lodging business features.
$accommodation_features = true; // bool | Filter by accommodation features.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.

try {
    $result = $apiInstance->listAmenities($ocp_apim_subscription_key, $additional_type, $place_features, $lodging_business_features, $accommodation_features, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listAmenities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **additional_type** | **string**| Filters by &#x60;additional type&#x60;. | [optional]
 **place_features** | **bool**| Filter by place features. | [optional]
 **lodging_business_features** | **bool**| Filter by lodging business features. | [optional]
 **accommodation_features** | **bool**| Filter by accommodation features. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\DsLocationFeatureSpecificationArray**](../Model/DsLocationFeatureSpecificationArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAudioObject**
> \Infocenter\Client\Model\DsAudioObjectsResponse listAudioObject($ocp_apim_subscription_key, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $accept_language, $accept_timezone, $scope)

List AudioObject

Get the list of the AudioObject with full detailed information.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).

try {
    $result = $apiInstance->listAudioObject($ocp_apim_subscription_key, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $accept_language, $accept_timezone, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listAudioObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]

### Return type

[**\Infocenter\Client\Model\DsAudioObjectsResponse**](../Model/DsAudioObjectsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAward**
> \Infocenter\Client\Model\DsAwardsResponse listAward($ocp_apim_subscription_key, $project, $select, $updated_since, $datasource, $continuation_token, $top, $additional_type, $include_count, $usage, $identifiers, $accept_language, $accept_timezone, $scope)

List Award

Get the list of the Awards with full detailed information.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$additional_type = "additional_type_example"; // string | Filters by `additional type`.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$usage = "usage_example"; // string | 
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).

try {
    $result = $apiInstance->listAward($ocp_apim_subscription_key, $project, $select, $updated_since, $datasource, $continuation_token, $top, $additional_type, $include_count, $usage, $identifiers, $accept_language, $accept_timezone, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listAward: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **additional_type** | **string**| Filters by &#x60;additional type&#x60;. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **usage** | **string**|  | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]

### Return type

[**\Infocenter\Client\Model\DsAwardsResponse**](../Model/DsAwardsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCategory**
> \Infocenter\Client\Model\DsCategoriesResponse listCategory($ocp_apim_subscription_key, $parent_category, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $root_objects_only, $identifiers, $accept_language, $accept_timezone, $scope)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$parent_category = "parent_category_example"; // string | Use property identifier of category to filter.
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$root_objects_only = true; // bool | Pass 'true' if you want to get only root categories.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).

try {
    $result = $apiInstance->listCategory($ocp_apim_subscription_key, $parent_category, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $root_objects_only, $identifiers, $accept_language, $accept_timezone, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **parent_category** | **string**| Use property identifier of category to filter. | [optional]
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **root_objects_only** | **bool**| Pass &#x27;true&#x27; if you want to get only root categories. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]

### Return type

[**\Infocenter\Client\Model\DsCategoriesResponse**](../Model/DsCategoriesResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCivicStructure**
> \Infocenter\Client\Model\DsCivicStructuresResponse listCivicStructure($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$category = "category_example"; // string | Filters by `category`. Use property identifier of category.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->listCivicStructure($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCivicStructure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **category** | **string**| Filters by &#x60;category&#x60;. Use property identifier of category. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsCivicStructuresResponse**](../Model/DsCivicStructuresResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCondition**
> \Infocenter\Client\Model\DsConditionsResponse listCondition($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$category = "category_example"; // string | Filters by `category`. Use property identifier of category.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->listCondition($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCondition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **category** | **string**| Filters by &#x60;category&#x60;. Use property identifier of category. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsConditionsResponse**](../Model/DsConditionsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCreativeWork**
> \Infocenter\Client\Model\DsCreativeWorksResponse listCreativeWork($ocp_apim_subscription_key, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->listCreativeWork($ocp_apim_subscription_key, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCreativeWork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsCreativeWorksResponse**](../Model/DsCreativeWorksResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listEvents**
> \Infocenter\Client\Model\DsEventsResponse listEvents($ocp_apim_subscription_key, $updated_since, $category, $datasource, $continuation_token, $top, $contained_in_place, $location, $project, $select, $include_count, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$category = "category_example"; // string | Filters by `category`. Use property identifier of category.
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$location = "location_example"; // string | Filters by `location`. Use property identifier of local bussiness.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->listEvents($ocp_apim_subscription_key, $updated_since, $category, $datasource, $continuation_token, $top, $contained_in_place, $location, $project, $select, $include_count, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **category** | **string**| Filters by &#x60;category&#x60;. Use property identifier of category. | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **location** | **string**| Filters by &#x60;location&#x60;. Use property identifier of local bussiness. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsEventsResponse**](../Model/DsEventsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFoodEstablishment**
> \Infocenter\Client\Model\DsFoodEstablishmentsResponse listFoodEstablishment($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$category = "category_example"; // string | Filters by `category`. Use property identifier of category.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->listFoodEstablishment($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listFoodEstablishment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **category** | **string**| Filters by &#x60;category&#x60;. Use property identifier of category. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsFoodEstablishmentsResponse**](../Model/DsFoodEstablishmentsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listImageObject**
> \Infocenter\Client\Model\DsImageObjectsResponse listImageObject($ocp_apim_subscription_key, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $accept_language, $accept_timezone, $scope, $ds_tag_filter)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.

try {
    $result = $apiInstance->listImageObject($ocp_apim_subscription_key, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $accept_language, $accept_timezone, $scope, $ds_tag_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listImageObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]

### Return type

[**\Infocenter\Client\Model\DsImageObjectsResponse**](../Model/DsImageObjectsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listLocalBusiness**
> \Infocenter\Client\Model\DsLocalBusinessesResponse listLocalBusiness($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $description_mode, $include_all_photos, $additional_type, $parent_organization, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$category = "category_example"; // string | Filters by `category`. Use property identifier of category.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$description_mode = "description_mode_example"; // string | Use `splitToAdditionalProperty` to extract additional information from description to additionalProperty, by default `full`.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$additional_type = "additional_type_example"; // string | Filters by `additional type`.
$parent_organization = "parent_organization_example"; // string | 
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->listLocalBusiness($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $description_mode, $include_all_photos, $additional_type, $parent_organization, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listLocalBusiness: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **category** | **string**| Filters by &#x60;category&#x60;. Use property identifier of category. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **description_mode** | **string**| Use &#x60;splitToAdditionalProperty&#x60; to extract additional information from description to additionalProperty, by default &#x60;full&#x60;. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **additional_type** | **string**| Filters by &#x60;additional type&#x60;. | [optional]
 **parent_organization** | **string**|  | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsLocalBusinessesResponse**](../Model/DsLocalBusinessesResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listLodgingBusiness**
> \Infocenter\Client\Model\DsLodgingBusinessesResponse listLodgingBusiness($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $description_mode, $include_all_photos, $parent_organization, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$category = "category_example"; // string | Filters by `category`. Use property identifier of category.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$description_mode = "description_mode_example"; // string | Use `splitToAdditionalProperty` to extract additional information from description to additionalProperty, by default `full`.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$parent_organization = "parent_organization_example"; // string | 
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->listLodgingBusiness($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $description_mode, $include_all_photos, $parent_organization, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listLodgingBusiness: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **category** | **string**| Filters by &#x60;category&#x60;. Use property identifier of category. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **description_mode** | **string**| Use &#x60;splitToAdditionalProperty&#x60; to extract additional information from description to additionalProperty, by default &#x60;full&#x60;. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **parent_organization** | **string**|  | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsLodgingBusinessesResponse**](../Model/DsLodgingBusinessesResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMediaObject**
> \Infocenter\Client\Model\DsMediaObjectsResponse listMediaObject($ocp_apim_subscription_key, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $accept_language, $accept_timezone, $scope)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).

try {
    $result = $apiInstance->listMediaObject($ocp_apim_subscription_key, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $accept_language, $accept_timezone, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMediaObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]

### Return type

[**\Infocenter\Client\Model\DsMediaObjectsResponse**](../Model/DsMediaObjectsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPlace**
> \Infocenter\Client\Model\DsPlacesResponse listPlace($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$category = "category_example"; // string | Filters by `category`. Use property identifier of category.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->listPlace($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listPlace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **category** | **string**| Filters by &#x60;category&#x60;. Use property identifier of category. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsPlacesResponse**](../Model/DsPlacesResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProducts**
> \Infocenter\Client\Model\DsProductsResponse listProducts($ocp_apim_subscription_key, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $description_mode, $include_all_photos, $area_served, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$description_mode = "description_mode_example"; // string | Use `splitToAdditionalProperty` to extract additional information from description to additionalProperty, by default `full`.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$area_served = "area_served_example"; // string | Filters by `areaServed`. Use property identifier of place.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->listProducts($ocp_apim_subscription_key, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $description_mode, $include_all_photos, $area_served, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **description_mode** | **string**| Use &#x60;splitToAdditionalProperty&#x60; to extract additional information from description to additionalProperty, by default &#x60;full&#x60;. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **area_served** | **string**| Filters by &#x60;areaServed&#x60;. Use property identifier of place. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsProductsResponse**](../Model/DsProductsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProductsPOST**
> \Infocenter\Client\Model\DsProductsResponse listProductsPOST($ocp_apim_subscription_key, $body, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version, $area_served)

List Products (POST)

Get the list of the Products with full detailed information. This endpoint offers the same functionality as GET /products and can be used as an alternative especially when the query parameters get too long.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$body = new \Infocenter\Client\Model\DsListProductRequest(); // \Infocenter\Client\Model\DsListProductRequest | 
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.
$area_served = "area_served_example"; // string | Filters by `areaServed`. Use property identifier of place.

try {
    $result = $apiInstance->listProductsPOST($ocp_apim_subscription_key, $body, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version, $area_served);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProductsPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **body** | [**\Infocenter\Client\Model\DsListProductRequest**](../Model/DsListProductRequest.md)|  | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]
 **area_served** | **string**| Filters by &#x60;areaServed&#x60;. Use property identifier of place. | [optional]

### Return type

[**\Infocenter\Client\Model\DsProductsResponse**](../Model/DsProductsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listReview**
> \Infocenter\Client\Model\DsReviewResponse listReview($ocp_apim_subscription_key, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $accept_language, $accept_timezone, $scope)

List Review

Get the list of the Reviews with full detailed information.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).

try {
    $result = $apiInstance->listReview($ocp_apim_subscription_key, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $accept_language, $accept_timezone, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]

### Return type

[**\Infocenter\Client\Model\DsReviewResponse**](../Model/DsReviewResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSkiResort**
> \Infocenter\Client\Model\DsSkiResortsResponse listSkiResort($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

List SkiResort

Get the list of the SkiResorts with full detailed information.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$category = "category_example"; // string | Filters by `category`. Use property identifier of category.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->listSkiResort($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listSkiResort: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **category** | **string**| Filters by &#x60;category&#x60;. Use property identifier of category. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsSkiResortsResponse**](../Model/DsSkiResortsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTag**
> \Infocenter\Client\Model\DsTagsResponse listTag($ocp_apim_subscription_key, $updated_since, $datasource, $continuation_token, $top, $project, $select, $additional_type, $include_count, $usage, $identifiers, $accept_language, $accept_timezone, $scope)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$additional_type = "additional_type_example"; // string | Filters by `additional type`.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$usage = "usage_example"; // string | 
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).

try {
    $result = $apiInstance->listTag($ocp_apim_subscription_key, $updated_since, $datasource, $continuation_token, $top, $project, $select, $additional_type, $include_count, $usage, $identifiers, $accept_language, $accept_timezone, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **additional_type** | **string**| Filters by &#x60;additional type&#x60;. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **usage** | **string**|  | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]

### Return type

[**\Infocenter\Client\Model\DsTagsResponse**](../Model/DsTagsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTimezones**
> \Infocenter\Client\Model\DsTimeZoneResponseArray listTimezones($ocp_apim_subscription_key)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->listTimezones($ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listTimezones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |

### Return type

[**\Infocenter\Client\Model\DsTimeZoneResponseArray**](../Model/DsTimeZoneResponseArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTour**
> \Infocenter\Client\Model\DsToursResponse listTour($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$category = "category_example"; // string | Filters by `category`. Use property identifier of category.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->listTour($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listTour: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **category** | **string**| Filters by &#x60;category&#x60;. Use property identifier of category. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsToursResponse**](../Model/DsToursResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTransportationSystem**
> \Infocenter\Client\Model\DsTransportationSystemsResponse listTransportationSystem($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

List TransportationSystem

Get the list of the TransportationSystems with full detailed information.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$category = "category_example"; // string | Filters by `category`. Use property identifier of category.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->listTransportationSystem($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listTransportationSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **category** | **string**| Filters by &#x60;category&#x60;. Use property identifier of category. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsTransportationSystemsResponse**](../Model/DsTransportationSystemsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listVideoObject**
> \Infocenter\Client\Model\DsVideoObjectsResponse listVideoObject($ocp_apim_subscription_key, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $accept_language, $accept_timezone, $scope)

List VideoObject

Get the list of the VideoObject with full detailed information.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).

try {
    $result = $apiInstance->listVideoObject($ocp_apim_subscription_key, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $accept_language, $accept_timezone, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listVideoObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]

### Return type

[**\Infocenter\Client\Model\DsVideoObjectsResponse**](../Model/DsVideoObjectsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listWebcams**
> \Infocenter\Client\Model\DsWebcamsResponse listWebcams($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$category = "category_example"; // string | Filters by `category`. Use property identifier of category.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: `yyyy-MM-ddTHH:mm:ss`
$datasource = "datasource_example"; // string | Filters by `datasource`.
$continuation_token = "continuation_token_example"; // string | A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken).
$top = 56; // int | Format - int32. Sets the page size of response.
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_count = true; // bool | Use `true` if you want to get total filtered items count in response.
$identifiers = "identifiers_example"; // string | Comma-separated list of Id's to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->listWebcams($ocp_apim_subscription_key, $category, $contained_in_place, $updated_since, $datasource, $continuation_token, $top, $project, $select, $include_count, $identifiers, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listWebcams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **category** | **string**| Filters by &#x60;category&#x60;. Use property identifier of category. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **updated_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns only changed data since a specific date. Format: &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **datasource** | **string**| Filters by &#x60;datasource&#x60;. | [optional]
 **continuation_token** | **string**| A next page cursor for use in pagination, see [Documentation](https://docs.discover.swiss/dev/quickstarts/how-to-get-access/#continuationtoken). | [optional]
 **top** | **int**| Format - int32. Sets the page size of response. | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_count** | **bool**| Use &#x60;true&#x60; if you want to get total filtered items count in response. | [optional]
 **identifiers** | **string**| Comma-separated list of Id&#x27;s to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsWebcamsResponse**](../Model/DsWebcamsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **localBusiness**
> \Infocenter\Client\Model\DsLocalBusiness localBusiness($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $description_mode, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

LocalBusiness

Get the full detailed information of an LocalBusiness object.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$description_mode = "description_mode_example"; // string | Use `splitToAdditionalProperty` to extract additional information from description to additionalProperty, by default `full`.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->localBusiness($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $description_mode, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **description_mode** | **string**| Use &#x60;splitToAdditionalProperty&#x60; to extract additional information from description to additionalProperty, by default &#x60;full&#x60;. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsLocalBusiness**](../Model/DsLocalBusiness.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **localBusinessDailyForecast**
> \Infocenter\Client\Model\DsDailyForecast[] localBusinessDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

LocalBusiness daily forecast

Get the full detailed information about the weather daily forecast for a LocalBusiness object.

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
$id = "id_example"; // string | Use property identifier of LocalBusiness to get the weather daily forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:<br>`1` - Return forecast data for the next day. Returned by default.<br>`5` - Return forecast data for the next 5 days.<br>`10` - Return forecast data for the next 10 days.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->localBusinessDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->localBusinessDailyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of LocalBusiness to get the weather daily forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next day. Returned by default.&lt;br&gt;&#x60;5&#x60; - Return forecast data for the next 5 days.&lt;br&gt;&#x60;10&#x60; - Return forecast data for the next 10 days. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsDailyForecast[]**](../Model/DsDailyForecast.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **localBusinessHourlyForecast**
> \Infocenter\Client\Model\DsHourlyForecastArray localBusinessHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

LocalBusiness hourly forecast

Get the full detailed information about the weather hourly forecast for a LocalBusiness object.

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
$id = "id_example"; // string | Use property identifier of LocalBusiness to get the weather hourly forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:<br>`1` - Return forecast data for the next hour. Default value.<br>`12` - Return hourly forecast for next 12 hours.<br>`24` - Return hourly forecast for next 24 hours.<br>`72` - Return hourly forecast for next 72 hours (3 days).
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->localBusinessHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->localBusinessHourlyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of LocalBusiness to get the weather hourly forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next hour. Default value.&lt;br&gt;&#x60;12&#x60; - Return hourly forecast for next 12 hours.&lt;br&gt;&#x60;24&#x60; - Return hourly forecast for next 24 hours.&lt;br&gt;&#x60;72&#x60; - Return hourly forecast for next 72 hours (3 days). | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsHourlyForecastArray**](../Model/DsHourlyForecastArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **localBusinessWeather**
> \Infocenter\Client\Model\DsWeatherArray localBusinessWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone)

LocalBusiness weather

Get the full detailed information about the weather for a LocalBusiness object.

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
$id = "id_example"; // string | Use property identifier of LocalBusiness to get the weather information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:<br>`0` - Return the most current weather conditions. Default value.<br>`6` - Return weather conditions from past 6 hours.<br>`24` - Return weather conditions from past 24 hours.
$details = true; // bool | Returns full details for the current conditions, `false` by default.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->localBusinessWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->localBusinessWeather: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of LocalBusiness to get the weather information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:&lt;br&gt;&#x60;0&#x60; - Return the most current weather conditions. Default value.&lt;br&gt;&#x60;6&#x60; - Return weather conditions from past 6 hours.&lt;br&gt;&#x60;24&#x60; - Return weather conditions from past 24 hours. | [optional]
 **details** | **bool**| Returns full details for the current conditions, &#x60;false&#x60; by default. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsWeatherArray**](../Model/DsWeatherArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lodgingBusiness**
> \Infocenter\Client\Model\DsLodgingBusiness lodgingBusiness($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $description_mode, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

LodgingBusiness

Get the full detailed information of an LodgingBusiness object.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$description_mode = "description_mode_example"; // string | Use `splitToAdditionalProperty` to extract additional information from description to additionalProperty, by default `full`.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->lodgingBusiness($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $description_mode, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **description_mode** | **string**| Use &#x60;splitToAdditionalProperty&#x60; to extract additional information from description to additionalProperty, by default &#x60;full&#x60;. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsLodgingBusiness**](../Model/DsLodgingBusiness.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lodgingBusinessDailyForecast**
> \Infocenter\Client\Model\DsDailyForecast[] lodgingBusinessDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

LodgingBusiness daily forecast

Get the full detailed information about the weather daily forecast for a LodgingBusiness object.

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
$id = "id_example"; // string | Use property identifier of LodgingBusiness to get the weather daily forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:<br>`1` - Return forecast data for the next day. Returned by default.<br>`5` - Return forecast data for the next 5 days.<br>`10` - Return forecast data for the next 10 days.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->lodgingBusinessDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->lodgingBusinessDailyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of LodgingBusiness to get the weather daily forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next day. Returned by default.&lt;br&gt;&#x60;5&#x60; - Return forecast data for the next 5 days.&lt;br&gt;&#x60;10&#x60; - Return forecast data for the next 10 days. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsDailyForecast[]**](../Model/DsDailyForecast.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lodgingBusinessHourlyForecast**
> \Infocenter\Client\Model\DsHourlyForecastArray lodgingBusinessHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

LodgingBusiness hourly forecast

Get the full detailed information about the weather hourly forecast for a LodgingBusiness object.

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
$id = "id_example"; // string | Use property identifier of LodgingBusiness to get the weather hourly forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:<br>`1` - Return forecast data for the next hour. Default value.<br>`12` - Return hourly forecast for next 12 hours.<br>`24` - Return hourly forecast for next 24 hours.<br>`72` - Return hourly forecast for next 72 hours (3 days).
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->lodgingBusinessHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->lodgingBusinessHourlyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of LodgingBusiness to get the weather hourly forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next hour. Default value.&lt;br&gt;&#x60;12&#x60; - Return hourly forecast for next 12 hours.&lt;br&gt;&#x60;24&#x60; - Return hourly forecast for next 24 hours.&lt;br&gt;&#x60;72&#x60; - Return hourly forecast for next 72 hours (3 days). | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsHourlyForecastArray**](../Model/DsHourlyForecastArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lodgingBusinessWeather**
> \Infocenter\Client\Model\DsWeatherArray lodgingBusinessWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone)

LodgingBusiness weather

Get the full detailed information about the weather for a LodgingBusiness object.

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
$id = "id_example"; // string | Use property identifier of LodgingBusiness to get the weather information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:<br>`0` - Return the most current weather conditions. Default value.<br>`6` - Return weather conditions from past 6 hours.<br>`24` - Return weather conditions from past 24 hours.
$details = true; // bool | Returns full details for the current conditions, `false` by default.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->lodgingBusinessWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->lodgingBusinessWeather: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of LodgingBusiness to get the weather information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:&lt;br&gt;&#x60;0&#x60; - Return the most current weather conditions. Default value.&lt;br&gt;&#x60;6&#x60; - Return weather conditions from past 6 hours.&lt;br&gt;&#x60;24&#x60; - Return weather conditions from past 24 hours. | [optional]
 **details** | **bool**| Returns full details for the current conditions, &#x60;false&#x60; by default. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsWeatherArray**](../Model/DsWeatherArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mediaObject**
> \Infocenter\Client\Model\DsMediaObject mediaObject($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $accept_language, $accept_timezone, $scope)

MediaObject

Get the full detailed information of an MediaObject object.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).

try {
    $result = $apiInstance->mediaObject($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $accept_language, $accept_timezone, $scope);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]

### Return type

[**\Infocenter\Client\Model\DsMediaObject**](../Model/DsMediaObject.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **place**
> \Infocenter\Client\Model\DsPlace place($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

Place

Get the full detailed information of an Place object.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->place($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsPlace**](../Model/DsPlace.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **placeDailyForecast**
> \Infocenter\Client\Model\DsDailyForecast[] placeDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

Place daily forecast

Get the full detailed information about the weather daily forecast for a Place object.

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
$id = "id_example"; // string | Use property identifier of Place to get the weather daily forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:<br>`1` - Return forecast data for the next day. Returned by default.<br>`5` - Return forecast data for the next 5 days.<br>`10` - Return forecast data for the next 10 days.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->placeDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->placeDailyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Place to get the weather daily forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next day. Returned by default.&lt;br&gt;&#x60;5&#x60; - Return forecast data for the next 5 days.&lt;br&gt;&#x60;10&#x60; - Return forecast data for the next 10 days. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsDailyForecast[]**](../Model/DsDailyForecast.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **placeHourlyForecast**
> \Infocenter\Client\Model\DsHourlyForecastArray placeHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

Place hourly forecast

Get the full detailed information about the weather hourly forecast for a Place object.

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
$id = "id_example"; // string | Use property identifier of Place to get the weather hourly forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:<br>`1` - Return forecast data for the next hour. Default value.<br>`12` - Return hourly forecast for next 12 hours.<br>`24` - Return hourly forecast for next 24 hours.<br>`72` - Return hourly forecast for next 72 hours (3 days).
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->placeHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->placeHourlyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Place to get the weather hourly forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next hour. Default value.&lt;br&gt;&#x60;12&#x60; - Return hourly forecast for next 12 hours.&lt;br&gt;&#x60;24&#x60; - Return hourly forecast for next 24 hours.&lt;br&gt;&#x60;72&#x60; - Return hourly forecast for next 72 hours (3 days). | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsHourlyForecastArray**](../Model/DsHourlyForecastArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **placeWeather**
> \Infocenter\Client\Model\DsWeatherArray placeWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone)

Place weather

Get the full detailed information about the weather for a Place object.

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
$id = "id_example"; // string | Use property identifier of Place to get the weather information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:<br>`0` - Return the most current weather conditions. Default value.<br>`6` - Return weather conditions from past 6 hours.<br>`24` - Return weather conditions from past 24 hours.
$details = true; // bool | Returns full details for the current conditions, `false` by default.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->placeWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->placeWeather: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Place to get the weather information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:&lt;br&gt;&#x60;0&#x60; - Return the most current weather conditions. Default value.&lt;br&gt;&#x60;6&#x60; - Return weather conditions from past 6 hours.&lt;br&gt;&#x60;24&#x60; - Return weather conditions from past 24 hours. | [optional]
 **details** | **bool**| Returns full details for the current conditions, &#x60;false&#x60; by default. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsWeatherArray**](../Model/DsWeatherArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **product**
> \Infocenter\Client\Model\DsProduct product($id, $ocp_apim_subscription_key, $project, $select, $description_mode, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

Product

Get the full detailed information of an Product object.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$description_mode = "description_mode_example"; // string | Use `splitToAdditionalProperty` to extract additional information from description to additionalProperty, by default `full`.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->product($id, $ocp_apim_subscription_key, $project, $select, $description_mode, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **description_mode** | **string**| Use &#x60;splitToAdditionalProperty&#x60; to extract additional information from description to additionalProperty, by default &#x60;full&#x60;. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsProduct**](../Model/DsProduct.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productByProductVariantId**
> \Infocenter\Client\Model\DsProduct productByProductVariantId($product_variant_id, $ocp_apim_subscription_key, $project, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

Product by ProductVariantId

Get the full detailed information of an Product object.

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
$product_variant_id = "product_variant_id_example"; // string | Use property to get product object by product variant identifier.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->productByProductVariantId($product_variant_id, $ocp_apim_subscription_key, $project, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->productByProductVariantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_variant_id** | **string**| Use property to get product object by product variant identifier. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsProduct**](../Model/DsProduct.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **review**
> \Infocenter\Client\Model\DsReview review($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $accept_language, $accept_timezone, $scope)

Review

Get the full detailed information of an Review.

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
$id = "id_example"; // string | Use property identifier of Review to get single object.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).

try {
    $result = $apiInstance->review($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $accept_language, $accept_timezone, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->review: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Review to get single object. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]

### Return type

[**\Infocenter\Client\Model\DsReview**](../Model/DsReview.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \Infocenter\Client\Model\DsSearchResponse search($ocp_apim_subscription_key, $body, $authorization, $accept_language, $accept_timezone, $category_version)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$body = new \Infocenter\Client\Model\DsFullSearchRequest(); // \Infocenter\Client\Model\DsFullSearchRequest | 
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->search($ocp_apim_subscription_key, $body, $authorization, $accept_language, $accept_timezone, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **body** | [**\Infocenter\Client\Model\DsFullSearchRequest**](../Model/DsFullSearchRequest.md)|  | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsSearchResponse**](../Model/DsSearchResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchByGET**
> \Infocenter\Client\Model\DsSearchResponse searchByGET($ocp_apim_subscription_key, $search_text, $search_fields, $select, $current_page, $results_per_page, $order_by, $scoring_reference_point, $only_suggestions, $facet_order, $filters, $datasource, $project, $source_partner, $award, $campaign_tag, $profile_tag, $all_tag, $category, $facets, $scoring_tag, $source_id, $location, $has_geo_shape, $product_availability, $action, $only_with_availabilities, $category_tree, $tag, $contained_in_place, $address_locality, $address_postal_code, $time, $length, $state, $rating_condition, $rating_difficulty, $elevation_ascent, $elevation_descent, $elevation_min_altitude, $elevation_max_altitude, $season, $type, $combined_type, $combined_type_tree, $leaf_type, $authorization, $accept_language, $accept_timezone, $category_version)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$search_text = "search_text_example"; // string | Optional. Search for contained string by the searchable fields.
$search_fields = "search_fields_example"; // string | Optional. When name of fields are specified as a comma separated string (e.g. 'name, description, address/name') then only the selected fields will be used for searching.
$select = "select_example"; // string | Optional. When name of fields are specified as a comma separated string (e.g. 'name, description, @id, address') then only the selected fields will be returned.
$current_page = 56; // int | Format - int32. Optional. By default equal 1. Determines which page of results to return in the response
$results_per_page = 56; // int | Format - int32. Optional. By default equal 10 for regular request and 50 for pdf request. Determines how many results are in response.
$order_by = "order_by_example"; // string | Optional. Determines name of field by which result will be ordered (e.g. name/de desc).
$scoring_reference_point = "scoring_reference_point_example"; // string | Optional. Coordinates of point in format 'Longitude,Latitude' (e.g.: 8.5172912,47.5722339) which will be used for scoring by distance
$only_suggestions = true; // bool | Use property to get only suggestions in the response based on current request
$facet_order = "facet_order_example"; // string | Use property to specify ordering direction (desc or asc) for facets results.
$filters = "filters_example"; // string | Optional. List of OData filters.
$datasource = "datasource_example"; // string | Optional. List of datasources to filter by (with OR condition).
$project = "project_example"; // string | Optional. List of projects to filter by (with OR condition).
$source_partner = "source_partner_example"; // string | Optional. List of source partners acronyms to filter by (with OR condition).
$award = "award_example"; // string | Optional. List of award ids to filter by (with OR condition).
$campaign_tag = "campaign_tag_example"; // string | Optional. List of campaign tags to filter by (with OR condition).
$profile_tag = "profile_tag_example"; // string | Optional. List of profile tags to filter by (with OR condition).
$all_tag = "all_tag_example"; // string | Optional. List of tags to filter by (with OR condition).
$category = "category_example"; // string | Optional. List of categories to filter by (with OR condition).
$facets = "facets_example"; // string | Optional. List of facets which will be in the response.
$scoring_tag = "scoring_tag_example"; // string | Optional. List of tags which will be used for scoring (Beta) of results in the response.
$source_id = "source_id_example"; // string | Optional. List of location ids to filter by (with OR condition).
$location = "location_example"; // string | Optional. List of location ids to filter by (with OR condition).
$has_geo_shape = "has_geo_shape_example"; // string | 
$product_availability = "product_availability_example"; // string | Optional. List of properties for searching product availabilities.
$action = "action_example"; // string | Optional. List of action to filter by (with OR condition). Possible values: `OrderActionWeb`, `RegisterActionWeb` and `OrderActionDsMarket`.
$only_with_availabilities = "only_with_availabilities_example"; // string | Results are filtered by availabilities (by default true if there is an availability-filter set) otherwise the information is only added to the search result. When it is true - facets won't be returned.
$category_tree = "category_tree_example"; // string | Use property for filtering/facet-filtering by `categoryTree`
$tag = "tag_example"; // string | Use property for filtering/facet-filtering by `tag`
$contained_in_place = "contained_in_place_example"; // string | Use property for filtering/facet-filtering by `containedInPlace/id`
$address_locality = "address_locality_example"; // string | Use property for filtering/facet-filtering by `address/addressLocality`
$address_postal_code = "address_postal_code_example"; // string | Use property for filtering/facet-filtering by `address/postalCode`
$time = "time_example"; // string | Use property for filtering/facet-filtering by `time`
$length = "length_example"; // string | Use property for filtering/facet-filtering by `length`
$state = "state_example"; // string | Use property for filtering/facet-filtering by `state`
$rating_condition = "rating_condition_example"; // string | Use property for filtering/facet-filtering by `rating/condition`
$rating_difficulty = "rating_difficulty_example"; // string | Use property for filtering/facet-filtering by `rating/difficulty`
$elevation_ascent = "elevation_ascent_example"; // string | Use property for filtering/facet-filtering by `elevation/ascent`
$elevation_descent = "elevation_descent_example"; // string | Use property for filtering/facet-filtering by `elevation/descent`
$elevation_min_altitude = "elevation_min_altitude_example"; // string | Use property for filtering/facet-filtering by `elevation/minAltitude`
$elevation_max_altitude = "elevation_max_altitude_example"; // string | Use property for filtering/facet-filtering by `elevation/maxAltitude`
$season = "season_example"; // string | Use property for filtering/facet-filtering by `season`
$type = "type_example"; // string | Use property for filtering by `type`
$combined_type = "combined_type_example"; // string | Use property for filtering by `combinedType` which contains parentType and parentAdditionalType
$combined_type_tree = "combined_type_tree_example"; // string | Use property for filtering by `combinedTypeTree`
$leaf_type = "leaf_type_example"; // string | Use property for filtering by `leafType` which contains additionalType or type
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->searchByGET($ocp_apim_subscription_key, $search_text, $search_fields, $select, $current_page, $results_per_page, $order_by, $scoring_reference_point, $only_suggestions, $facet_order, $filters, $datasource, $project, $source_partner, $award, $campaign_tag, $profile_tag, $all_tag, $category, $facets, $scoring_tag, $source_id, $location, $has_geo_shape, $product_availability, $action, $only_with_availabilities, $category_tree, $tag, $contained_in_place, $address_locality, $address_postal_code, $time, $length, $state, $rating_condition, $rating_difficulty, $elevation_ascent, $elevation_descent, $elevation_min_altitude, $elevation_max_altitude, $season, $type, $combined_type, $combined_type_tree, $leaf_type, $authorization, $accept_language, $accept_timezone, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchByGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **search_text** | **string**| Optional. Search for contained string by the searchable fields. | [optional]
 **search_fields** | **string**| Optional. When name of fields are specified as a comma separated string (e.g. &#x27;name, description, address/name&#x27;) then only the selected fields will be used for searching. | [optional]
 **select** | **string**| Optional. When name of fields are specified as a comma separated string (e.g. &#x27;name, description, @id, address&#x27;) then only the selected fields will be returned. | [optional]
 **current_page** | **int**| Format - int32. Optional. By default equal 1. Determines which page of results to return in the response | [optional]
 **results_per_page** | **int**| Format - int32. Optional. By default equal 10 for regular request and 50 for pdf request. Determines how many results are in response. | [optional]
 **order_by** | **string**| Optional. Determines name of field by which result will be ordered (e.g. name/de desc). | [optional]
 **scoring_reference_point** | **string**| Optional. Coordinates of point in format &#x27;Longitude,Latitude&#x27; (e.g.: 8.5172912,47.5722339) which will be used for scoring by distance | [optional]
 **only_suggestions** | **bool**| Use property to get only suggestions in the response based on current request | [optional]
 **facet_order** | **string**| Use property to specify ordering direction (desc or asc) for facets results. | [optional]
 **filters** | **string**| Optional. List of OData filters. | [optional]
 **datasource** | **string**| Optional. List of datasources to filter by (with OR condition). | [optional]
 **project** | **string**| Optional. List of projects to filter by (with OR condition). | [optional]
 **source_partner** | **string**| Optional. List of source partners acronyms to filter by (with OR condition). | [optional]
 **award** | **string**| Optional. List of award ids to filter by (with OR condition). | [optional]
 **campaign_tag** | **string**| Optional. List of campaign tags to filter by (with OR condition). | [optional]
 **profile_tag** | **string**| Optional. List of profile tags to filter by (with OR condition). | [optional]
 **all_tag** | **string**| Optional. List of tags to filter by (with OR condition). | [optional]
 **category** | **string**| Optional. List of categories to filter by (with OR condition). | [optional]
 **facets** | **string**| Optional. List of facets which will be in the response. | [optional]
 **scoring_tag** | **string**| Optional. List of tags which will be used for scoring (Beta) of results in the response. | [optional]
 **source_id** | **string**| Optional. List of location ids to filter by (with OR condition). | [optional]
 **location** | **string**| Optional. List of location ids to filter by (with OR condition). | [optional]
 **has_geo_shape** | **string**|  | [optional]
 **product_availability** | **string**| Optional. List of properties for searching product availabilities. | [optional]
 **action** | **string**| Optional. List of action to filter by (with OR condition). Possible values: &#x60;OrderActionWeb&#x60;, &#x60;RegisterActionWeb&#x60; and &#x60;OrderActionDsMarket&#x60;. | [optional]
 **only_with_availabilities** | **string**| Results are filtered by availabilities (by default true if there is an availability-filter set) otherwise the information is only added to the search result. When it is true - facets won&#x27;t be returned. | [optional]
 **category_tree** | **string**| Use property for filtering/facet-filtering by &#x60;categoryTree&#x60; | [optional]
 **tag** | **string**| Use property for filtering/facet-filtering by &#x60;tag&#x60; | [optional]
 **contained_in_place** | **string**| Use property for filtering/facet-filtering by &#x60;containedInPlace/id&#x60; | [optional]
 **address_locality** | **string**| Use property for filtering/facet-filtering by &#x60;address/addressLocality&#x60; | [optional]
 **address_postal_code** | **string**| Use property for filtering/facet-filtering by &#x60;address/postalCode&#x60; | [optional]
 **time** | **string**| Use property for filtering/facet-filtering by &#x60;time&#x60; | [optional]
 **length** | **string**| Use property for filtering/facet-filtering by &#x60;length&#x60; | [optional]
 **state** | **string**| Use property for filtering/facet-filtering by &#x60;state&#x60; | [optional]
 **rating_condition** | **string**| Use property for filtering/facet-filtering by &#x60;rating/condition&#x60; | [optional]
 **rating_difficulty** | **string**| Use property for filtering/facet-filtering by &#x60;rating/difficulty&#x60; | [optional]
 **elevation_ascent** | **string**| Use property for filtering/facet-filtering by &#x60;elevation/ascent&#x60; | [optional]
 **elevation_descent** | **string**| Use property for filtering/facet-filtering by &#x60;elevation/descent&#x60; | [optional]
 **elevation_min_altitude** | **string**| Use property for filtering/facet-filtering by &#x60;elevation/minAltitude&#x60; | [optional]
 **elevation_max_altitude** | **string**| Use property for filtering/facet-filtering by &#x60;elevation/maxAltitude&#x60; | [optional]
 **season** | **string**| Use property for filtering/facet-filtering by &#x60;season&#x60; | [optional]
 **type** | **string**| Use property for filtering by &#x60;type&#x60; | [optional]
 **combined_type** | **string**| Use property for filtering by &#x60;combinedType&#x60; which contains parentType and parentAdditionalType | [optional]
 **combined_type_tree** | **string**| Use property for filtering by &#x60;combinedTypeTree&#x60; | [optional]
 **leaf_type** | **string**| Use property for filtering by &#x60;leafType&#x60; which contains additionalType or type | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsSearchResponse**](../Model/DsSearchResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchByGETForPdf**
> string searchByGETForPdf($template_project, $template, $ocp_apim_subscription_key, $search_text, $search_fields, $select, $current_page, $results_per_page, $order_by, $scoring_reference_point, $only_suggestions, $facet_order, $filters, $datasource, $project, $source_partner, $award, $campaign_tag, $profile_tag, $all_tag, $category, $facets, $scoring_tag, $source_id, $location, $has_geo_shape, $product_availability, $action, $only_with_availabilities, $category_tree, $tag, $contained_in_place, $address_locality, $address_postal_code, $time, $length, $state, $rating_condition, $rating_difficulty, $elevation_ascent, $elevation_descent, $elevation_min_altitude, $elevation_max_altitude, $season, $type, $combined_type, $combined_type_tree, $leaf_type, $title, $leadtext, $accept_language, $accept_timezone)

Search by GET for pdf

Search for the index objects and get results in pdf.

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
$template_project = "template_project_example"; // string | Use property to select project which is used to select pdf template
$template = "template_example"; // string | Use property to select pdf template in selected project
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$search_text = "search_text_example"; // string | Optional. Search for contained string by the searchable fields.
$search_fields = "search_fields_example"; // string | Optional. When name of fields are specified as a comma separated string (e.g. 'name, description, address/name') then only the selected fields will be used for searching.
$select = "select_example"; // string | Optional. When name of fields are specified as a comma separated string (e.g. 'name, description, @id, address') then only the selected fields will be returned.
$current_page = 56; // int | Format - int32. Optional. By default equal 1. Determines which page of results to return in the response
$results_per_page = 56; // int | Format - int32. Optional. By default equal 10 for regular request and 50 for pdf request. Determines how many results are in response.
$order_by = "order_by_example"; // string | Optional. Determines name of field by which result will be ordered (e.g. name/de desc).
$scoring_reference_point = "scoring_reference_point_example"; // string | Optional. Coordinates of point in format 'Longitude,Latitude' (e.g.: 8.5172912,47.5722339) which will be used for scoring by distance
$only_suggestions = true; // bool | Use property to get only suggestions in the response based on current request
$facet_order = "facet_order_example"; // string | Use property to specify ordering direction (desc or asc) for facets results.
$filters = "filters_example"; // string | Optional. List of OData filters.
$datasource = "datasource_example"; // string | Optional. List of datasources to filter by (with OR condition).
$project = "project_example"; // string | Optional. List of projects to filter by (with OR condition).
$source_partner = "source_partner_example"; // string | Optional. List of source partners acronyms to filter by (with OR condition).
$award = "award_example"; // string | Optional. List of award ids to filter by (with OR condition).
$campaign_tag = "campaign_tag_example"; // string | Optional. List of campaign tags to filter by (with OR condition).
$profile_tag = "profile_tag_example"; // string | Optional. List of profile tags to filter by (with OR condition).
$all_tag = "all_tag_example"; // string | Optional. List of tags to filter by (with OR condition).
$category = "category_example"; // string | Optional. List of categories to filter by (with OR condition).
$facets = "facets_example"; // string | Optional. List of facets which will be in the response.
$scoring_tag = "scoring_tag_example"; // string | Optional. List of tags which will be used for scoring (Beta) of results in the response.
$source_id = "source_id_example"; // string | Optional. List of location ids to filter by (with OR condition).
$location = "location_example"; // string | Optional. List of location ids to filter by (with OR condition).
$has_geo_shape = "has_geo_shape_example"; // string | 
$product_availability = "product_availability_example"; // string | Optional. List of properties for searching product availabilities.
$action = "action_example"; // string | Optional. List of action to filter by (with OR condition). Possible values: `OrderActionWeb`, `RegisterActionWeb` and `OrderActionDsMarket`.
$only_with_availabilities = "only_with_availabilities_example"; // string | Results are filtered by availabilities (by default true if there is an availability-filter set) otherwise the information is only added to the search result. When it is true - facets won't be returned.
$category_tree = "category_tree_example"; // string | Use property for filtering/facet-filtering by `categoryTree`
$tag = "tag_example"; // string | Use property for filtering/facet-filtering by `tag`
$contained_in_place = "contained_in_place_example"; // string | Use property for filtering/facet-filtering by `containedInPlace/id`
$address_locality = "address_locality_example"; // string | Use property for filtering/facet-filtering by `address/addressLocality`
$address_postal_code = "address_postal_code_example"; // string | Use property for filtering/facet-filtering by `address/postalCode`
$time = "time_example"; // string | Use property for filtering/facet-filtering by `time`
$length = "length_example"; // string | Use property for filtering/facet-filtering by `length`
$state = "state_example"; // string | Use property for filtering/facet-filtering by `state`
$rating_condition = "rating_condition_example"; // string | Use property for filtering/facet-filtering by `rating/condition`
$rating_difficulty = "rating_difficulty_example"; // string | Use property for filtering/facet-filtering by `rating/difficulty`
$elevation_ascent = "elevation_ascent_example"; // string | Use property for filtering/facet-filtering by `elevation/ascent`
$elevation_descent = "elevation_descent_example"; // string | Use property for filtering/facet-filtering by `elevation/descent`
$elevation_min_altitude = "elevation_min_altitude_example"; // string | Use property for filtering/facet-filtering by `elevation/minAltitude`
$elevation_max_altitude = "elevation_max_altitude_example"; // string | Use property for filtering/facet-filtering by `elevation/maxAltitude`
$season = "season_example"; // string | Use property for filtering/facet-filtering by `season`
$type = "type_example"; // string | Use property for filtering by `type`
$combined_type = "combined_type_example"; // string | Use property for filtering by `combinedType` which contains parentType and parentAdditionalType
$combined_type_tree = "combined_type_tree_example"; // string | Use property for filtering by `combinedTypeTree`
$leaf_type = "leaf_type_example"; // string | Use property for filtering by `leafType` which contains additionalType or type
$title = "title_example"; // string | Use property for define custom title in the generated pdf
$leadtext = "leadtext_example"; // string | Use property for define custom lead text in the generated pdf
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->searchByGETForPdf($template_project, $template, $ocp_apim_subscription_key, $search_text, $search_fields, $select, $current_page, $results_per_page, $order_by, $scoring_reference_point, $only_suggestions, $facet_order, $filters, $datasource, $project, $source_partner, $award, $campaign_tag, $profile_tag, $all_tag, $category, $facets, $scoring_tag, $source_id, $location, $has_geo_shape, $product_availability, $action, $only_with_availabilities, $category_tree, $tag, $contained_in_place, $address_locality, $address_postal_code, $time, $length, $state, $rating_condition, $rating_difficulty, $elevation_ascent, $elevation_descent, $elevation_min_altitude, $elevation_max_altitude, $season, $type, $combined_type, $combined_type_tree, $leaf_type, $title, $leadtext, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchByGETForPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_project** | **string**| Use property to select project which is used to select pdf template |
 **template** | **string**| Use property to select pdf template in selected project |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **search_text** | **string**| Optional. Search for contained string by the searchable fields. | [optional]
 **search_fields** | **string**| Optional. When name of fields are specified as a comma separated string (e.g. &#x27;name, description, address/name&#x27;) then only the selected fields will be used for searching. | [optional]
 **select** | **string**| Optional. When name of fields are specified as a comma separated string (e.g. &#x27;name, description, @id, address&#x27;) then only the selected fields will be returned. | [optional]
 **current_page** | **int**| Format - int32. Optional. By default equal 1. Determines which page of results to return in the response | [optional]
 **results_per_page** | **int**| Format - int32. Optional. By default equal 10 for regular request and 50 for pdf request. Determines how many results are in response. | [optional]
 **order_by** | **string**| Optional. Determines name of field by which result will be ordered (e.g. name/de desc). | [optional]
 **scoring_reference_point** | **string**| Optional. Coordinates of point in format &#x27;Longitude,Latitude&#x27; (e.g.: 8.5172912,47.5722339) which will be used for scoring by distance | [optional]
 **only_suggestions** | **bool**| Use property to get only suggestions in the response based on current request | [optional]
 **facet_order** | **string**| Use property to specify ordering direction (desc or asc) for facets results. | [optional]
 **filters** | **string**| Optional. List of OData filters. | [optional]
 **datasource** | **string**| Optional. List of datasources to filter by (with OR condition). | [optional]
 **project** | **string**| Optional. List of projects to filter by (with OR condition). | [optional]
 **source_partner** | **string**| Optional. List of source partners acronyms to filter by (with OR condition). | [optional]
 **award** | **string**| Optional. List of award ids to filter by (with OR condition). | [optional]
 **campaign_tag** | **string**| Optional. List of campaign tags to filter by (with OR condition). | [optional]
 **profile_tag** | **string**| Optional. List of profile tags to filter by (with OR condition). | [optional]
 **all_tag** | **string**| Optional. List of tags to filter by (with OR condition). | [optional]
 **category** | **string**| Optional. List of categories to filter by (with OR condition). | [optional]
 **facets** | **string**| Optional. List of facets which will be in the response. | [optional]
 **scoring_tag** | **string**| Optional. List of tags which will be used for scoring (Beta) of results in the response. | [optional]
 **source_id** | **string**| Optional. List of location ids to filter by (with OR condition). | [optional]
 **location** | **string**| Optional. List of location ids to filter by (with OR condition). | [optional]
 **has_geo_shape** | **string**|  | [optional]
 **product_availability** | **string**| Optional. List of properties for searching product availabilities. | [optional]
 **action** | **string**| Optional. List of action to filter by (with OR condition). Possible values: &#x60;OrderActionWeb&#x60;, &#x60;RegisterActionWeb&#x60; and &#x60;OrderActionDsMarket&#x60;. | [optional]
 **only_with_availabilities** | **string**| Results are filtered by availabilities (by default true if there is an availability-filter set) otherwise the information is only added to the search result. When it is true - facets won&#x27;t be returned. | [optional]
 **category_tree** | **string**| Use property for filtering/facet-filtering by &#x60;categoryTree&#x60; | [optional]
 **tag** | **string**| Use property for filtering/facet-filtering by &#x60;tag&#x60; | [optional]
 **contained_in_place** | **string**| Use property for filtering/facet-filtering by &#x60;containedInPlace/id&#x60; | [optional]
 **address_locality** | **string**| Use property for filtering/facet-filtering by &#x60;address/addressLocality&#x60; | [optional]
 **address_postal_code** | **string**| Use property for filtering/facet-filtering by &#x60;address/postalCode&#x60; | [optional]
 **time** | **string**| Use property for filtering/facet-filtering by &#x60;time&#x60; | [optional]
 **length** | **string**| Use property for filtering/facet-filtering by &#x60;length&#x60; | [optional]
 **state** | **string**| Use property for filtering/facet-filtering by &#x60;state&#x60; | [optional]
 **rating_condition** | **string**| Use property for filtering/facet-filtering by &#x60;rating/condition&#x60; | [optional]
 **rating_difficulty** | **string**| Use property for filtering/facet-filtering by &#x60;rating/difficulty&#x60; | [optional]
 **elevation_ascent** | **string**| Use property for filtering/facet-filtering by &#x60;elevation/ascent&#x60; | [optional]
 **elevation_descent** | **string**| Use property for filtering/facet-filtering by &#x60;elevation/descent&#x60; | [optional]
 **elevation_min_altitude** | **string**| Use property for filtering/facet-filtering by &#x60;elevation/minAltitude&#x60; | [optional]
 **elevation_max_altitude** | **string**| Use property for filtering/facet-filtering by &#x60;elevation/maxAltitude&#x60; | [optional]
 **season** | **string**| Use property for filtering/facet-filtering by &#x60;season&#x60; | [optional]
 **type** | **string**| Use property for filtering by &#x60;type&#x60; | [optional]
 **combined_type** | **string**| Use property for filtering by &#x60;combinedType&#x60; which contains parentType and parentAdditionalType | [optional]
 **combined_type_tree** | **string**| Use property for filtering by &#x60;combinedTypeTree&#x60; | [optional]
 **leaf_type** | **string**| Use property for filtering by &#x60;leafType&#x60; which contains additionalType or type | [optional]
 **title** | **string**| Use property for define custom title in the generated pdf | [optional]
 **leadtext** | **string**| Use property for define custom lead text in the generated pdf | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

**string**

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchByPOSTForPdf**
> string searchByPOSTForPdf($ocp_apim_subscription_key, $template_project, $template, $body, $accept_language, $accept_timezone)

Search by POST for pdf

Search for the index objects and get results in pdf.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$template_project = "template_project_example"; // string | Use property to select project which is used to select pdf template
$template = "template_example"; // string | Use property to select pdf template in selected project
$body = new \Infocenter\Client\Model\DsFullSearchRequest(); // \Infocenter\Client\Model\DsFullSearchRequest | 
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->searchByPOSTForPdf($ocp_apim_subscription_key, $template_project, $template, $body, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchByPOSTForPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **template_project** | **string**| Use property to select project which is used to select pdf template |
 **template** | **string**| Use property to select pdf template in selected project |
 **body** | [**\Infocenter\Client\Model\DsFullSearchRequest**](../Model/DsFullSearchRequest.md)|  | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

**string**

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **skiResort**
> \Infocenter\Client\Model\DsSkiResort skiResort($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

SkiResort

Get the full detailed information of an SkiResort object.

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
$id = "id_example"; // string | Use property identifier of SkiResort to get single object.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->skiResort($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->skiResort: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of SkiResort to get single object. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsSkiResort**](../Model/DsSkiResort.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **skiResortDailyForecast**
> \Infocenter\Client\Model\DsDailyForecast[] skiResortDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

SkiResort daily forecast

Get the full detailed information about the weather daily forecast for a SkiResort object.

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
$id = "id_example"; // string | Use property identifier of SkiResort to get the weather daily forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:<br>`1` - Return forecast data for the next day. Returned by default.<br>`5` - Return forecast data for the next 5 days.<br>`10` - Return forecast data for the next 10 days.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->skiResortDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->skiResortDailyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of SkiResort to get the weather daily forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next day. Returned by default.&lt;br&gt;&#x60;5&#x60; - Return forecast data for the next 5 days.&lt;br&gt;&#x60;10&#x60; - Return forecast data for the next 10 days. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsDailyForecast[]**](../Model/DsDailyForecast.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **skiResortHourlyForecast**
> \Infocenter\Client\Model\DsHourlyForecastArray skiResortHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

SkiResort hourly forecast

Get the full detailed information about the weather hourly forecast for a SkiResort object.

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
$id = "id_example"; // string | Use property identifier of SkiResort to get the weather hourly forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:<br>`1` - Return forecast data for the next hour. Default value.<br>`12` - Return hourly forecast for next 12 hours.<br>`24` - Return hourly forecast for next 24 hours.<br>`72` - Return hourly forecast for next 72 hours (3 days).
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->skiResortHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->skiResortHourlyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of SkiResort to get the weather hourly forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next hour. Default value.&lt;br&gt;&#x60;12&#x60; - Return hourly forecast for next 12 hours.&lt;br&gt;&#x60;24&#x60; - Return hourly forecast for next 24 hours.&lt;br&gt;&#x60;72&#x60; - Return hourly forecast for next 72 hours (3 days). | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsHourlyForecastArray**](../Model/DsHourlyForecastArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **skiResortWeather**
> \Infocenter\Client\Model\DsWeatherArray skiResortWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone)

SkiResort weather

Get the full detailed information about the weather for a SkiResort object.

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
$id = "id_example"; // string | Use property identifier of SkiResort to get the weather information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:<br>`0` - Return the most current weather conditions. Default value.<br>`6` - Return weather conditions from past 6 hours.<br>`24` - Return weather conditions from past 24 hours.
$details = true; // bool | Returns full details for the current conditions, `false` by default.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->skiResortWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->skiResortWeather: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of SkiResort to get the weather information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:&lt;br&gt;&#x60;0&#x60; - Return the most current weather conditions. Default value.&lt;br&gt;&#x60;6&#x60; - Return weather conditions from past 6 hours.&lt;br&gt;&#x60;24&#x60; - Return weather conditions from past 24 hours. | [optional]
 **details** | **bool**| Returns full details for the current conditions, &#x60;false&#x60; by default. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsWeatherArray**](../Model/DsWeatherArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tag**
> \Infocenter\Client\Model\DsTag tag($id, $ocp_apim_subscription_key, $project, $select, $accept_language, $accept_timezone, $scope)

Tag

Get the full detailed information of an Tag object.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).

try {
    $result = $apiInstance->tag($id, $ocp_apim_subscription_key, $project, $select, $accept_language, $accept_timezone, $scope);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]

### Return type

[**\Infocenter\Client\Model\DsTag**](../Model/DsTag.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **termVersion**
> \Infocenter\Client\Model\DsTermVersion termVersion($code, $ocp_apim_subscription_key, $accept_language, $accept_timezone)

TermVersion

Get the full detailed information of an TermVersion object.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->termVersion($code, $ocp_apim_subscription_key, $accept_language, $accept_timezone);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsTermVersion**](../Model/DsTermVersion.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tour**
> \Infocenter\Client\Model\DsTour tour($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

Tour

Get the full detailed information of an Tour object.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->tour($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsTour**](../Model/DsTour.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tourDailyForecast**
> \Infocenter\Client\Model\DsDailyForecast[] tourDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

Tour daily forecast

Get the full detailed information about the weather daily forecast for a Tour object.

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
$id = "id_example"; // string | Use property identifier of Webcam to get the weather daily forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:<br>`1` - Return forecast data for the next day. Returned by default.<br>`5` - Return forecast data for the next 5 days.<br>`10` - Return forecast data for the next 10 days.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->tourDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->tourDailyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Webcam to get the weather daily forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next day. Returned by default.&lt;br&gt;&#x60;5&#x60; - Return forecast data for the next 5 days.&lt;br&gt;&#x60;10&#x60; - Return forecast data for the next 10 days. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsDailyForecast[]**](../Model/DsDailyForecast.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tourHourlyForecast**
> \Infocenter\Client\Model\DsHourlyForecastArray tourHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

Tour hourly forecast

Get the full detailed information about the weather hourly forecast for a Tour object.

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
$id = "id_example"; // string | Use property identifier of Webcam to get the weather hourly forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:<br>`1` - Return forecast data for the next hour. Default value.<br>`12` - Return hourly forecast for next 12 hours.<br>`24` - Return hourly forecast for next 24 hours.<br>`72` - Return hourly forecast for next 72 hours (3 days).
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->tourHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->tourHourlyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Webcam to get the weather hourly forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next hour. Default value.&lt;br&gt;&#x60;12&#x60; - Return hourly forecast for next 12 hours.&lt;br&gt;&#x60;24&#x60; - Return hourly forecast for next 24 hours.&lt;br&gt;&#x60;72&#x60; - Return hourly forecast for next 72 hours (3 days). | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsHourlyForecastArray**](../Model/DsHourlyForecastArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tourWeather**
> \Infocenter\Client\Model\DsWeatherArray tourWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone)

Tour weather

Get the full detailed information about the weather for a Tour object.

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
$id = "id_example"; // string | Use property identifier of Webcam to get the weather information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:<br>`0` - Return the most current weather conditions. Default value.<br>`6` - Return weather conditions from past 6 hours.<br>`24` - Return weather conditions from past 24 hours.
$details = true; // bool | Returns full details for the current conditions, `false` by default.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->tourWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->tourWeather: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Webcam to get the weather information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:&lt;br&gt;&#x60;0&#x60; - Return the most current weather conditions. Default value.&lt;br&gt;&#x60;6&#x60; - Return weather conditions from past 6 hours.&lt;br&gt;&#x60;24&#x60; - Return weather conditions from past 24 hours. | [optional]
 **details** | **bool**| Returns full details for the current conditions, &#x60;false&#x60; by default. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsWeatherArray**](../Model/DsWeatherArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transportationSystem**
> \Infocenter\Client\Model\DsTransportationSystem transportationSystem($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

TransportationSystem

Get the full detailed information of a TransportationSystem object.

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
$id = "id_example"; // string | Use property identifier of TransportationSystem to get single object.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->transportationSystem($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transportationSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of TransportationSystem to get single object. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsTransportationSystem**](../Model/DsTransportationSystem.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transportationSystemDailyForecast**
> \Infocenter\Client\Model\DsDailyForecast[] transportationSystemDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

TransportationSystem daily forecast

Get the full detailed information about the weather daily forecast for a TransportationSystem object.

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
$id = "id_example"; // string | Use property identifier of TransportationSystem to get the weather daily forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:<br>`1` - Return forecast data for the next day. Returned by default.<br>`5` - Return forecast data for the next 5 days.<br>`10` - Return forecast data for the next 10 days.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->transportationSystemDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transportationSystemDailyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of TransportationSystem to get the weather daily forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next day. Returned by default.&lt;br&gt;&#x60;5&#x60; - Return forecast data for the next 5 days.&lt;br&gt;&#x60;10&#x60; - Return forecast data for the next 10 days. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsDailyForecast[]**](../Model/DsDailyForecast.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transportationSystemHourlyForecast**
> \Infocenter\Client\Model\DsHourlyForecastArray transportationSystemHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

TransportationSystem hourly forecast

Get the full detailed information about the weather hourly forecast for a TransportationSystem object.

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
$id = "id_example"; // string | Use property identifier of TransportationSystem to get the weather hourly forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:<br>`1` - Return forecast data for the next hour. Default value.<br>`12` - Return hourly forecast for next 12 hours.<br>`24` - Return hourly forecast for next 24 hours.<br>`72` - Return hourly forecast for next 72 hours (3 days).
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->transportationSystemHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transportationSystemHourlyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of TransportationSystem to get the weather hourly forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next hour. Default value.&lt;br&gt;&#x60;12&#x60; - Return hourly forecast for next 12 hours.&lt;br&gt;&#x60;24&#x60; - Return hourly forecast for next 24 hours.&lt;br&gt;&#x60;72&#x60; - Return hourly forecast for next 72 hours (3 days). | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsHourlyForecastArray**](../Model/DsHourlyForecastArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transportationSystemWeather**
> \Infocenter\Client\Model\DsWeatherArray transportationSystemWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone)

TransportationSystem weather

Get the full detailed information about the weather for a TransportationSystem object.

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
$id = "id_example"; // string | Use property identifier of TransportationSystem to get the weather information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:<br>`0` - Return the most current weather conditions. Default value.<br>`6` - Return weather conditions from past 6 hours.<br>`24` - Return weather conditions from past 24 hours.
$details = true; // bool | Returns full details for the current conditions, `false` by default.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->transportationSystemWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transportationSystemWeather: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of TransportationSystem to get the weather information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:&lt;br&gt;&#x60;0&#x60; - Return the most current weather conditions. Default value.&lt;br&gt;&#x60;6&#x60; - Return weather conditions from past 6 hours.&lt;br&gt;&#x60;24&#x60; - Return weather conditions from past 24 hours. | [optional]
 **details** | **bool**| Returns full details for the current conditions, &#x60;false&#x60; by default. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsWeatherArray**](../Model/DsWeatherArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **treeAdministrativeAreaRegion**
> \Infocenter\Client\Model\DsAdministrativeAreaTreeItem treeAdministrativeAreaRegion($id, $ocp_apim_subscription_key, $levels, $admin_areas_only, $project, $accept_language, $accept_timezone)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$levels = "levels_example"; // string | controls how deep the tree should go. default = 1
$admin_areas_only = "admin_areas_only_example"; // string | set to true only administrative areas are included. Set to false then all types of areas are included. This kind can destroy the tree structure and combined with high levels the performance can be bad. default = false
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->treeAdministrativeAreaRegion($id, $ocp_apim_subscription_key, $levels, $admin_areas_only, $project, $accept_language, $accept_timezone);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **levels** | **string**| controls how deep the tree should go. default &#x3D; 1 | [optional]
 **admin_areas_only** | **string**| set to true only administrative areas are included. Set to false then all types of areas are included. This kind can destroy the tree structure and combined with high levels the performance can be bad. default &#x3D; false | [optional]
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsAdministrativeAreaTreeItem**](../Model/DsAdministrativeAreaTreeItem.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **typeTree**
> \Infocenter\Client\Model\DsTypeTree typeTree($ocp_apim_subscription_key, $accept_language)

Type Tree

Get the full detailed information of an Type tree.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.

try {
    $result = $apiInstance->typeTree($ocp_apim_subscription_key, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->typeTree: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]

### Return type

[**\Infocenter\Client\Model\DsTypeTree**](../Model/DsTypeTree.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **videoObject**
> \Infocenter\Client\Model\DsVideoObject videoObject($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $accept_language, $accept_timezone, $scope)

VideoObject

Get the full detailed information of an VideoObject object.

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
$id = "id_example"; // string | Use property identifier of VideoObject to get single object.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).

try {
    $result = $apiInstance->videoObject($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $accept_language, $accept_timezone, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->videoObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of VideoObject to get single object. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]

### Return type

[**\Infocenter\Client\Model\DsVideoObject**](../Model/DsVideoObject.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webcam**
> \Infocenter\Client\Model\DsWebcam webcam($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version)

Webcam

Get the full detailed information of an Webcam object.

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$select = "select_example"; // string | Comma-separated list of properties to include in the response.
$include_all_photos = true; // bool | Use `true` to include all photos in the response, otherwise images with low confidence will be skipped.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.
$scope = "scope_example"; // string | Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.).
$ds_tag_filter = "ds_tag_filter_example"; // string | Filter tags in the response by `project` or `all`, by default `all`.
$ds_contained_in_place_filter = "ds_contained_in_place_filter_example"; // string | Filter containedInPlace in the response by `project` or `all`, by default `all`.
$ds_category_filter = "ds_category_filter_example"; // string | Filter categories in the response by `project`, `excludeRoot` or `all`, by default `all`. Filter by `excludeRoot` will filter out the root elements of the category tree.
$category_version = "category_version_example"; // string | Filters categories by version.

try {
    $result = $apiInstance->webcam($id, $ocp_apim_subscription_key, $project, $contained_in_place, $select, $include_all_photos, $accept_language, $accept_timezone, $scope, $ds_tag_filter, $ds_contained_in_place_filter, $ds_category_filter, $category_version);
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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **select** | **string**| Comma-separated list of properties to include in the response. | [optional]
 **include_all_photos** | **bool**| Use &#x60;true&#x60; to include all photos in the response, otherwise images with low confidence will be skipped. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]
 **scope** | **string**| Value scope. Some providers support different values for different client targets. Has an effect on some multilingual values (name, description, etc.). | [optional]
 **ds_tag_filter** | **string**| Filter tags in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_contained_in_place_filter** | **string**| Filter containedInPlace in the response by &#x60;project&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. | [optional]
 **ds_category_filter** | **string**| Filter categories in the response by &#x60;project&#x60;, &#x60;excludeRoot&#x60; or &#x60;all&#x60;, by default &#x60;all&#x60;. Filter by &#x60;excludeRoot&#x60; will filter out the root elements of the category tree. | [optional]
 **category_version** | **string**| Filters categories by version. | [optional]

### Return type

[**\Infocenter\Client\Model\DsWebcam**](../Model/DsWebcam.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webcamDailyForecast**
> \Infocenter\Client\Model\DsDailyForecast[] webcamDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

Webcam daily forecast

Get the full detailed information about weather daily forecast for a Webcam object.

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
$id = "id_example"; // string | Use property identifier of Webcam to get the weather daily forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:<br>`1` - Return forecast data for the next day. Returned by default.<br>`5` - Return forecast data for the next 5 days.<br>`10` - Return forecast data for the next 10 days.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->webcamDailyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->webcamDailyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Webcam to get the weather daily forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Sets for how many days the daily forecast responses are returned. Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next day. Returned by default.&lt;br&gt;&#x60;5&#x60; - Return forecast data for the next 5 days.&lt;br&gt;&#x60;10&#x60; - Return forecast data for the next 10 days. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsDailyForecast[]**](../Model/DsDailyForecast.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webcamHourlyForecast**
> \Infocenter\Client\Model\DsHourlyForecastArray webcamHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone)

Webcam hourly forecast

Get the full detailed information about weather hourly forecast for a Webcam object.

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
$id = "id_example"; // string | Use property identifier of Webcam to get the weather daily forecast information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:<br>`1` - Return forecast data for the next hour. Default value.<br>`12` - Return hourly forecast for next 12 hours.<br>`24` - Return hourly forecast for next 24 hours.<br>`72` - Return hourly forecast for next 72 hours (3 days).
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->webcamHourlyForecast($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->webcamHourlyForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Webcam to get the weather daily forecast information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather forecast. By default, the forecast data for next hour will be returned.Available values are:&lt;br&gt;&#x60;1&#x60; - Return forecast data for the next hour. Default value.&lt;br&gt;&#x60;12&#x60; - Return hourly forecast for next 12 hours.&lt;br&gt;&#x60;24&#x60; - Return hourly forecast for next 24 hours.&lt;br&gt;&#x60;72&#x60; - Return hourly forecast for next 72 hours (3 days). | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsHourlyForecastArray**](../Model/DsHourlyForecastArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webcamWeather**
> \Infocenter\Client\Model\DsWeatherArray webcamWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone)

Webcam weather

Get the full detailed information about the weather for a Webcam object.

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
$id = "id_example"; // string | Use property identifier of Webcam to get the weather information for it.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter.
$contained_in_place = "contained_in_place_example"; // string | Filters by `containedInPlace`. Use property identifier of place.
$duration = 56; // int | Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:<br>`0` - Return the most current weather conditions. Default value.<br>`6` - Return weather conditions from past 6 hours.<br>`24` - Return weather conditions from past 24 hours.
$details = true; // bool | Returns full details for the current conditions, `false` by default.
$accept_language = "accept_language_example"; // string | Two-letter language code to get localized properties.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID to apply its offset to dates and time.

try {
    $result = $apiInstance->webcamWeather($id, $ocp_apim_subscription_key, $project, $contained_in_place, $duration, $details, $accept_language, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->webcamWeather: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use property identifier of Webcam to get the weather information for it. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Required. Use this property to filter objects by a specific project. All partners must provide their project code in this parameter. | [optional]
 **contained_in_place** | **string**| Filters by &#x60;containedInPlace&#x60;. Use property identifier of place. | [optional]
 **duration** | **int**| Format - int32. Time frame of the returned weather conditions. By default, the most current weather conditions will be returned. Available values are:&lt;br&gt;&#x60;0&#x60; - Return the most current weather conditions. Default value.&lt;br&gt;&#x60;6&#x60; - Return weather conditions from past 6 hours.&lt;br&gt;&#x60;24&#x60; - Return weather conditions from past 24 hours. | [optional]
 **details** | **bool**| Returns full details for the current conditions, &#x60;false&#x60; by default. | [optional]
 **accept_language** | **string**| Two-letter language code to get localized properties. | [optional]
 **accept_timezone** | **string**| Time zone ID to apply its offset to dates and time. | [optional]

### Return type

[**\Infocenter\Client\Model\DsWeatherArray**](../Model/DsWeatherArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

