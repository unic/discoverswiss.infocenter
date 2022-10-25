# DsFacetValueResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**facet_type** | **string** | Type of facet query result. Possible values: [&#x27;value&#x27;, &#x27;range&#x27;] | [optional] 
**filter_type** | **string** | Filter type which could be used for building correct odata filters. Possible values: [&#x27;object&#x27;, &#x27;collection&#x27;] | [optional] 
**value_type** | **string** | Type of value property. Could be used for building correct odata filters. Possible values: [&#x27;string&#x27;, &#x27;integer&#x27;, &#x27;number&#x27;] | [optional] 
**from** | **object** | From value for filter range | [optional] 
**to** | **object** | To value for filter range | [optional] 
**value** | **object** | Value of facet | [optional] 
**count** | **int** |  | [optional] 
**query** | **string** | Contains string which could be used as facet filter value | [optional] 
**name** | **string** | Represents the name of category | [optional] 
**name_plural** | **string** | Represent the plural name of category | [optional] 
**additional_type** | **string** | Loaded from the facet-values-vertex like the &#x27;name&#x27; below | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

