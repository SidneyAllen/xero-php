# Receipt

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | [**\DateTime**](\DateTime.md) | Date of receipt – YYYY-MM-DD | 
**contact** | [**\OpenAPI\Client\Model\Contact**](Contact.md) |  | 
**lineitems** | [**\OpenAPI\Client\Model\LineItem[]**](LineItem.md) |  | 
**user** | [**\OpenAPI\Client\Model\User**](User.md) |  | 
**reference** | **string** | Additional reference number | [optional] 
**line_amount_types** | [**\OpenAPI\Client\Model\LineAmountTypes**](LineAmountTypes.md) |  | [optional] 
**sub_total** | **double** | Total of receipt excluding taxes | [optional] 
**total_tax** | **double** | Total tax on receipt | [optional] 
**total** | **double** | Total of receipt tax inclusive (i.e. SubTotal + TotalTax) | [optional] 
**receipt_id** | **string** | Xero generated unique identifier for receipt | [optional] 
**status** | **string** | Current status of receipt – see status types | [optional] 
**receipt_number** | **string** | Xero generated sequence number for receipt in current claim for a given user | [optional] 
**updated_date_utc** | [**\DateTime**](\DateTime.md) | Last modified date UTC format | [optional] 
**has_attachments** | **bool** | boolean to indicate if a receipt has an attachment | [optional] 
**url** | **string** | URL link to a source document – shown as “Go to [appName]” in the Xero app | [optional] 
**validation_errors** | [**\OpenAPI\Client\Model\ValidationError[]**](ValidationError.md) | Displays array of validation error messages from the API | [optional] 
**attachments** | [**\OpenAPI\Client\Model\Attachment[]**](Attachment.md) | Displays array of attachments from the API | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


