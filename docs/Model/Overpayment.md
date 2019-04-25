# Overpayment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | See Overpayment Types | [optional] 
**contact** | [**\OpenAPI\Client\Model\Contact**](Contact.md) |  | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date the overpayment is created YYYY-MM-DD | [optional] 
**status** | **string** | See Overpayment Status Codes | [optional] 
**line_amount_types** | [**\OpenAPI\Client\Model\LineAmountTypes**](LineAmountTypes.md) |  | [optional] 
**line_items** | [**\OpenAPI\Client\Model\LineItem[]**](LineItem.md) | See Overpayment Line Items | [optional] 
**sub_total** | **double** | The subtotal of the overpayment excluding taxes | [optional] 
**total_tax** | **double** | The total tax on the overpayment | [optional] 
**total** | **double** | The total of the overpayment (subtotal + total tax) | [optional] 
**updated_date_utc** | [**\DateTime**](\DateTime.md) | UTC timestamp of last update to the overpayment | [optional] 
**currency_code** | [**\OpenAPI\Client\Model\CurrencyCode**](CurrencyCode.md) |  | [optional] 
**overpayment_id** | **string** | Xero generated unique identifier | [optional] 
**currency_rate** | **double** | The currency rate for a multicurrency overpayment. If no rate is specified, the XE.com day rate is used | [optional] 
**remaining_credit** | **double** | The remaining credit balance on the overpayment | [optional] 
**allocations** | [**\OpenAPI\Client\Model\Allocation[]**](Allocation.md) | See Allocations | [optional] 
**payments** | [**\OpenAPI\Client\Model\Payment[]**](Payment.md) | See Payments | [optional] 
**has_attachments** | **bool** | boolean to indicate if a overpayment has an attachment | [optional] 
**attachments** | [**\OpenAPI\Client\Model\Attachment[]**](Attachment.md) | See Attachments | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


