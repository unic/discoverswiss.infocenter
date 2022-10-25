# DsProductPrice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**price_category_id** | **string** | Ticket Category id | [optional] 
**price_category_name** | **string** | Ticket Category name | [optional] 
**price_category_type** | **string** |  | [optional] 
**price_chf** | **double** | Price in CHF | [optional] 
**compare_at_price_chf** | **double** | Price to compare with (&#x27;regular price&#x27;, &#x27;instead-of&#x27;, &#x27;statt&#x27;) in CHF | [optional] 
**max_allowed_age** | **int** | Price valid until this age (first day of valid period counts) | [optional] 
**min_allowed_age** | **int** | Price valid from this age | [optional] 
**type** | **string** | If fixed total amount for booked guests will be price of this ticket category. If variable - price will be multiplied by guests count, e.g. if ticket category Adult has fixed price 100 CHF and 5 guests were booked total price will be still 100 CHF. If it had variable price type total price would be 500 CHF | [optional] 
**min_seats** | **int** | Minimum seats required to book this ticket category | [optional] 
**max_seats** | **int** | Maximum seats allowed to book this ticket category.If it is a single seat ticket with one ticket code it should be 1.If it is more than 1 e.g. 5 we assume that no matter how many spots were booked 2 or 5 this ticket will have only 1 ticket code (QR Code, Barcode, etc) which means it is a GROUP ticket | [optional] 
**valid_from** | [**\DateTime**](\DateTime.md) |  | [optional] 
**valid_through** | [**\DateTime**](\DateTime.md) |  | [optional] 
**reduction** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

