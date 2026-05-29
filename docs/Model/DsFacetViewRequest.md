# DsFacetViewRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**response_names** | **map[string,string]** | Translated values which will be used in the FacetResponse.Name property base on language. If it is not empty then value from dictionary will overwrite ResponseName property on search requests. | [optional] 
**key** | **string** | Optional. Custom key for the facet in the response. Use this when requesting the same facet multiple times with different filters (e.g. &#x27;tag1&#x27;, &#x27;tag2&#x27;). If not specified, the facet name will be used as the key. | [optional] 
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
**order_by** | **string** | Specifies the ordering method for the facet response. Accepted values: &#x27;count&#x27; (sort by result frequency), &#x27;value&#x27; or &#x27;name&#x27; (sort alphabetically). Default: &#x27;count&#x27;. | [optional] 
**order_direction** | **string** | Specifies the sort direction for the facet response. Accepted values: &#x27;asc&#x27; (ascending), &#x27;desc&#x27; (descending). Default: &#x27;desc&#x27;. | [optional] 
**exclude_redundant** | **bool** | When true, excludes facet values where applying the filter would not reduce the result set. Default: false. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

