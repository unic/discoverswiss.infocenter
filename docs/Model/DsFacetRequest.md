# DsFacetRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of facet or value from filterPropertyName property that will be in the response of search (e.g. rating/condition and ratingCondition returns same facet) | [optional] 
**response_name** | **string** | Value which will be returned in the FacetResponse.Name property. If it is null then a default name will be returned for the current facet | [optional] 
**interval** | **string** | Property that represent interval borders for range response | [optional] 
**values** | **string** | Property that represent borders for range response | [optional] 
**select_values** | **string[]** | Facet values which will be returned in the response. If selectValues is set then filterValues, values or interval can&#x27;t be used. If selectValues contains values then the value of count will be equals to max int (2,147,483,647) | [optional] 
**filter_values** | **string[]** | Facet values which will be returned in the response. If filterValues is set then selectValues, values or interval can&#x27;t be used. If filterValues contains values then the value of count will be equals to max int (2,147,483,647) | [optional] 
**count** | **int** | Count of facets in the response | [optional] 
**scope** | **string** | Represent type of scope which will be used for building response. Possible values: [&#x27;all&#x27;, &#x27;parent&#x27;, &#x27;current&#x27;]. Default value is current | [optional] 
**project** | **string[]** | Use this property to filter facet values by project | [optional] 
**additional_type** | **string[]** | Filter facet values by their additional type | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

