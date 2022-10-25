# DsGeoShape

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | [**\Infocenter\Client\Model\DsPostalAddress**](DsPostalAddress.md) |  | [optional] 
**address_country** | **string** |  | [optional] 
**elevation** | **double** |  | [optional] 
**postal_code** | **string** |  | [optional] 
**box** | **string** |  | [optional] 
**circle** | **string** |  | [optional] 
**line** | **string** | A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two or more point objects separated by space. | [optional] 
**point** | **string** |  | [optional] 
**polygon** | **string** |  | [optional] 
**multiline** | **string** | Several lines in () | [optional] 
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

