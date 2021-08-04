# DocumentInsert

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**vendor_id** | **string** |  | [optional] 
**partner_id** | **int** |  | 
**block_id** | **int** |  | 
**bank_account_id** | **int** |  | [optional] 
**type** | [**\BillingoClientAPIv3\Client\Model\DocumentInsertType**](DocumentInsertType.md) |  | 
**fulfillment_date** | [**\DateTime**](\DateTime.md) |  | 
**due_date** | [**\DateTime**](\DateTime.md) |  | 
**payment_method** | [**\BillingoClientAPIv3\Client\Model\PaymentMethod**](PaymentMethod.md) |  | 
**language** | [**\BillingoClientAPIv3\Client\Model\DocumentLanguage**](DocumentLanguage.md) |  | 
**currency** | [**\BillingoClientAPIv3\Client\Model\Currency**](Currency.md) |  | 
**conversion_rate** | **float** |  | [optional] 
**electronic** | **bool** |  | [optional] [default to false]
**paid** | **bool** |  | [optional] [default to false]
**items** | [**\BillingoClientAPIv3\Client\Model\OneOfDocumentInsertItemsItems[]**](.md) |  | [optional] 
**comment** | **string** |  | [optional] 
**settings** | [**\BillingoClientAPIv3\Client\Model\DocumentSettings**](DocumentSettings.md) |  | [optional] 
**advance_invoice** | **int[]** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

