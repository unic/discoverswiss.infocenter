# DsSearchResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**count** | **int** | Actual count of results in actual query but not count possible results | [optional] 
**values** | [**\Infocenter\Client\Model\DsIndexResponse[]**](DsIndexResponse.md) | Paged count of results by query | [optional] 
**facets** | [**map[string,\Infocenter\Client\Model\DsFacetResponse]**](DsFacetResponse.md) | Dictionary of facets by the query. Where the key is a string with name of facets from azure search, and the value is SearchFacetResponse | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

