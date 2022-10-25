# DsReview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_reviewed** | [**\Infocenter\Client\Model\DsPlaceMember[]**](DsPlaceMember.md) | The item that is being reviewed/rated | [optional] 
**review_body** | **string** | The actual body of the review | [optional] 
**additional_property** | [**\Infocenter\Client\Model\DsPropertyValue[]**](DsPropertyValue.md) |  | [optional] 
**content_reference_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**copyright_year** | **int** |  | [optional] 
**encoding_format** | **string** |  | [optional] 
**is_accessible_for_free** | **bool** |  | [optional] 
**thumbnail_url** | **string** |  | [optional] 
**in_language** | **string** |  | [optional] 
**category** | [**\Infocenter\Client\Model\DsCategorySimplex[]**](DsCategorySimplex.md) |  | [optional] 
**contained_in_place** | [**\Infocenter\Client\Model\DsPlaceSimplex[]**](DsPlaceSimplex.md) |  | [optional] 
**tag** | [**\Infocenter\Client\Model\DsTagSimplex[]**](DsTagSimplex.md) |  | [optional] 
**campaign_tag** | [**\Infocenter\Client\Model\DsTagSimplex[]**](DsTagSimplex.md) |  | [optional] 
**profile_tag** | [**\Infocenter\Client\Model\DsTagSimplex[]**](DsTagSimplex.md) | Published profile tags in database | [optional] 
**robots** | **string** | Based on the same values that used in the Robots Meta Tag as defined by Google | [optional] 
**id** | **string** | json-ld: full url to load the object (based on identifier) | [optional] 
**identifier** | **string** |  | [optional] 
**removed** | **bool** |  | [optional] 
**data_governance** | [**\Infocenter\Client\Model\DsDataGovernance**](DsDataGovernance.md) |  | [optional] 
**last_modified** | [**\DateTime**](\DateTime.md) |  | [optional] 
**available_data_language** | **string[]** |  | [optional] 
**auto_translated_data** | **bool** | Indicates if the data in the current language was automatically translated | [optional] 
**license** | **string** |  | [optional] 
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

