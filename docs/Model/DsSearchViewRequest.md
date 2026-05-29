# DsSearchViewRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional] 
**additional_type** | **string** | Type of the view. Possible values: &#x27;Query&#x27; (standard view), &#x27;Distribution&#x27;. | [optional] 
**description** | **string** |  | [optional] 
**schedule_strategy** | **string** | Defines the strategy for the schedule. Empty for non-updating views. Possible values: &#x27;EveryHour&#x27;, &#x27;Every6Hours&#x27;, &#x27;Every12Hours&#x27;, &#x27;Daily&#x27; and &#x27;Weekly&#x27;. | [optional] 
**search_request** | [**\Infocenter\Client\Model\DsSearchViewSearchRequest**](DsSearchViewSearchRequest.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

