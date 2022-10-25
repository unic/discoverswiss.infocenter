# DsPostalAddress

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_country** | **string** |  | [optional] 
**address_locality** | **string** |  | [optional] 
**address_region** | **string** |  | [optional] 
**postal_code** | **string** |  | [optional] 
**post_office_box_number** | **string** |  | [optional] 
**street_address** | **string** |  | [optional] 
**address_line** | **string** |  | [optional] 
**available_language** | **string[]** | List of 2-letter-iso-code (en, de, it, ...) | [optional] 
**contact_type** | **string** |  | [optional] 
**email** | **string** |  | [optional] 
**fax_number** | **string** |  | [optional] 
**telephone** | **string** |  | [optional] 
**hours_available** | [**\Infocenter\Client\Model\DsOpeningHoursSpecification[]**](DsOpeningHoursSpecification.md) |  | [optional] 
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

