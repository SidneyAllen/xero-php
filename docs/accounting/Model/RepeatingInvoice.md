# RepeatingInvoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | See Invoice Types | [optional] 
**contact** | [**\SidneyAllen\XeroPHP\Models\Accounting\Contact**](Contact.md) |  | [optional] 
**schedule** | [**\SidneyAllen\XeroPHP\Models\Accounting\Schedule**](Schedule.md) |  | [optional] 
**line_items** | [**\SidneyAllen\XeroPHP\Models\Accounting\LineItem[]**](LineItem.md) | See LineItems | [optional] 
**line_amount_types** | [**\SidneyAllen\XeroPHP\Models\Accounting\LineAmountTypes**](LineAmountTypes.md) |  | [optional] 
**reference** | **string** | ACCREC only – additional reference number | [optional] 
**branding_theme_id** | **string** | See BrandingThemes | [optional] 
**currency_code** | [**\SidneyAllen\XeroPHP\Models\Accounting\CurrencyCode**](CurrencyCode.md) |  | [optional] 
**status** | **string** | One of the following - DRAFT or AUTHORISED – See Invoice Status Codes | [optional] 
**sub_total** | **double** | Total of invoice excluding taxes | [optional] 
**total_tax** | **double** | Total tax on invoice | [optional] 
**total** | **double** | Total of Invoice tax inclusive (i.e. SubTotal + TotalTax) | [optional] 
**repeating_invoice_id** | **string** | Xero generated unique identifier for repeating invoice template | [optional] 
**id** | **string** | Xero generated unique identifier for repeating invoice template | [optional] 
**has_attachments** | **bool** | boolean to indicate if an invoice has an attachment | [optional] [default to false]
**attachments** | [**\SidneyAllen\XeroPHP\Models\Accounting\Attachment[]**](Attachment.md) | Displays array of attachments from the API | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


