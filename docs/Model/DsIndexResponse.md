# DsIndexResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | json-ld: full url to load the object (based on identifier) | [optional] 
**oua_id** | **int** | Outdooractive id | [optional] 
**identifier** | **string** |  | [optional] 
**datasource** | **string[]** |  | [optional] 
**data_governance** | [**\Infocenter\Client\Model\DsDataGovernance**](DsDataGovernance.md) |  | [optional] 
**type** | **string** |  | [optional] 
**additional_type** | **string** |  | [optional] 
**address** | [**\Infocenter\Client\Model\DsPostalAddress**](DsPostalAddress.md) |  | [optional] 
**geo** | [**\Infocenter\Client\Model\DsGeoCoordinates**](DsGeoCoordinates.md) |  | [optional] 
**geo_destination** | [**\Infocenter\Client\Model\DsGeoCoordinates**](DsGeoCoordinates.md) |  | [optional] 
**opening_hours** | **string** |  | [optional] 
**image** | [**\Infocenter\Client\Model\DsImageObjectSimplex**](DsImageObjectSimplex.md) |  | [optional] 
**name** | **string** |  | [optional] 
**disambiguating_description** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**contained_in_place** | **string** |  | [optional] 
**state** | **string** | Tour state | [optional] 
**time** | **int** | Tour time | [optional] 
**rating** | [**\Infocenter\Client\Model\DsTourRating**](DsTourRating.md) |  | [optional] 
**campaign_tag** | **string[]** |  | [optional] 
**profile_tag** | **string[]** |  | [optional] 
**schedule** | [**\Infocenter\Client\Model\DsSchedule[]**](DsSchedule.md) |  | [optional] 
**next_occurrence** | [**\DateTime**](\DateTime.md) | Contains the date and time of next occurrence of event | [optional] 
**recurred_count** | **int** | Contains the number of repetition of event with one week frequency | [optional] 
**elevation** | [**\Infocenter\Client\Model\DsTourElevation**](DsTourElevation.md) |  | [optional] 
**link** | [**\Infocenter\Client\Model\DsLink[]**](DsLink.md) |  | [optional] 
**auto_translated_data** | **bool** |  | [optional] 
**ticketing_contact** | **string** |  | [optional] 
**price_information** | **string** |  | [optional] 
**organizer** | [**\Infocenter\Client\Model\DsOrganization**](DsOrganization.md) |  | [optional] 
**last_modified** | [**\DateTime**](\DateTime.md) |  | [optional] 
**source_id** | **string[]** |  | [optional] 
**has_review** | **string** | true or false if the object contains reviews | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

