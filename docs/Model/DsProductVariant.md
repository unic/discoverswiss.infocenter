# DsProductVariant

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identifier** | **string** | Product variant identifier | [optional] 
**name** | **string** | Multilingual | [optional] 
**product** | **string** |  | [optional] 
**sku** | **string** | The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.Order number at the supplier | [optional] 
**position** | **int** | Position of the variant in the list | [optional] 
**option** | [**\Infocenter\Client\Model\DsOption[]**](DsOption.md) | Options which make up the variants of the product | [optional] 
**inventory_quantity** | **int** | If null there is no inventory or it doesn&#x27;t matter API: &#x3D; inventoryQuantity - reserveQuantity (always &gt;&#x3D; 0) | [optional] 
**price_list** | [**\Infocenter\Client\Model\DsProductPrice[]**](DsProductPrice.md) | List of product prices by age | [optional] 
**tax_rate** | **double** | Tax rate (0.077 &#x3D; 7.7%) | [optional] 
**image** | [**\Infocenter\Client\Model\DsImageObjectSimplex**](DsImageObjectSimplex.md) |  | [optional] 
**created** | [**\DateTime**](\DateTime.md) | Date and time of the creation in the provider&#x27;s database | [optional] 
**last_modified** | [**\DateTime**](\DateTime.md) | Date and time of the last modification in the provider&#x27;s database | [optional] 
**additional_property** | [**\Infocenter\Client\Model\DsPropertyValue[]**](DsPropertyValue.md) | A property-value pair representing an additional characteristic of the entity in which there is no matching property in schema.org. | [optional] 
**item_field** | [**\Infocenter\Client\Model\DsFieldDefinition[]**](DsFieldDefinition.md) | Fields which must/should be added with values of the orderItem | [optional] 
**traveler_field** | [**\Infocenter\Client\Model\DsFieldDefinition[]**](DsFieldDefinition.md) | Fields which must/should be added with values of the traveler | [optional] 
**available_delivery_mode** | **string[]** | Available delivery mode see Delivery modes and shipping. Remark: if there are several, this information is in the itemFields as well and with them offered to the guest for selection. | [optional] 
**weight** | [**\Infocenter\Client\Model\DsQuantitativeValue**](DsQuantitativeValue.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

