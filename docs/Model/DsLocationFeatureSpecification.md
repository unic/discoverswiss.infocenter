# DsLocationFeatureSpecification

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hours_available** | [**\Infocenter\Client\Model\DsOpeningHoursSpecification**](DsOpeningHoursSpecification.md) |  | [optional] 
**valid_from** | [**\DateTime**](\DateTime.md) |  | [optional] 
**valid_through** | [**\DateTime**](\DateTime.md) |  | [optional] 
**max_value** | **double** |  | [optional] 
**min_value** | **double** |  | [optional] 
**unit_code** | **string** |  | [optional] 
**unit_text** | **string** |  | [optional] 
**value** | **object** |  | [optional] 
**value_str** | **string** | The string-value of the value property in case the valueType is not object but a value-type | [optional] 
**property_id** | **string** |  | [optional] 
**value_type** | **string** | String, integer, double etc. | [optional] 
**value_description** | **string** | Multilingual description of the value (for example of codes) | [optional] 
**audience** | **string[]** |  | [optional] 
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

