# Timesheet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**employee_id** | **string** | The Xero identifier for an employee | 
**start_date** | **string** | Period start date (YYYY-MM-DD) | 
**end_date** | **string** | Period end date (YYYY-MM-DD) | 
**status** | [**\SidneyAllen\XeroPHP\Models\PayrollAu\TimesheetStatus**](TimesheetStatus.md) |  | [optional] 
**hours** | **float** | Timesheet total hours | [optional] 
**timesheet_id** | **string** | The Xero identifier for a Payroll Timesheet | [optional] 
**timesheet_lines** | [**\SidneyAllen\XeroPHP\Models\PayrollAu\TimesheetLine[]**](TimesheetLine.md) |  | [optional] 
**updated_date_utc** | **string** | Last modified timestamp | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


