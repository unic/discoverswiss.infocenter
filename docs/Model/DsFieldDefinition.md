# DsFieldDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**property_id** | **string** | PropertyId | [optional] 
**type** | **string** | Traveler field type. Can be radio, text, select, etc. | [optional] 
**additional_type** | **string** | Additional type for field. Can be ProfileImage, TravelerProfileImage, etc. for media type fields. | [optional] 
**name** | **string** | Can be used as a label of a field | [optional] 
**required** | **bool** | Is travelerField required? | [optional] 
**required_for_offers** | **bool** | Is this required to get an offer? null - not used for offers (default). false - can be used. true - must be used | [optional] 
**possible_value** | **map[string,string]** | Values of the field | [optional] 
**range_min** | **string** | Integer, number: number-date, dateTime: duration ISO 8601 duration | [optional] 
**range_max** | **string** | Integer, number: number-date, dateTime: duration ISO 8601 duration | [optional] 
**range_base_property_id** | **string** | Property id from which range will be calculated (e.g. for ZH it is birthDate). Currently only DateTime validation supports it. | [optional] 
**parent_field_property_id** | **string** | Name of parent field property | [optional] 
**parent_field_value** | **string** | Value of parent field property | [optional] 
**parent_field_operator** | **string** | Operator which is used to check the value defined in ParentFieldPropertyId. If operator is not defined or wrong operator provided then &#x27;equal&#x27; operator is used by default. Supported operators: &#x27;equal&#x27; - (default) current value must be equal to ParentFieldValue property; &#x27;notnullorempty&#x27; - can be applied on string and arrays and check that array/string contains value(s) | [optional] 
**readonly** | **bool** | Can this field be changed in the &#x27;edit order item&#x27;: null/false - the referenced property is editable. true - the referenced property must not change its value | [optional] 
**required_error_name** | **string** | Name of error message translated resource which is used to generate custom validation message instead of default Required validation message | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

