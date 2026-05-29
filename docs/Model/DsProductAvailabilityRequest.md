# DsProductAvailabilityRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**for_type** | **string** | Product itself or the place where the product is served. | [optional] 
**on_demand** | **bool** | Defines availabilities source: ondemand (by default) or cached. | [optional] 
**date_from** | [**\DateTime**](\DateTime.md) |  | [optional] 
**date_until** | [**\DateTime**](\DateTime.md) | To check a date range (from-until) can only be used in combination with ondemand&#x3D;false and checks each date separately. | [optional] 
**number_of_travelers** | **int** |  | [optional] 
**full_period_only** | **bool** | Only availabilities where start date + duration is within the requested date range will be returned. Value fullPeriodOnly&#x3D;true can only be used when onDemand&#x3D;false. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

