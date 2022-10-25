# DsSchedule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**by_day** | **string[]** | Where &#x27;string&#x27; is Monday, Tuesday https://schema.org/dayOfWeek | [optional] 
**start_date** | **string** | Only date without time information | [optional] 
**end_date** | **string** | Only date without time information | [optional] 
**start_time** | **string** | Only time | [optional] 
**end_time** | **string** | Only time | [optional] 
**alternate_name** | **string** |  | [optional] 
**description** | **string** | Multilingual. It is automatically translated if the description is not provided in all languages. Translated text is trimmed to 9000 symbols. Can contain HTML | [optional] 
**disambiguating_description** | **string** | Multilingual. Can contain HTML | [optional] 
**image** | [**\Infocenter\Client\Model\DsImageObjectSimplex**](DsImageObjectSimplex.md) |  | [optional] 
**same_as** | **string** |  | [optional] 
**url** | **string** | URL of the item | [optional] 
**additional_type** | **string** | Name of the &#x27;real&#x27;, more descriptive class which has no additional properties. Examples are schema.org/Country, schema.org/State, schema.org/City | [optional] 
**link** | [**\Infocenter\Client\Model\DsLink[]**](DsLink.md) | Web-links and general links between things | [optional] 
**potential_action** | [**\Infocenter\Client\Model\DsAction[]**](DsAction.md) |  | [optional] 
**name** | **string** | Multilingual. Can contain HTML | [optional] 
**type** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

