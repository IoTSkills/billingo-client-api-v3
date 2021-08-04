# Document

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The document&#x27;s unique identifier. | [optional] 
**invoice_number** | **string** | The document&#x27;s invoice number. | [optional] 
**type** | [**\BillingoClientAPIv3\Client\Model\DocumentType**](DocumentType.md) |  | [optional] 
**cancelled** | **bool** |  | [optional] 
**block_id** | **int** | DocumentBlock&#x27;s identifier. | [optional] 
**payment_status** | [**\BillingoClientAPIv3\Client\Model\PaymentStatus**](PaymentStatus.md) |  | [optional] 
**payment_method** | [**\BillingoClientAPIv3\Client\Model\PaymentMethod**](PaymentMethod.md) |  | [optional] 
**gross_total** | **float** | The document&#x27;s gross total price. | [optional] 
**currency** | [**\BillingoClientAPIv3\Client\Model\Currency**](Currency.md) |  | [optional] 
**conversion_rate** | **float** |  | [optional] 
**invoice_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**fulfillment_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**paid_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**organization** | [**\BillingoClientAPIv3\Client\Model\DocumentOrganization**](DocumentOrganization.md) |  | [optional] 
**partner** | [**\BillingoClientAPIv3\Client\Model\Partner**](Partner.md) |  | [optional] 
**document_partner** | [**\BillingoClientAPIv3\Client\Model\DocumentPartner**](DocumentPartner.md) |  | [optional] 
**electronic** | **bool** |  | [optional] 
**comment** | **string** |  | [optional] 
**tags** | **string[]** |  | [optional] 
**notification_status** | [**\BillingoClientAPIv3\Client\Model\DocumentNotificationStatus**](DocumentNotificationStatus.md) |  | [optional] 
**language** | [**\BillingoClientAPIv3\Client\Model\DocumentLanguage**](DocumentLanguage.md) |  | [optional] 
**items** | [**\BillingoClientAPIv3\Client\Model\DocumentItem[]**](DocumentItem.md) |  | [optional] 
**summary** | [**\BillingoClientAPIv3\Client\Model\DocumentSummary**](DocumentSummary.md) |  | [optional] 
**settings** | [**\BillingoClientAPIv3\Client\Model\DocumentSettings**](DocumentSettings.md) |  | [optional] 
**related_documents** | [**\BillingoClientAPIv3\Client\Model\DocumentAncestor[]**](DocumentAncestor.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

