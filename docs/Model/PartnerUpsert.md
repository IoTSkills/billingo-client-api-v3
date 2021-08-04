# PartnerUpsert

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | 
**address** | [**\BillingoClientAPIv3\Client\Model\Address**](Address.md) |  | 
**emails** | **string[]** |  | [optional] 
**taxcode** | **string** |  | [optional] 
**iban** | **string** |  | [optional] 
**swift** | **string** |  | [optional] 
**account_number** | **string** |  | [optional] 
**phone** | **string** |  | [optional] 
**general_ledger_number** | **string** |  | [optional] 
**tax_type** | [**\BillingoClientAPIv3\Client\Model\PartnerTaxType**](PartnerTaxType.md) |  | [optional] 
**custom_billing_settings** | [**\BillingoClientAPIv3\Client\Model\PartnerCustomBillingSettings**](PartnerCustomBillingSettings.md) |  | [optional] 
**group_member_tax_number** | **string** | The tax number of group member. Send tax number for update. Send empty string for delete. Ignored if omitted. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

