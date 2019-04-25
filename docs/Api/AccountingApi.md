# SidneyAllen\XeroPHP\AccountingApi

All URIs are relative to *https://api.xero.com/api.xro/2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccount**](AccountingApi.md#createAccount) | **PUT** /Accounts | Allows you to create a new chart of accounts
[**createAccountAttachmentByFileName**](AccountingApi.md#createAccountAttachmentByFileName) | **PUT** /Accounts/{AccountID}/Attachments/{FileName} | Allows you to create Attachment on Account
[**createBankTransaction**](AccountingApi.md#createBankTransaction) | **PUT** /BankTransactions | Allows you to create a spend or receive money transaction
[**createBankTransactionAttachmentByFileName**](AccountingApi.md#createBankTransactionAttachmentByFileName) | **PUT** /BankTransactions/{BankTransactionID}/Attachments/{FileName} | Allows you to createa an Attachment on BankTransaction by Filename
[**createBankTransactionHistoryRecord**](AccountingApi.md#createBankTransactionHistoryRecord) | **PUT** /BankTransactions/{BankTransactionID}/History | Allows you to create history record for a bank transactions
[**createBankTransfer**](AccountingApi.md#createBankTransfer) | **PUT** /BankTransfers | Allows you to create a bank transfers
[**createBankTransferAttachmentByFileName**](AccountingApi.md#createBankTransferAttachmentByFileName) | **PUT** /BankTransfers/{BankTransferID}/Attachments/{FileName} | 
[**createBankTransferHistoryRecord**](AccountingApi.md#createBankTransferHistoryRecord) | **PUT** /BankTransfers/{BankTransferID}/History | 
[**createBatchPayment**](AccountingApi.md#createBatchPayment) | **PUT** /BatchPayments | Create one or many BatchPayments for invoices
[**createBatchPaymentHistoryRecord**](AccountingApi.md#createBatchPaymentHistoryRecord) | **PUT** /BatchPayments/{BatchPaymentID}/History | Allows you to create a history record for a Batch Payment
[**createBrandingThemePaymentServices**](AccountingApi.md#createBrandingThemePaymentServices) | **POST** /BrandingThemes/{BrandingThemeID}/PaymentServices | Allow for the creation of new custom payment service for specified Branding Theme
[**createContact**](AccountingApi.md#createContact) | **PUT** /Contacts | 
[**createContactAttachmentByFileName**](AccountingApi.md#createContactAttachmentByFileName) | **PUT** /Contacts/{ContactID}/Attachments/{FileName} | 
[**createContactGroup**](AccountingApi.md#createContactGroup) | **PUT** /ContactGroups | Allows you to create a contact group
[**createContactGroupContacts**](AccountingApi.md#createContactGroupContacts) | **PUT** /ContactGroups/{ContactGroupID}/Contacts | Allows you to add Contacts to a Contract Group
[**createContactHistory**](AccountingApi.md#createContactHistory) | **PUT** /Contacts/{ContactID}/History | Allows you to retrieve a history records of an Contact
[**createCreditNote**](AccountingApi.md#createCreditNote) | **PUT** /CreditNotes | Allows you to create a credit note
[**createCreditNoteAllocation**](AccountingApi.md#createCreditNoteAllocation) | **PUT** /CreditNotes/{CreditNoteID}/Allocations | Allows you to create Allocation on CreditNote
[**createCreditNoteAttachmentByFileName**](AccountingApi.md#createCreditNoteAttachmentByFileName) | **PUT** /CreditNotes/{CreditNoteID}/Attachments/{FileName} | Allows you to create Attachments on CreditNote by file name
[**createCreditNoteHistory**](AccountingApi.md#createCreditNoteHistory) | **PUT** /CreditNotes/{CreditNoteID}/History | Allows you to retrieve a history records of an CreditNote
[**createCurrency**](AccountingApi.md#createCurrency) | **PUT** /Currencies | 
[**createEmployee**](AccountingApi.md#createEmployee) | **PUT** /Employees | Allows you to create new employees used in Xero payrun
[**createExpenseClaim**](AccountingApi.md#createExpenseClaim) | **PUT** /ExpenseClaims | Allows you to retrieve expense claims
[**createExpenseClaimHistory**](AccountingApi.md#createExpenseClaimHistory) | **PUT** /ExpenseClaims/{ExpenseClaimID}/History | Allows you to create a history records of an ExpenseClaim
[**createInvoice**](AccountingApi.md#createInvoice) | **PUT** /Invoices | Allows you to create any sales invoices or purchase bills
[**createInvoiceAttachmentByFileName**](AccountingApi.md#createInvoiceAttachmentByFileName) | **PUT** /Invoices/{InvoiceID}/Attachments/{FileName} | Allows you to create an Attachment on invoices or purchase bills by it&#39;s filename
[**createInvoiceHistory**](AccountingApi.md#createInvoiceHistory) | **PUT** /Invoices/{InvoiceID}/History | Allows you to retrieve a history records of an invoice
[**createItem**](AccountingApi.md#createItem) | **PUT** /Items | Allows you to create an item
[**createItemHistory**](AccountingApi.md#createItemHistory) | **PUT** /Items/{ItemID}/History | Allows you to create a history record for items
[**createLinkedTransaction**](AccountingApi.md#createLinkedTransaction) | **PUT** /LinkedTransactions | Allows you to create linked transactions (billable expenses)
[**createManualJournal**](AccountingApi.md#createManualJournal) | **PUT** /ManualJournals | Allows you to create a manual journal
[**createManualJournalAttachmentByFileName**](AccountingApi.md#createManualJournalAttachmentByFileName) | **PUT** /ManualJournals/{ManualJournalID}/Attachments/{FileName} | Allows you to create a specified Attachment on ManualJournal by file name
[**createOverpaymentAllocation**](AccountingApi.md#createOverpaymentAllocation) | **PUT** /Overpayments/{OverpaymentID}/Allocations | Allows you to retrieve Allocations for overpayments
[**createOverpaymentHistory**](AccountingApi.md#createOverpaymentHistory) | **PUT** /Overpayments/{OverpaymentID}/History | Allows you to create history records of an Overpayment
[**createPayment**](AccountingApi.md#createPayment) | **PUT** /Payments | Allows you to create payments for invoices and credit notes
[**createPaymentHistory**](AccountingApi.md#createPaymentHistory) | **PUT** /Payments/{PaymentID}/History | Allows you to create a history record for a payment
[**createPaymentService**](AccountingApi.md#createPaymentService) | **PUT** /PaymentServices | Allows you to create payment services
[**createPrepaymentAllocation**](AccountingApi.md#createPrepaymentAllocation) | **PUT** /Prepayments/{PrepaymentID}/Allocations | Allows you to create an Allocation for prepayments
[**createPrepaymentHistory**](AccountingApi.md#createPrepaymentHistory) | **PUT** /Prepayments/{PrepaymentID}/History | Allows you to create a history record for an Prepayment
[**createPurchaseOrder**](AccountingApi.md#createPurchaseOrder) | **PUT** /PurchaseOrders | Allows you to create purchase orders
[**createPurchaseOrderHistory**](AccountingApi.md#createPurchaseOrderHistory) | **PUT** /PurchaseOrders/{PurchaseOrderID}/History | Allows you to create HistoryRecord for purchase orders
[**createReceipt**](AccountingApi.md#createReceipt) | **PUT** /Receipts | Allows you to create draft expense claim receipts for any user
[**createReceiptAttachmentByFileName**](AccountingApi.md#createReceiptAttachmentByFileName) | **PUT** /Receipts/{ReceiptID}/Attachments/{FileName} | Allows you to create Attachment on expense claim receipts by file name
[**createReceiptHistory**](AccountingApi.md#createReceiptHistory) | **PUT** /Receipts/{ReceiptID}/History | Allows you to retrieve a history records of an Receipt
[**createRepeatingInvoiceAttachmentByFileName**](AccountingApi.md#createRepeatingInvoiceAttachmentByFileName) | **PUT** /RepeatingInvoices/{RepeatingInvoiceID}/Attachments/{FileName} | Allows you to create attachment on repeating invoices by file name
[**createRepeatingInvoiceHistory**](AccountingApi.md#createRepeatingInvoiceHistory) | **PUT** /RepeatingInvoices/{RepeatingInvoiceID}/History | Allows you to create history for a repeating invoice
[**createTaxRate**](AccountingApi.md#createTaxRate) | **PUT** /TaxRates | Allows you to create Tax Rates
[**createTrackingCategory**](AccountingApi.md#createTrackingCategory) | **PUT** /TrackingCategories | Allows you to create tracking categories
[**createTrackingOptions**](AccountingApi.md#createTrackingOptions) | **PUT** /TrackingCategories/{TrackingCategoryID}/Options | Allows you to create options for a specified tracking category
[**deleteAccount**](AccountingApi.md#deleteAccount) | **DELETE** /Accounts/{AccountID} | Allows you to delete a chart of accounts
[**deleteContactGroupContact**](AccountingApi.md#deleteContactGroupContact) | **DELETE** /ContactGroups/{ContactGroupID}/Contacts/{ContactID} | Allows you to delete a specific Contact from a Contract Group
[**deleteContactGroupContacts**](AccountingApi.md#deleteContactGroupContacts) | **DELETE** /ContactGroups/{ContactGroupID}/Contacts | Allows you to delete  all Contacts from a Contract Group
[**deleteItem**](AccountingApi.md#deleteItem) | **DELETE** /Items/{ItemID} | Allows you to delete a specified item
[**deleteLinkedTransaction**](AccountingApi.md#deleteLinkedTransaction) | **DELETE** /LinkedTransactions/{LinkedTransactionID} | Allows you to delete a specified linked transactions (billable expenses)
[**deletePayment**](AccountingApi.md#deletePayment) | **POST** /Payments/{PaymentID} | Allows you to update a specified payment for invoices and credit notes
[**deleteTrackingCategory**](AccountingApi.md#deleteTrackingCategory) | **DELETE** /TrackingCategories/{TrackingCategoryID} | Allows you to delete tracking categories
[**deleteTrackingOptions**](AccountingApi.md#deleteTrackingOptions) | **DELETE** /TrackingCategories/{TrackingCategoryID}/Options/{TrackingOptionID} | Allows you to delete a specified option for a specified tracking category
[**emailInvoice**](AccountingApi.md#emailInvoice) | **POST** /Invoices/{InvoiceID}/Email | Allows you to email a copy of invoice to related Contact
[**getAccount**](AccountingApi.md#getAccount) | **GET** /Accounts/{AccountID} | Allows you to retrieve a single chart of accounts
[**getAccountAttachmentByFileName**](AccountingApi.md#getAccountAttachmentByFileName) | **GET** /Accounts/{AccountID}/Attachments/{FileName} | Allows you to retrieve Attachment on Account by Filename
[**getAccountAttachmentById**](AccountingApi.md#getAccountAttachmentById) | **GET** /Accounts/{AccountID}/Attachments/{AttachmentID} | Allows you to retrieve specific Attachment on Account
[**getAccountAttachments**](AccountingApi.md#getAccountAttachments) | **GET** /Accounts/{AccountID}/Attachments | Allows you to retrieve Attachments for accounts
[**getAccounts**](AccountingApi.md#getAccounts) | **GET** /Accounts | Allows you to retrieve the full chart of accounts
[**getBankTransaction**](AccountingApi.md#getBankTransaction) | **GET** /BankTransactions/{BankTransactionID} | Allows you to retrieve a single spend or receive money transaction
[**getBankTransactionAttachmentByFileName**](AccountingApi.md#getBankTransactionAttachmentByFileName) | **GET** /BankTransactions/{BankTransactionID}/Attachments/{FileName} | Allows you to retrieve Attachments on BankTransaction by Filename
[**getBankTransactionAttachmentById**](AccountingApi.md#getBankTransactionAttachmentById) | **GET** /BankTransactions/{BankTransactionID}/Attachments/{AttachmentID} | Allows you to retrieve Attachments on a specific BankTransaction
[**getBankTransactionAttachments**](AccountingApi.md#getBankTransactionAttachments) | **GET** /BankTransactions/{BankTransactionID}/Attachments | Allows you to retrieve any attachments to bank transactions
[**getBankTransactions**](AccountingApi.md#getBankTransactions) | **GET** /BankTransactions | Allows you to retrieve any spend or receive money transactions
[**getBankTransactionsHistory**](AccountingApi.md#getBankTransactionsHistory) | **GET** /BankTransactions/{BankTransactionID}/History | Allows you to retrieve history from a bank transactions
[**getBankTransfer**](AccountingApi.md#getBankTransfer) | **GET** /BankTransfers/{BankTransferID} | Allows you to retrieve any bank transfers
[**getBankTransferAttachmentByFileName**](AccountingApi.md#getBankTransferAttachmentByFileName) | **GET** /BankTransfers/{BankTransferID}/Attachments/{FileName} | Allows you to retrieve Attachments on BankTransfer by file name
[**getBankTransferAttachmentById**](AccountingApi.md#getBankTransferAttachmentById) | **GET** /BankTransfers/{BankTransferID}/Attachments/{AttachmentID} | Allows you to retrieve Attachments on BankTransfer
[**getBankTransferAttachments**](AccountingApi.md#getBankTransferAttachments) | **GET** /BankTransfers/{BankTransferID}/Attachments | Allows you to retrieve Attachments from  bank transfers
[**getBankTransferHistory**](AccountingApi.md#getBankTransferHistory) | **GET** /BankTransfers/{BankTransferID}/History | Allows you to retrieve history from a bank transfers
[**getBankTransfers**](AccountingApi.md#getBankTransfers) | **GET** /BankTransfers | Allows you to retrieve all bank transfers
[**getBatchPaymentHistory**](AccountingApi.md#getBatchPaymentHistory) | **GET** /BatchPayments/{BatchPaymentID}/History | Allows you to retrieve history from a Batch Payment
[**getBatchPayments**](AccountingApi.md#getBatchPayments) | **GET** /BatchPayments | Retrieve either one or many BatchPayments for invoices
[**getBrandingTheme**](AccountingApi.md#getBrandingTheme) | **GET** /BrandingThemes/{BrandingThemeID} | Allows you to retrieve a specific BrandingThemes
[**getBrandingThemePaymentServices**](AccountingApi.md#getBrandingThemePaymentServices) | **GET** /BrandingThemes/{BrandingThemeID}/PaymentServices | Allows you to retrieve the Payment services for a Branding Theme
[**getBrandingThemes**](AccountingApi.md#getBrandingThemes) | **GET** /BrandingThemes | Allows you to retrieve all the BrandingThemes
[**getContact**](AccountingApi.md#getContact) | **GET** /Contacts/{ContactID} | Allows you to retrieve, add and update contacts in a Xero organisation
[**getContactAttachmentByFileName**](AccountingApi.md#getContactAttachmentByFileName) | **GET** /Contacts/{ContactID}/Attachments/{FileName} | Allows you to retrieve Attachments on Contacts by file name
[**getContactAttachmentById**](AccountingApi.md#getContactAttachmentById) | **GET** /Contacts/{ContactID}/Attachments/{AttachmentID} | Allows you to retrieve Attachments on Contacts
[**getContactAttachments**](AccountingApi.md#getContactAttachments) | **GET** /Contacts/{ContactID}/Attachments | Allows you to retrieve, add and update contacts in a Xero organisation
[**getContactCISSettings**](AccountingApi.md#getContactCISSettings) | **GET** /Contacts/{ContactID}/CISSettings | Allows you to retrieve CISSettings for a contact in a Xero organisation
[**getContactGroup**](AccountingApi.md#getContactGroup) | **GET** /ContactGroups/{ContactGroupID} | Allows you to retrieve a unique Contract Group by ID
[**getContactGroups**](AccountingApi.md#getContactGroups) | **GET** /ContactGroups | Allows you to retrieve the ContactID and Name of all the contacts in a contact group
[**getContactHistory**](AccountingApi.md#getContactHistory) | **GET** /Contacts/{ContactID}/History | Allows you to retrieve a history records of an Contact
[**getContacts**](AccountingApi.md#getContacts) | **GET** /Contacts | Allows you to retrieve, add and update contacts in a Xero organisation
[**getCreditNote**](AccountingApi.md#getCreditNote) | **GET** /CreditNotes/{CreditNoteID} | Allows you to retrieve a specific credit note
[**getCreditNoteAsPdf**](AccountingApi.md#getCreditNoteAsPdf) | **GET** /CreditNotes/{CreditNoteID}/pdf | Allows you to retrieve Credit Note as PDF files
[**getCreditNoteAttachmentByFileName**](AccountingApi.md#getCreditNoteAttachmentByFileName) | **GET** /CreditNotes/{CreditNoteID}/Attachments/{FileName} | Allows you to retrieve Attachments on CreditNote by file name
[**getCreditNoteAttachmentById**](AccountingApi.md#getCreditNoteAttachmentById) | **GET** /CreditNotes/{CreditNoteID}/Attachments/{AttachmentID} | Allows you to retrieve Attachments on CreditNote
[**getCreditNoteAttachments**](AccountingApi.md#getCreditNoteAttachments) | **GET** /CreditNotes/{CreditNoteID}/Attachments | Allows you to retrieve Attachments for credit notes
[**getCreditNoteHistory**](AccountingApi.md#getCreditNoteHistory) | **GET** /CreditNotes/{CreditNoteID}/History | Allows you to retrieve a history records of an CreditNote
[**getCreditNotes**](AccountingApi.md#getCreditNotes) | **GET** /CreditNotes | Allows you to retrieve any credit notes
[**getCurrencies**](AccountingApi.md#getCurrencies) | **GET** /Currencies | Allows you to retrieve currencies for your organisation
[**getEmployee**](AccountingApi.md#getEmployee) | **GET** /Employees/{EmployeeID} | Allows you to retrieve a specific employee used in Xero payrun
[**getEmployees**](AccountingApi.md#getEmployees) | **GET** /Employees | Allows you to retrieve employees used in Xero payrun
[**getExpenseClaim**](AccountingApi.md#getExpenseClaim) | **GET** /ExpenseClaims/{ExpenseClaimID} | Allows you to retrieve a specified expense claim
[**getExpenseClaimHistory**](AccountingApi.md#getExpenseClaimHistory) | **GET** /ExpenseClaims/{ExpenseClaimID}/History | Allows you to retrieve a history records of an ExpenseClaim
[**getExpenseClaims**](AccountingApi.md#getExpenseClaims) | **GET** /ExpenseClaims | Allows you to retrieve expense claims
[**getInvoice**](AccountingApi.md#getInvoice) | **GET** /Invoices/{InvoiceID} | Allows you to retrieve a specified sales invoice or purchase bill
[**getInvoiceAsPdf**](AccountingApi.md#getInvoiceAsPdf) | **GET** /Invoices/{InvoiceID}/pdf | Allows you to retrieve invoices or purchase bills as PDF files
[**getInvoiceAttachmentByFileName**](AccountingApi.md#getInvoiceAttachmentByFileName) | **GET** /Invoices/{InvoiceID}/Attachments/{FileName} | Allows you to retrieve Attachment on invoices or purchase bills by it&#39;s filename
[**getInvoiceAttachmentById**](AccountingApi.md#getInvoiceAttachmentById) | **GET** /Invoices/{InvoiceID}/Attachments/{AttachmentID} | Allows you to retrieve a specified Attachment on invoices or purchase bills by it&#39;s ID
[**getInvoiceAttachments**](AccountingApi.md#getInvoiceAttachments) | **GET** /Invoices/{InvoiceID}/Attachments | Allows you to retrieve Attachments on invoices or purchase bills
[**getInvoiceHistory**](AccountingApi.md#getInvoiceHistory) | **GET** /Invoices/{InvoiceID}/History | Allows you to retrieve a history records of an invoice
[**getInvoiceReminders**](AccountingApi.md#getInvoiceReminders) | **GET** /InvoiceReminders/Settings | Allows you to retrieve invoice reminder settings
[**getInvoices**](AccountingApi.md#getInvoices) | **GET** /Invoices | Allows you to retrieve any sales invoices or purchase bills
[**getItem**](AccountingApi.md#getItem) | **GET** /Items/{ItemID} | Allows you to retrieve a specified item
[**getItemHistory**](AccountingApi.md#getItemHistory) | **GET** /Items/{ItemID}/History | Allows you to retrieve history for items
[**getItems**](AccountingApi.md#getItems) | **GET** /Items | Allows you to retrieve any items
[**getJournal**](AccountingApi.md#getJournal) | **GET** /Journals/{JournalID} | Allows you to retrieve a specified journals.
[**getJournals**](AccountingApi.md#getJournals) | **GET** /Journals | Allows you to retrieve any journals.
[**getLinkedTransaction**](AccountingApi.md#getLinkedTransaction) | **GET** /LinkedTransactions/{LinkedTransactionID} | Allows you to retrieve a specified linked transactions (billable expenses)
[**getLinkedTransactions**](AccountingApi.md#getLinkedTransactions) | **GET** /LinkedTransactions | Retrieve linked transactions (billable expenses)
[**getManualJournal**](AccountingApi.md#getManualJournal) | **GET** /ManualJournals/{ManualJournalID} | Allows you to retrieve a specified manual journals
[**getManualJournalAttachmentByFileName**](AccountingApi.md#getManualJournalAttachmentByFileName) | **GET** /ManualJournals/{ManualJournalID}/Attachments/{FileName} | Allows you to retrieve specified Attachment on ManualJournal by file name
[**getManualJournalAttachmentById**](AccountingApi.md#getManualJournalAttachmentById) | **GET** /ManualJournals/{ManualJournalID}/Attachments/{AttachmentID} | Allows you to retrieve specified Attachment on ManualJournals
[**getManualJournalAttachments**](AccountingApi.md#getManualJournalAttachments) | **GET** /ManualJournals/{ManualJournalID}/Attachments | Allows you to retrieve Attachment for manual journals
[**getManualJournals**](AccountingApi.md#getManualJournals) | **GET** /ManualJournals | Allows you to retrieve any manual journals
[**getOnlineInvoice**](AccountingApi.md#getOnlineInvoice) | **GET** /Invoices/{InvoiceID}/OnlineInvoice | Allows you to retrieve a URL to an online invoice
[**getOrganisationCISSettings**](AccountingApi.md#getOrganisationCISSettings) | **GET** /Organisation/{OrganisationID}/CISSettings | Allows you To verify if an organisation is using contruction industry scheme, you can retrieve the CIS settings for the organistaion.
[**getOrganisations**](AccountingApi.md#getOrganisations) | **GET** /Organisation | Allows you to retrieve Organisation details
[**getOverpayment**](AccountingApi.md#getOverpayment) | **GET** /Overpayments/{OverpaymentID} | Allows you to retrieve a specified overpayments
[**getOverpaymentHistory**](AccountingApi.md#getOverpaymentHistory) | **GET** /Overpayments/{OverpaymentID}/History | Allows you to retrieve a history records of an Overpayment
[**getOverpayments**](AccountingApi.md#getOverpayments) | **GET** /Overpayments | Allows you to retrieve overpayments
[**getPayment**](AccountingApi.md#getPayment) | **GET** /Payments/{PaymentID} | Allows you to retrieve a specified payment for invoices and credit notes
[**getPaymentHistory**](AccountingApi.md#getPaymentHistory) | **GET** /Payments/{PaymentID}/History | Allows you to retrieve history records of a payment
[**getPaymentServices**](AccountingApi.md#getPaymentServices) | **GET** /PaymentServices | Allows you to retrieve payment services
[**getPayments**](AccountingApi.md#getPayments) | **GET** /Payments | Allows you to retrieve payments for invoices and credit notes
[**getPrepayment**](AccountingApi.md#getPrepayment) | **GET** /Prepayments/{PrepaymentID} | Allows you to retrieve a specified prepayments
[**getPrepaymentHistory**](AccountingApi.md#getPrepaymentHistory) | **GET** /Prepayments/{PrepaymentID}/History | Allows you to retrieve a history records of an Prepayment
[**getPrepayments**](AccountingApi.md#getPrepayments) | **GET** /Prepayments | Allows you to retrieve prepayments
[**getPurchaseOrder**](AccountingApi.md#getPurchaseOrder) | **GET** /PurchaseOrders/{PurchaseOrderID} | Allows you to retrieve a specified purchase orders
[**getPurchaseOrderHistory**](AccountingApi.md#getPurchaseOrderHistory) | **GET** /PurchaseOrders/{PurchaseOrderID}/History | Allows you to retrieve history for PurchaseOrder
[**getPurchaseOrders**](AccountingApi.md#getPurchaseOrders) | **GET** /PurchaseOrders | Allows you to retrieve purchase orders
[**getReceipt**](AccountingApi.md#getReceipt) | **GET** /Receipts/{ReceiptID} | Allows you to retrieve a specified draft expense claim receipts
[**getReceiptAttachmentByFileName**](AccountingApi.md#getReceiptAttachmentByFileName) | **GET** /Receipts/{ReceiptID}/Attachments/{FileName} | Allows you to retrieve Attachments on expense claim receipts by file name
[**getReceiptAttachmentById**](AccountingApi.md#getReceiptAttachmentById) | **GET** /Receipts/{ReceiptID}/Attachments/{AttachmentID} | Allows you to retrieve Attachments on expense claim receipts by ID
[**getReceiptAttachments**](AccountingApi.md#getReceiptAttachments) | **GET** /Receipts/{ReceiptID}/Attachments | Allows you to retrieve Attachments for expense claim receipts
[**getReceiptHistory**](AccountingApi.md#getReceiptHistory) | **GET** /Receipts/{ReceiptID}/History | Allows you to retrieve a history records of an Receipt
[**getReceipts**](AccountingApi.md#getReceipts) | **GET** /Receipts | Allows you to retrieve draft expense claim receipts for any user
[**getRepeatingInvoice**](AccountingApi.md#getRepeatingInvoice) | **GET** /RepeatingInvoices/{RepeatingInvoiceID} | Allows you to retrieve a specified repeating invoice
[**getRepeatingInvoiceAttachmentByFileName**](AccountingApi.md#getRepeatingInvoiceAttachmentByFileName) | **GET** /RepeatingInvoices/{RepeatingInvoiceID}/Attachments/{FileName} | Allows you to retrieve specified attachment on repeating invoices by file name
[**getRepeatingInvoiceAttachmentById**](AccountingApi.md#getRepeatingInvoiceAttachmentById) | **GET** /RepeatingInvoices/{RepeatingInvoiceID}/Attachments/{AttachmentID} | Allows you to retrieve a specified Attachments on repeating invoices
[**getRepeatingInvoiceAttachments**](AccountingApi.md#getRepeatingInvoiceAttachments) | **GET** /RepeatingInvoices/{RepeatingInvoiceID}/Attachments | Allows you to retrieve Attachments on repeating invoice
[**getRepeatingInvoiceHistory**](AccountingApi.md#getRepeatingInvoiceHistory) | **GET** /RepeatingInvoices/{RepeatingInvoiceID}/History | Allows you to retrieve history for a repeating invoice
[**getRepeatingInvoices**](AccountingApi.md#getRepeatingInvoices) | **GET** /RepeatingInvoices | Allows you to retrieve any repeating invoices
[**getReportAgedPayablesByContact**](AccountingApi.md#getReportAgedPayablesByContact) | **GET** /Reports/AgedPayablesByContact | Allows you to retrieve report for AgedPayablesByContact
[**getReportAgedReceivablesByContact**](AccountingApi.md#getReportAgedReceivablesByContact) | **GET** /Reports/AgedReceivablesByContact | Allows you to retrieve report for AgedReceivablesByContact
[**getReportBASorGST**](AccountingApi.md#getReportBASorGST) | **GET** /Reports/{ReportID} | Allows you to retrieve report for BAS only valid for AU orgs
[**getReportBASorGSTList**](AccountingApi.md#getReportBASorGSTList) | **GET** /Reports | Allows you to retrieve report for BAS only valid for AU orgs
[**getReportBalanceSheet**](AccountingApi.md#getReportBalanceSheet) | **GET** /Reports/BalanceSheet | Allows you to retrieve report for BalanceSheet
[**getReportBankSummary**](AccountingApi.md#getReportBankSummary) | **GET** /Reports/BankSummary | Allows you to retrieve report for BankSummary
[**getReportBudgetSummary**](AccountingApi.md#getReportBudgetSummary) | **GET** /Reports/BudgetSummary | Allows you to retrieve report for Budget Summary
[**getReportExecutiveSummary**](AccountingApi.md#getReportExecutiveSummary) | **GET** /Reports/ExecutiveSummary | Allows you to retrieve report for ExecutiveSummary
[**getReportProfitAndLoss**](AccountingApi.md#getReportProfitAndLoss) | **GET** /Reports/ProfitAndLoss | Allows you to retrieve report for ProfitAndLoss
[**getReportTenNinetyNine**](AccountingApi.md#getReportTenNinetyNine) | **GET** /Reports/TenNinetyNine | Allows you to retrieve report for TenNinetyNine
[**getReportTrialBalance**](AccountingApi.md#getReportTrialBalance) | **GET** /Reports/TrialBalance | Allows you to retrieve report for TrialBalance
[**getTaxRates**](AccountingApi.md#getTaxRates) | **GET** /TaxRates | Allows you to retrieve Tax Rates
[**getTrackingCategories**](AccountingApi.md#getTrackingCategories) | **GET** /TrackingCategories | Allows you to retrieve tracking categories and options
[**getTrackingCategory**](AccountingApi.md#getTrackingCategory) | **GET** /TrackingCategories/{TrackingCategoryID} | Allows you to retrieve tracking categories and options for specified category
[**getUser**](AccountingApi.md#getUser) | **GET** /Users/{UserID} | Allows you to retrieve a specified user
[**getUsers**](AccountingApi.md#getUsers) | **GET** /Users | Allows you to retrieve users
[**updateAccount**](AccountingApi.md#updateAccount) | **POST** /Accounts/{AccountID} | Allows you to update a chart of accounts
[**updateAccountAttachmentByFileName**](AccountingApi.md#updateAccountAttachmentByFileName) | **POST** /Accounts/{AccountID}/Attachments/{FileName} | Allows you to update Attachment on Account by Filename
[**updateBankTransaction**](AccountingApi.md#updateBankTransaction) | **POST** /BankTransactions/{BankTransactionID} | Allows you to update a single spend or receive money transaction
[**updateBankTransactionAttachmentByFileName**](AccountingApi.md#updateBankTransactionAttachmentByFileName) | **POST** /BankTransactions/{BankTransactionID}/Attachments/{FileName} | Allows you to update an Attachment on BankTransaction by Filename
[**updateBankTransferAttachmentByFileName**](AccountingApi.md#updateBankTransferAttachmentByFileName) | **POST** /BankTransfers/{BankTransferID}/Attachments/{FileName} | 
[**updateContact**](AccountingApi.md#updateContact) | **POST** /Contacts/{ContactID} | 
[**updateContactAttachmentByFileName**](AccountingApi.md#updateContactAttachmentByFileName) | **POST** /Contacts/{ContactID}/Attachments/{FileName} | 
[**updateContactGroup**](AccountingApi.md#updateContactGroup) | **POST** /ContactGroups/{ContactGroupID} | Allows you to update a Contract Group
[**updateCreditNote**](AccountingApi.md#updateCreditNote) | **POST** /CreditNotes/{CreditNoteID} | Allows you to update a specific credit note
[**updateCreditNoteAttachmentByFileName**](AccountingApi.md#updateCreditNoteAttachmentByFileName) | **POST** /CreditNotes/{CreditNoteID}/Attachments/{FileName} | Allows you to update Attachments on CreditNote by file name
[**updateEmployee**](AccountingApi.md#updateEmployee) | **POST** /Employees/{EmployeeID} | Allows you to update a specific employee used in Xero payrun
[**updateExpenseClaim**](AccountingApi.md#updateExpenseClaim) | **POST** /ExpenseClaims/{ExpenseClaimID} | Allows you to update specified expense claims
[**updateInvoice**](AccountingApi.md#updateInvoice) | **POST** /Invoices/{InvoiceID} | Allows you to update a specified sales invoices or purchase bills
[**updateInvoiceAttachmentByFileName**](AccountingApi.md#updateInvoiceAttachmentByFileName) | **POST** /Invoices/{InvoiceID}/Attachments/{FileName} | Allows you to update Attachment on invoices or purchase bills by it&#39;s filename
[**updateItem**](AccountingApi.md#updateItem) | **POST** /Items/{ItemID} | Allows you to udpate a specified item
[**updateLinkedTransaction**](AccountingApi.md#updateLinkedTransaction) | **POST** /LinkedTransactions/{LinkedTransactionID} | Allows you to update a specified linked transactions (billable expenses)
[**updateManualJournal**](AccountingApi.md#updateManualJournal) | **POST** /ManualJournals/{ManualJournalID} | Allows you to update a specified manual journal
[**updateManualJournalAttachmentByFileName**](AccountingApi.md#updateManualJournalAttachmentByFileName) | **POST** /ManualJournals/{ManualJournalID}/Attachments/{FileName} | Allows you to update a specified Attachment on ManualJournal by file name
[**updatePurchaseOrder**](AccountingApi.md#updatePurchaseOrder) | **POST** /PurchaseOrders/{PurchaseOrderID} | Allows you to update a specified purchase order
[**updateReceipt**](AccountingApi.md#updateReceipt) | **POST** /Receipts/{ReceiptID} | Allows you to retrieve a specified draft expense claim receipts
[**updateReceiptAttachmentByFileName**](AccountingApi.md#updateReceiptAttachmentByFileName) | **POST** /Receipts/{ReceiptID}/Attachments/{FileName} | Allows you to update Attachment on expense claim receipts by file name
[**updateRepeatingInvoiceAttachmentByFileName**](AccountingApi.md#updateRepeatingInvoiceAttachmentByFileName) | **POST** /RepeatingInvoices/{RepeatingInvoiceID}/Attachments/{FileName} | Allows you to update specified attachment on repeating invoices by file name
[**updateTaxRate**](AccountingApi.md#updateTaxRate) | **POST** /TaxRates | Allows you to update Tax Rates
[**updateTrackingCategory**](AccountingApi.md#updateTrackingCategory) | **POST** /TrackingCategories/{TrackingCategoryID} | Allows you to update tracking categories


# **createAccount**
> \SidneyAllen\XeroPHP\Model\Accounts createAccount($account)

Allows you to create a new chart of accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = { "Code":"123456", "Name":"Foobar", "Type":"EXPENSE", "Description":"Hello World" }; // \SidneyAllen\XeroPHP\Model\Account | Request of type Account

try {
    $result = $apiInstance->createAccount($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | [**\SidneyAllen\XeroPHP\Model\Account**](../Model/Account.md)| Request of type Account |

### Return type

[**\SidneyAllen\XeroPHP\Model\Accounts**](../Model/Accounts.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAccountAttachmentByFileName**
> \SidneyAllen\XeroPHP\Model\Attachments createAccountAttachmentByFileName($account_id, $file_name, $body)

Allows you to create Attachment on Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Unique identifier for Account object
$file_name = 'file_name_example'; // string | Name of the attachment
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createAccountAttachmentByFileName($account_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createAccountAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | [**string**](../Model/.md)| Unique identifier for Account object |
 **file_name** | **string**| Name of the attachment |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBankTransaction**
> \SidneyAllen\XeroPHP\Model\BankTransactions createBankTransaction($bank_transactions, $summarize_errors)

Allows you to create a spend or receive money transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transactions = { "BankTransactions":[ { "Type":"SPEND", "Contact":{ "ContactID":"5cc8cf28-567e-4d43-b287-687cfcaec47c" }, "Lineitems":[ { "Description":"Foobar", "Quantity":1.0, "UnitAmount":20.0, "AccountCode":"400" } ], "BankAccount":{ "Code":"088" } } ] }; // \SidneyAllen\XeroPHP\Model\BankTransactions | 
$summarize_errors = True; // bool | response format that shows validation errors for each bank transaction

try {
    $result = $apiInstance->createBankTransaction($bank_transactions, $summarize_errors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBankTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transactions** | [**\SidneyAllen\XeroPHP\Model\BankTransactions**](../Model/BankTransactions.md)|  |
 **summarize_errors** | **bool**| response format that shows validation errors for each bank transaction | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\BankTransactions**](../Model/BankTransactions.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBankTransactionAttachmentByFileName**
> \SidneyAllen\XeroPHP\Model\Attachments createBankTransactionAttachmentByFileName($bank_transaction_id, $file_name, $body)

Allows you to createa an Attachment on BankTransaction by Filename

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transaction_id = 'bank_transaction_id_example'; // string | Xero generated unique identifier for a bank transaction
$file_name = 'file_name_example'; // string | The name of the file being attached
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createBankTransactionAttachmentByFileName($bank_transaction_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBankTransactionAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transaction_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |
 **file_name** | **string**| The name of the file being attached |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBankTransactionHistoryRecord**
> \SidneyAllen\XeroPHP\Model\HistoryRecords createBankTransactionHistoryRecord($bank_transaction_id, $history_records)

Allows you to create history record for a bank transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transaction_id = 'bank_transaction_id_example'; // string | Xero generated unique identifier for a bank transaction
$history_records = new \SidneyAllen\XeroPHP\Model\HistoryRecords(); // \SidneyAllen\XeroPHP\Model\HistoryRecords | 

try {
    $result = $apiInstance->createBankTransactionHistoryRecord($bank_transaction_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBankTransactionHistoryRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transaction_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |
 **history_records** | [**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBankTransfer**
> \SidneyAllen\XeroPHP\Model\BankTransfers createBankTransfer($bank_transfers)

Allows you to create a bank transfers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfers = { "BankTransfers":[ { "FromBankAccount":{ "Code":"090", "Name":"My Savings", "AccountID":"7e5e243b-9fcd-4aef-8e3a-c70be1e39bfa", "Type":"BANK", "BankAccountNumber":"123455", "Status":"ACTIVE", "BankAccountType":"BANK", "CurrencyCode":"USD", "TaxType":"NONE", "EnablePaymentsToAccount":false, "ShowInExpenseClaims":false, "Class":"ASSET", "ReportingCode":"ASS", "ReportingCodeName":"Assets", "HasAttachments":false, "UpdatedDateUTC":"2016-10-17T13:45:33.993-07:00" }, "ToBankAccount":{ "Code":"088", "Name":"Business Wells Fargo", "AccountID":"6f7594f2-f059-4d56-9e67-47ac9733bfe9", "Type":"BANK", "BankAccountNumber":"123455", "Status":"ACTIVE", "BankAccountType":"BANK", "CurrencyCode":"USD", "TaxType":"NONE", "EnablePaymentsToAccount":false, "ShowInExpenseClaims":false, "Class":"ASSET", "ReportingCode":"ASS", "ReportingCodeName":"Assets", "HasAttachments":false, "UpdatedDateUTC":"2016-06-03T08:31:14.517-07:00" }, "Amount":"50.00" } ] }; // \SidneyAllen\XeroPHP\Model\BankTransfers | 

try {
    $result = $apiInstance->createBankTransfer($bank_transfers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBankTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfers** | [**\SidneyAllen\XeroPHP\Model\BankTransfers**](../Model/BankTransfers.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\BankTransfers**](../Model/BankTransfers.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBankTransferAttachmentByFileName**
> \SidneyAllen\XeroPHP\Model\Attachments createBankTransferAttachmentByFileName($bank_transfer_id, $file_name, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_id = 'bank_transfer_id_example'; // string | Xero generated unique identifier for a bank transfer
$file_name = 'file_name_example'; // string | The name of the file being attached to a Bank Transfer
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createBankTransferAttachmentByFileName($bank_transfer_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBankTransferAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |
 **file_name** | **string**| The name of the file being attached to a Bank Transfer |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBankTransferHistoryRecord**
> \SidneyAllen\XeroPHP\Model\HistoryRecords createBankTransferHistoryRecord($bank_transfer_id, $history_records)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_id = 'bank_transfer_id_example'; // string | Xero generated unique identifier for a bank transfer
$history_records = new \SidneyAllen\XeroPHP\Model\HistoryRecords(); // \SidneyAllen\XeroPHP\Model\HistoryRecords | 

try {
    $result = $apiInstance->createBankTransferHistoryRecord($bank_transfer_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBankTransferHistoryRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |
 **history_records** | [**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBatchPayment**
> \SidneyAllen\XeroPHP\Model\BatchPayments createBatchPayment($batch_payments)

Create one or many BatchPayments for invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_payments = { "BatchPayments":[ { "Account":{ "AccountID":"5ec2f302-cd60-4f8b-a915-9229dd45e6fa" }, "Reference":"Foobar38515", "Date":"2019-02-22", "Amount":3.0, "Payments":[ { "Invoice":{ "LineItems":[
], "InvoiceID":"e6039672-b161-40cd-b07b-a0178e7186ad" }, "Account":{ "AccountID":"5ec2f302-cd60-4f8b-a915-9229dd45e6fa" }, "Date":"2019-02-22", "Amount":1.0 }, { "Invoice":{ "LineItems":[
], "InvoiceID":"e4abafb4-1f5b-4d9f-80b3-9a7b815bc302" }, "Account":{ "AccountID":"5ec2f302-cd60-4f8b-a915-9229dd45e6fa" }, "Date":"2019-02-22", "Amount":1.0 }, { "Invoice":{ "LineItems":[
], "InvoiceID":"3323652c-155e-433b-8a73-4dde7cfbf410" }, "Account":{ "AccountID":"5ec2f302-cd60-4f8b-a915-9229dd45e6fa" }, "Date":"2019-02-22", "Amount":1.0 } ] } ] }; // \SidneyAllen\XeroPHP\Model\BatchPayments | Request of type BatchPayments containing a Payments array with one or more Payment objects

try {
    $result = $apiInstance->createBatchPayment($batch_payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBatchPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_payments** | [**\SidneyAllen\XeroPHP\Model\BatchPayments**](../Model/BatchPayments.md)| Request of type BatchPayments containing a Payments array with one or more Payment objects |

### Return type

[**\SidneyAllen\XeroPHP\Model\BatchPayments**](../Model/BatchPayments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBatchPaymentHistoryRecord**
> \SidneyAllen\XeroPHP\Model\HistoryRecords createBatchPaymentHistoryRecord($batch_payment_id, $history_records)

Allows you to create a history record for a Batch Payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_payment_id = 'batch_payment_id_example'; // string | Unique identifier for BatchPayment
$history_records = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \SidneyAllen\XeroPHP\Model\HistoryRecords | 

try {
    $result = $apiInstance->createBatchPaymentHistoryRecord($batch_payment_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBatchPaymentHistoryRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_payment_id** | [**string**](../Model/.md)| Unique identifier for BatchPayment |
 **history_records** | [**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBrandingThemePaymentServices**
> \SidneyAllen\XeroPHP\Model\PaymentServices createBrandingThemePaymentServices($branding_theme_id, $payment_service)

Allow for the creation of new custom payment service for specified Branding Theme

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$branding_theme_id = 'branding_theme_id_example'; // string | Unique identifier for a Branding Theme
$payment_service = { "PaymentServiceID":"dede7858-14e3-4a46-bf95-4d4cc491e645", "PaymentServiceName":"ACME Payments", "PaymentServiceUrl":"https://www.payupnow.com/", "PayNowText":"Pay Now" }; // \SidneyAllen\XeroPHP\Model\PaymentService | 

try {
    $result = $apiInstance->createBrandingThemePaymentServices($branding_theme_id, $payment_service);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBrandingThemePaymentServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branding_theme_id** | [**string**](../Model/.md)| Unique identifier for a Branding Theme |
 **payment_service** | [**\SidneyAllen\XeroPHP\Model\PaymentService**](../Model/PaymentService.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\PaymentServices**](../Model/PaymentServices.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createContact**
> \SidneyAllen\XeroPHP\Model\Contacts createContact($contact)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact = { "Name":"Foo9987", "EmailAddress":"sid32476@blah.com", "Phones":[ { "PhoneType":"MOBILE", "PhoneNumber":"555-1212", "PhoneAreaCode":"415" } ], "PaymentTerms":{ "Bills":{ "Day":15, "Type":"OFCURRENTMONTH" }, "Sales":{ "Day":10, "Type":"DAYSAFTERBILLMONTH" } } }; // \SidneyAllen\XeroPHP\Model\Contact | 

try {
    $result = $apiInstance->createContact($contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact** | [**\SidneyAllen\XeroPHP\Model\Contact**](../Model/Contact.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\Contacts**](../Model/Contacts.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createContactAttachmentByFileName**
> \SidneyAllen\XeroPHP\Model\Attachments createContactAttachmentByFileName($contact_id, $file_name, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact
$file_name = 'file_name_example'; // string | Name for the file you are attaching
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createContactAttachmentByFileName($contact_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createContactAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **file_name** | **string**| Name for the file you are attaching |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createContactGroup**
> \SidneyAllen\XeroPHP\Model\ContactGroups createContactGroup($contact_groups)

Allows you to create a contact group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_groups = { "ContactGroups":[ { "Name":"Suppliers" } ] }; // \SidneyAllen\XeroPHP\Model\ContactGroups | 

try {
    $result = $apiInstance->createContactGroup($contact_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createContactGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_groups** | [**\SidneyAllen\XeroPHP\Model\ContactGroups**](../Model/ContactGroups.md)|  | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\ContactGroups**](../Model/ContactGroups.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createContactGroupContacts**
> \SidneyAllen\XeroPHP\Model\Contacts createContactGroupContacts($contact_group_id, $contacts)

Allows you to add Contacts to a Contract Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_group_id = 'contact_group_id_example'; // string | Unique identifier for a Contact Group
$contacts = { "Contacts":[ { "ContactID":"a3675fc4-f8dd-4f03-ba5b-f1870566bcd7" }, { "ContactID":"4e1753b9-018a-4775-b6aa-1bc7871cfee3" } ] }; // \SidneyAllen\XeroPHP\Model\Contacts | 

try {
    $result = $apiInstance->createContactGroupContacts($contact_group_id, $contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createContactGroupContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_group_id** | [**string**](../Model/.md)| Unique identifier for a Contact Group |
 **contacts** | [**\SidneyAllen\XeroPHP\Model\Contacts**](../Model/Contacts.md)|  | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\Contacts**](../Model/Contacts.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createContactHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords createContactHistory($contact_id, $history_records)

Allows you to retrieve a history records of an Contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact
$history_records = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \SidneyAllen\XeroPHP\Model\HistoryRecords | 

try {
    $result = $apiInstance->createContactHistory($contact_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createContactHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **history_records** | [**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCreditNote**
> \SidneyAllen\XeroPHP\Model\CreditNotes createCreditNote($summarize_errors, $credit_notes)

Allows you to create a credit note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$summarize_errors = True; // bool | shows validation errors for each credit note
$credit_notes = { "CreditNotes":[ { "Type":"ACCPAYCREDIT", "Contact":{ "ContactID":"430fa14a-f945-44d3-9f97-5df5e28441b8" }, "Date":"2019-01-05", "LineItems":[ { "Description":"Foobar", "Quantity":2.0, "UnitAmount":20.0, "AccountCode":"400" } ] } ] }; // \SidneyAllen\XeroPHP\Model\CreditNotes | 

try {
    $result = $apiInstance->createCreditNote($summarize_errors, $credit_notes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createCreditNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **summarize_errors** | **bool**| shows validation errors for each credit note | [optional]
 **credit_notes** | [**\SidneyAllen\XeroPHP\Model\CreditNotes**](../Model/CreditNotes.md)|  | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\CreditNotes**](../Model/CreditNotes.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCreditNoteAllocation**
> \SidneyAllen\XeroPHP\Model\Allocations createCreditNoteAllocation($credit_note_id, $allocations)

Allows you to create Allocation on CreditNote

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note
$allocations = { "Allocations":[ { "Invoice":{ "LineItems":[
], "InvoiceID":"c45720a1-ade3-4a38-a064-d15489be6841" }, "Amount":1.0, "Date":"2019-03-05" } ] }; // \SidneyAllen\XeroPHP\Model\Allocations | 

try {
    $result = $apiInstance->createCreditNoteAllocation($credit_note_id, $allocations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createCreditNoteAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **allocations** | [**\SidneyAllen\XeroPHP\Model\Allocations**](../Model/Allocations.md)|  | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\Allocations**](../Model/Allocations.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCreditNoteAttachmentByFileName**
> \SidneyAllen\XeroPHP\Model\Attachments createCreditNoteAttachmentByFileName($credit_note_id, $file_name, $body)

Allows you to create Attachments on CreditNote by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note
$file_name = 'file_name_example'; // string | Name of the file you are attaching to Credit Note
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createCreditNoteAttachmentByFileName($credit_note_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createCreditNoteAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **file_name** | **string**| Name of the file you are attaching to Credit Note |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCreditNoteHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords createCreditNoteHistory($credit_note_id, $history_records)

Allows you to retrieve a history records of an CreditNote

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note
$history_records = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \SidneyAllen\XeroPHP\Model\HistoryRecords | 

try {
    $result = $apiInstance->createCreditNoteHistory($credit_note_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createCreditNoteHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **history_records** | [**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCurrency**
> \SidneyAllen\XeroPHP\Model\Currencies createCurrency($currencies)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currencies = { "Currencies":[ { "Code":"USD", "Description":"United States Dollar" } ] }; // \SidneyAllen\XeroPHP\Model\Currencies | 

try {
    $result = $apiInstance->createCurrency($currencies);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currencies** | [**\SidneyAllen\XeroPHP\Model\Currencies**](../Model/Currencies.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\Currencies**](../Model/Currencies.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEmployee**
> \SidneyAllen\XeroPHP\Model\Employees createEmployee($employees)

Allows you to create new employees used in Xero payrun

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employees = { "Employees":[ { "FirstName":"Nick", "LastName":"Fury", "ExternalLink":{ "Url":"http://twitter.com/#!/search/Nick+Fury" } } ] }; // \SidneyAllen\XeroPHP\Model\Employees | 

try {
    $result = $apiInstance->createEmployee($employees);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employees** | [**\SidneyAllen\XeroPHP\Model\Employees**](../Model/Employees.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\Employees**](../Model/Employees.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createExpenseClaim**
> \SidneyAllen\XeroPHP\Model\ExpenseClaims createExpenseClaim($expense_claims, $summarize_errors)

Allows you to retrieve expense claims

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expense_claims = { "ExpenseClaims":[ { "Status":"SUBMITTED", "User":{ "UserID":"d1164823-0ac1-41ad-987b-b4e30fe0b273" }, "Receipts":[ { "Lineitems":[
], "ReceiptID":"dc1c7f6d-0a4c-402f-acac-551d62ce5816" } ] } ] }; // \SidneyAllen\XeroPHP\Model\ExpenseClaims | 
$summarize_errors = True; // bool | shows validation errors for each expense claim

try {
    $result = $apiInstance->createExpenseClaim($expense_claims, $summarize_errors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createExpenseClaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expense_claims** | [**\SidneyAllen\XeroPHP\Model\ExpenseClaims**](../Model/ExpenseClaims.md)|  |
 **summarize_errors** | **bool**| shows validation errors for each expense claim | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\ExpenseClaims**](../Model/ExpenseClaims.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createExpenseClaimHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords createExpenseClaimHistory($expense_claim_id, $history_records)

Allows you to create a history records of an ExpenseClaim

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expense_claim_id = 'expense_claim_id_example'; // string | Unique identifier for a ExpenseClaim
$history_records = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \SidneyAllen\XeroPHP\Model\HistoryRecords | 

try {
    $result = $apiInstance->createExpenseClaimHistory($expense_claim_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createExpenseClaimHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expense_claim_id** | [**string**](../Model/.md)| Unique identifier for a ExpenseClaim |
 **history_records** | [**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createInvoice**
> \SidneyAllen\XeroPHP\Model\Invoices createInvoice($invoices, $summarize_errors)

Allows you to create any sales invoices or purchase bills

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoices = { "Invoices":[ { "Type":"ACCREC", "Contact":{ "ContactID":"430fa14a-f945-44d3-9f97-5df5e28441b8" }, "LineItems":[ { "Description":"Acme Tires", "Quantity":2.0, "UnitAmount":20.0, "AccountCode":"200", "TaxType":"NONE", "LineAmount":40.0 } ], "Date":"2019-03-11", "DueDate":"2018-12-10", "Reference":"Website Design", "Status":"AUTHORISED" } ] }; // \SidneyAllen\XeroPHP\Model\Invoices | 
$summarize_errors = True; // bool | shows validation errors for each invoice

try {
    $result = $apiInstance->createInvoice($invoices, $summarize_errors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoices** | [**\SidneyAllen\XeroPHP\Model\Invoices**](../Model/Invoices.md)|  |
 **summarize_errors** | **bool**| shows validation errors for each invoice | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\Invoices**](../Model/Invoices.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createInvoiceAttachmentByFileName**
> \SidneyAllen\XeroPHP\Model\Attachments createInvoiceAttachmentByFileName($invoice_id, $file_name, $body)

Allows you to create an Attachment on invoices or purchase bills by it's filename

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice
$file_name = 'file_name_example'; // string | Name of the file you are attaching
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createInvoiceAttachmentByFileName($invoice_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createInvoiceAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **file_name** | **string**| Name of the file you are attaching |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createInvoiceHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords createInvoiceHistory($invoice_id, $history_records)

Allows you to retrieve a history records of an invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice
$history_records = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \SidneyAllen\XeroPHP\Model\HistoryRecords | 

try {
    $result = $apiInstance->createInvoiceHistory($invoice_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createInvoiceHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **history_records** | [**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createItem**
> \SidneyAllen\XeroPHP\Model\Items createItem($items)

Allows you to create an item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$items = { "Items":[ { "Code":"abc65591", "Name":"Hello11350", "Description":"foobar" } ] }; // \SidneyAllen\XeroPHP\Model\Items | 

try {
    $result = $apiInstance->createItem($items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **items** | [**\SidneyAllen\XeroPHP\Model\Items**](../Model/Items.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\Items**](../Model/Items.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createItemHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords createItemHistory($item_id, $history_records)

Allows you to create a history record for items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | Unique identifier for an Item
$history_records = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \SidneyAllen\XeroPHP\Model\HistoryRecords | 

try {
    $result = $apiInstance->createItemHistory($item_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createItemHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | [**string**](../Model/.md)| Unique identifier for an Item |
 **history_records** | [**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLinkedTransaction**
> \SidneyAllen\XeroPHP\Model\LinkedTransactions createLinkedTransaction($linked_transactions)

Allows you to create linked transactions (billable expenses)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linked_transactions = { "LinkedTransactions":[ { "SourceTransactionID":"a848644a-f20f-4630-98c3-386bd7505631", "SourceLineItemID":"b0df260d-3cc8-4ced-9bd6-41924f624ed3" } ] }; // \SidneyAllen\XeroPHP\Model\LinkedTransactions | 

try {
    $result = $apiInstance->createLinkedTransaction($linked_transactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createLinkedTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linked_transactions** | [**\SidneyAllen\XeroPHP\Model\LinkedTransactions**](../Model/LinkedTransactions.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\LinkedTransactions**](../Model/LinkedTransactions.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createManualJournal**
> \SidneyAllen\XeroPHP\Model\ManualJournals createManualJournal($manual_journals)

Allows you to create a manual journal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manual_journals = { "ManualJournals":[ { "Narration":"Foo bar", "JournalLines":[ { "LineAmount":100.0, "AccountCode":"400", "Description":"Hello there" }, { "LineAmount":-100.0, "AccountCode":"400", "Description":"Goodbye", "Tracking":[ { "Name":"Simpsons", "Option":"Bart" } ] } ], "Date":"2019-03-14" } ] }; // \SidneyAllen\XeroPHP\Model\ManualJournals | 

try {
    $result = $apiInstance->createManualJournal($manual_journals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createManualJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manual_journals** | [**\SidneyAllen\XeroPHP\Model\ManualJournals**](../Model/ManualJournals.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\ManualJournals**](../Model/ManualJournals.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createManualJournalAttachmentByFileName**
> \SidneyAllen\XeroPHP\Model\Attachments createManualJournalAttachmentByFileName($manual_journal_id, $file_name, $body)

Allows you to create a specified Attachment on ManualJournal by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manual_journal_id = 'manual_journal_id_example'; // string | Unique identifier for a ManualJournal
$file_name = 'file_name_example'; // string | The name of the file being attached to a ManualJournal
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createManualJournalAttachmentByFileName($manual_journal_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createManualJournalAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manual_journal_id** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |
 **file_name** | **string**| The name of the file being attached to a ManualJournal |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOverpaymentAllocation**
> \SidneyAllen\XeroPHP\Model\Allocations createOverpaymentAllocation($overpayment_id, $allocations)

Allows you to retrieve Allocations for overpayments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$overpayment_id = 'overpayment_id_example'; // string | Unique identifier for a Overpayment
$allocations = { "Allocations":[ { "Invoice":{ "LineItems":[
], "InvoiceID":"c45720a1-ade3-4a38-a064-d15489be6841" }, "Amount":1.0, "Date":"2019-03-12" } ] }; // \SidneyAllen\XeroPHP\Model\Allocations | 

try {
    $result = $apiInstance->createOverpaymentAllocation($overpayment_id, $allocations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createOverpaymentAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **overpayment_id** | [**string**](../Model/.md)| Unique identifier for a Overpayment |
 **allocations** | [**\SidneyAllen\XeroPHP\Model\Allocations**](../Model/Allocations.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\Allocations**](../Model/Allocations.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOverpaymentHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords createOverpaymentHistory($overpayment_id, $history_records)

Allows you to create history records of an Overpayment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$overpayment_id = 'overpayment_id_example'; // string | Unique identifier for a Overpayment
$history_records = new \SidneyAllen\XeroPHP\Model\HistoryRecords(); // \SidneyAllen\XeroPHP\Model\HistoryRecords | 

try {
    $result = $apiInstance->createOverpaymentHistory($overpayment_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createOverpaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **overpayment_id** | [**string**](../Model/.md)| Unique identifier for a Overpayment |
 **history_records** | [**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPayment**
> \SidneyAllen\XeroPHP\Model\Payments createPayment($payments)

Allows you to create payments for invoices and credit notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payments = { "Payments":[ { "Invoice":{ "LineItems":[
], "InvoiceID":"c7c37b83-ac95-45ea-88ba-8ad83a5f22fe" }, "Account":{ "Code":"970" }, "Date":"2019-03-12", "Amount":1.0 } ] }; // \SidneyAllen\XeroPHP\Model\Payments | 

try {
    $result = $apiInstance->createPayment($payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payments** | [**\SidneyAllen\XeroPHP\Model\Payments**](../Model/Payments.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\Payments**](../Model/Payments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPaymentHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords createPaymentHistory($payment_id, $history_records)

Allows you to create a history record for a payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 'payment_id_example'; // string | Unique identifier for a Payment
$history_records = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \SidneyAllen\XeroPHP\Model\HistoryRecords | 

try {
    $result = $apiInstance->createPaymentHistory($payment_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | [**string**](../Model/.md)| Unique identifier for a Payment |
 **history_records** | [**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPaymentService**
> \SidneyAllen\XeroPHP\Model\PaymentServices createPaymentService($payment_services)

Allows you to create payment services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_services = { "PaymentServices":[ { "PaymentServiceName":"PayUpNow", "PaymentServiceUrl":"https://www.payupnow.com/", "PayNowText":"Time To Pay" } ] }; // \SidneyAllen\XeroPHP\Model\PaymentServices | 

try {
    $result = $apiInstance->createPaymentService($payment_services);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPaymentService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_services** | [**\SidneyAllen\XeroPHP\Model\PaymentServices**](../Model/PaymentServices.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\PaymentServices**](../Model/PaymentServices.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPrepaymentAllocation**
> \SidneyAllen\XeroPHP\Model\Allocations createPrepaymentAllocation($prepayment_id, $allocations)

Allows you to create an Allocation for prepayments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prepayment_id = 'prepayment_id_example'; // string | 
$allocations = { "Allocations":[ { "Invoice":{ "LineItems":[
], "InvoiceID":"c7c37b83-ac95-45ea-88ba-8ad83a5f22fe" }, "Amount":1.0, "Date":"2019-03-13" } ] }; // \SidneyAllen\XeroPHP\Model\Allocations | 

try {
    $result = $apiInstance->createPrepaymentAllocation($prepayment_id, $allocations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPrepaymentAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prepayment_id** | [**string**](../Model/.md)|  |
 **allocations** | [**\SidneyAllen\XeroPHP\Model\Allocations**](../Model/Allocations.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\Allocations**](../Model/Allocations.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPrepaymentHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords createPrepaymentHistory($prepayment_id, $history_records)

Allows you to create a history record for an Prepayment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prepayment_id = 'prepayment_id_example'; // string | Unique identifier for a PrePayment
$history_records = new \SidneyAllen\XeroPHP\Model\HistoryRecords(); // \SidneyAllen\XeroPHP\Model\HistoryRecords | 

try {
    $result = $apiInstance->createPrepaymentHistory($prepayment_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPrepaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prepayment_id** | [**string**](../Model/.md)| Unique identifier for a PrePayment |
 **history_records** | [**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPurchaseOrder**
> \SidneyAllen\XeroPHP\Model\PurchaseOrders createPurchaseOrder($purchase_orders, $summarize_errors)

Allows you to create purchase orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_orders = { "PurchaseOrders":[ { "Contact":{ "ContactID":"430fa14a-f945-44d3-9f97-5df5e28441b8" }, "LineItems":[ { "Description":"Foobar", "Quantity":1.0, "UnitAmount":20.0, "AccountCode":"710" } ], "Date":"2019-03-13" } ] }; // \SidneyAllen\XeroPHP\Model\PurchaseOrders | 
$summarize_errors = True; // bool | shows validation errors for each purchase order.

try {
    $result = $apiInstance->createPurchaseOrder($purchase_orders, $summarize_errors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_orders** | [**\SidneyAllen\XeroPHP\Model\PurchaseOrders**](../Model/PurchaseOrders.md)|  |
 **summarize_errors** | **bool**| shows validation errors for each purchase order. | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\PurchaseOrders**](../Model/PurchaseOrders.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPurchaseOrderHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords createPurchaseOrderHistory($purchase_order_id, $history_records)

Allows you to create HistoryRecord for purchase orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order_id = 'purchase_order_id_example'; // string | Unique identifier for a PurchaseOrder
$history_records = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \SidneyAllen\XeroPHP\Model\HistoryRecords | 

try {
    $result = $apiInstance->createPurchaseOrderHistory($purchase_order_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPurchaseOrderHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_id** | [**string**](../Model/.md)| Unique identifier for a PurchaseOrder |
 **history_records** | [**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createReceipt**
> \SidneyAllen\XeroPHP\Model\Receipts createReceipt($receipts)

Allows you to create draft expense claim receipts for any user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipts = { "Receipts":[ { "Contact":{ "ContactID":"430fa14a-f945-44d3-9f97-5df5e28441b8" }, "Lineitems":[ { "Description":"Foobar", "Quantity":2.0, "UnitAmount":20.0, "AccountCode":"400", "TaxType":"NONE", "LineAmount":40.0 } ], "User":{ "UserID":"d1164823-0ac1-41ad-987b-b4e30fe0b273" }, "LineAmountTypes":"NoTax", "Status":"DRAFT" } ] }; // \SidneyAllen\XeroPHP\Model\Receipts | 

try {
    $result = $apiInstance->createReceipt($receipts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipts** | [**\SidneyAllen\XeroPHP\Model\Receipts**](../Model/Receipts.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\Receipts**](../Model/Receipts.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createReceiptAttachmentByFileName**
> \SidneyAllen\XeroPHP\Model\Attachments createReceiptAttachmentByFileName($receipt_id, $file_name, $body)

Allows you to create Attachment on expense claim receipts by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_id = 'receipt_id_example'; // string | Unique identifier for a Receipt
$file_name = 'file_name_example'; // string | The name of the file being attached to the Receipt
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createReceiptAttachmentByFileName($receipt_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createReceiptAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_id** | [**string**](../Model/.md)| Unique identifier for a Receipt |
 **file_name** | **string**| The name of the file being attached to the Receipt |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createReceiptHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords createReceiptHistory($receipt_id, $history_records)

Allows you to retrieve a history records of an Receipt

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_id = 'receipt_id_example'; // string | Unique identifier for a Receipt
$history_records = new \SidneyAllen\XeroPHP\Model\HistoryRecords(); // \SidneyAllen\XeroPHP\Model\HistoryRecords | 

try {
    $result = $apiInstance->createReceiptHistory($receipt_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createReceiptHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_id** | [**string**](../Model/.md)| Unique identifier for a Receipt |
 **history_records** | [**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepeatingInvoiceAttachmentByFileName**
> \SidneyAllen\XeroPHP\Model\Attachments createRepeatingInvoiceAttachmentByFileName($repeating_invoice_id, $file_name, $body)

Allows you to create attachment on repeating invoices by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$repeating_invoice_id = 'repeating_invoice_id_example'; // string | Unique identifier for a Repeating Invoice
$file_name = 'file_name_example'; // string | The name of the file being attached to a Repeating Invoice
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createRepeatingInvoiceAttachmentByFileName($repeating_invoice_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createRepeatingInvoiceAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repeating_invoice_id** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |
 **file_name** | **string**| The name of the file being attached to a Repeating Invoice |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepeatingInvoiceHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords createRepeatingInvoiceHistory($repeating_invoice_id, $history_records)

Allows you to create history for a repeating invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$repeating_invoice_id = 'repeating_invoice_id_example'; // string | Unique identifier for a Repeating Invoice
$history_records = new \SidneyAllen\XeroPHP\Model\HistoryRecords(); // \SidneyAllen\XeroPHP\Model\HistoryRecords | 

try {
    $result = $apiInstance->createRepeatingInvoiceHistory($repeating_invoice_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createRepeatingInvoiceHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repeating_invoice_id** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |
 **history_records** | [**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTaxRate**
> \SidneyAllen\XeroPHP\Model\TaxRates createTaxRate($tax_rates)

Allows you to create Tax Rates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_rates = new \SidneyAllen\XeroPHP\Model\TaxRates(); // \SidneyAllen\XeroPHP\Model\TaxRates | 

try {
    $result = $apiInstance->createTaxRate($tax_rates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createTaxRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_rates** | [**\SidneyAllen\XeroPHP\Model\TaxRates**](../Model/TaxRates.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\TaxRates**](../Model/TaxRates.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTrackingCategory**
> \SidneyAllen\XeroPHP\Model\TrackingCategories createTrackingCategory($tracking_category)

Allows you to create tracking categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tracking_category = new \SidneyAllen\XeroPHP\Model\TrackingCategory(); // \SidneyAllen\XeroPHP\Model\TrackingCategory | 

try {
    $result = $apiInstance->createTrackingCategory($tracking_category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createTrackingCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tracking_category** | [**\SidneyAllen\XeroPHP\Model\TrackingCategory**](../Model/TrackingCategory.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\TrackingCategories**](../Model/TrackingCategories.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTrackingOptions**
> \SidneyAllen\XeroPHP\Model\TrackingOptions createTrackingOptions($tracking_category_id, $tracking_option)

Allows you to create options for a specified tracking category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tracking_category_id = 'tracking_category_id_example'; // string | Unique identifier for a TrackingCategory
$tracking_option = new \SidneyAllen\XeroPHP\Model\TrackingOption(); // \SidneyAllen\XeroPHP\Model\TrackingOption | 

try {
    $result = $apiInstance->createTrackingOptions($tracking_category_id, $tracking_option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createTrackingOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tracking_category_id** | [**string**](../Model/.md)| Unique identifier for a TrackingCategory |
 **tracking_option** | [**\SidneyAllen\XeroPHP\Model\TrackingOption**](../Model/TrackingOption.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\TrackingOptions**](../Model/TrackingOptions.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccount**
> \SidneyAllen\XeroPHP\Model\Accounts deleteAccount($account_id)

Allows you to delete a chart of accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Unique identifier for retrieving single object

try {
    $result = $apiInstance->deleteAccount($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | [**string**](../Model/.md)| Unique identifier for retrieving single object |

### Return type

[**\SidneyAllen\XeroPHP\Model\Accounts**](../Model/Accounts.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactGroupContact**
> deleteContactGroupContact($contact_group_id, $contact_id)

Allows you to delete a specific Contact from a Contract Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_group_id = 'contact_group_id_example'; // string | Unique identifier for a Contact Group
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact

try {
    $apiInstance->deleteContactGroupContact($contact_group_id, $contact_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteContactGroupContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_group_id** | [**string**](../Model/.md)| Unique identifier for a Contact Group |
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |

### Return type

void (empty response body)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactGroupContacts**
> deleteContactGroupContacts($contact_group_id)

Allows you to delete  all Contacts from a Contract Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_group_id = 'contact_group_id_example'; // string | Unique identifier for a Contact Group

try {
    $apiInstance->deleteContactGroupContacts($contact_group_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteContactGroupContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_group_id** | [**string**](../Model/.md)| Unique identifier for a Contact Group |

### Return type

void (empty response body)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItem**
> deleteItem($item_id)

Allows you to delete a specified item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | Unique identifier for an Item

try {
    $apiInstance->deleteItem($item_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | [**string**](../Model/.md)| Unique identifier for an Item |

### Return type

void (empty response body)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLinkedTransaction**
> deleteLinkedTransaction($linked_transaction_id)

Allows you to delete a specified linked transactions (billable expenses)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linked_transaction_id = 'linked_transaction_id_example'; // string | Unique identifier for a LinkedTransaction

try {
    $apiInstance->deleteLinkedTransaction($linked_transaction_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteLinkedTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linked_transaction_id** | [**string**](../Model/.md)| Unique identifier for a LinkedTransaction |

### Return type

void (empty response body)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePayment**
> \SidneyAllen\XeroPHP\Model\Payments deletePayment($payment_id, $payments)

Allows you to update a specified payment for invoices and credit notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 'payment_id_example'; // string | Unique identifier for a Payment
$payments = { "Payments":[ { "Status":"DELETED" } ] }; // \SidneyAllen\XeroPHP\Model\Payments | 

try {
    $result = $apiInstance->deletePayment($payment_id, $payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deletePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | [**string**](../Model/.md)| Unique identifier for a Payment |
 **payments** | [**\SidneyAllen\XeroPHP\Model\Payments**](../Model/Payments.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\Payments**](../Model/Payments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTrackingCategory**
> \SidneyAllen\XeroPHP\Model\TrackingCategories deleteTrackingCategory($tracking_category_id)

Allows you to delete tracking categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tracking_category_id = 'tracking_category_id_example'; // string | Unique identifier for a TrackingCategory

try {
    $result = $apiInstance->deleteTrackingCategory($tracking_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteTrackingCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tracking_category_id** | [**string**](../Model/.md)| Unique identifier for a TrackingCategory |

### Return type

[**\SidneyAllen\XeroPHP\Model\TrackingCategories**](../Model/TrackingCategories.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTrackingOptions**
> \SidneyAllen\XeroPHP\Model\TrackingOptions deleteTrackingOptions($tracking_category_id, $tracking_option_id)

Allows you to delete a specified option for a specified tracking category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tracking_category_id = 'tracking_category_id_example'; // string | Unique identifier for a TrackingCategory
$tracking_option_id = 'tracking_option_id_example'; // string | Unique identifier for a Tracking Option

try {
    $result = $apiInstance->deleteTrackingOptions($tracking_category_id, $tracking_option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteTrackingOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tracking_category_id** | [**string**](../Model/.md)| Unique identifier for a TrackingCategory |
 **tracking_option_id** | [**string**](../Model/.md)| Unique identifier for a Tracking Option |

### Return type

[**\SidneyAllen\XeroPHP\Model\TrackingOptions**](../Model/TrackingOptions.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailInvoice**
> emailInvoice($invoice_id, $request_empty)

Allows you to email a copy of invoice to related Contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice
$request_empty = new \SidneyAllen\XeroPHP\Model\RequestEmpty(); // \SidneyAllen\XeroPHP\Model\RequestEmpty | 

try {
    $apiInstance->emailInvoice($invoice_id, $request_empty);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->emailInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **request_empty** | [**\SidneyAllen\XeroPHP\Model\RequestEmpty**](../Model/RequestEmpty.md)|  |

### Return type

void (empty response body)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccount**
> \SidneyAllen\XeroPHP\Model\Accounts getAccount($account_id)

Allows you to retrieve a single chart of accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Unique identifier for retrieving single object

try {
    $result = $apiInstance->getAccount($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | [**string**](../Model/.md)| Unique identifier for retrieving single object |

### Return type

[**\SidneyAllen\XeroPHP\Model\Accounts**](../Model/Accounts.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountAttachmentByFileName**
> \SplFileObject getAccountAttachmentByFileName($account_id, $file_name, $content_type)

Allows you to retrieve Attachment on Account by Filename

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Unique identifier for Account object
$file_name = 'file_name_example'; // string | Name of the attachment
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getAccountAttachmentByFileName($account_id, $file_name, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getAccountAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | [**string**](../Model/.md)| Unique identifier for Account object |
 **file_name** | **string**| Name of the attachment |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountAttachmentById**
> \SplFileObject getAccountAttachmentById($account_id, $attachment_id, $content_type)

Allows you to retrieve specific Attachment on Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Unique identifier for Account object
$attachment_id = 'attachment_id_example'; // string | Unique identifier for Attachment object
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getAccountAttachmentById($account_id, $attachment_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getAccountAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | [**string**](../Model/.md)| Unique identifier for Account object |
 **attachment_id** | [**string**](../Model/.md)| Unique identifier for Attachment object |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountAttachments**
> \SidneyAllen\XeroPHP\Model\Attachments getAccountAttachments($account_id)

Allows you to retrieve Attachments for accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Unique identifier for Account object

try {
    $result = $apiInstance->getAccountAttachments($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getAccountAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | [**string**](../Model/.md)| Unique identifier for Account object |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccounts**
> \SidneyAllen\XeroPHP\Model\Accounts getAccounts($if_modified_since, $where, $order)

Allows you to retrieve the full chart of accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getAccounts($if_modified_since, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\Accounts**](../Model/Accounts.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankTransaction**
> \SidneyAllen\XeroPHP\Model\BankTransactions getBankTransaction($bank_transaction_id)

Allows you to retrieve a single spend or receive money transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transaction_id = 'bank_transaction_id_example'; // string | Xero generated unique identifier for a bank transaction

try {
    $result = $apiInstance->getBankTransaction($bank_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transaction_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |

### Return type

[**\SidneyAllen\XeroPHP\Model\BankTransactions**](../Model/BankTransactions.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankTransactionAttachmentByFileName**
> \SplFileObject getBankTransactionAttachmentByFileName($bank_transaction_id, $file_name, $content_type)

Allows you to retrieve Attachments on BankTransaction by Filename

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transaction_id = 'bank_transaction_id_example'; // string | Xero generated unique identifier for a bank transaction
$file_name = 'file_name_example'; // string | The name of the file being attached
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getBankTransactionAttachmentByFileName($bank_transaction_id, $file_name, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransactionAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transaction_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |
 **file_name** | **string**| The name of the file being attached |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankTransactionAttachmentById**
> \SplFileObject getBankTransactionAttachmentById($bank_transaction_id, $attachment_id, $content_type)

Allows you to retrieve Attachments on a specific BankTransaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transaction_id = 'bank_transaction_id_example'; // string | Xero generated unique identifier for a bank transaction
$attachment_id = 'attachment_id_example'; // string | Xero generated unique identifier for an attachment
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getBankTransactionAttachmentById($bank_transaction_id, $attachment_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransactionAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transaction_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |
 **attachment_id** | [**string**](../Model/.md)| Xero generated unique identifier for an attachment |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankTransactionAttachments**
> \SidneyAllen\XeroPHP\Model\Attachments getBankTransactionAttachments($bank_transaction_id)

Allows you to retrieve any attachments to bank transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transaction_id = 'bank_transaction_id_example'; // string | Xero generated unique identifier for a bank transaction

try {
    $result = $apiInstance->getBankTransactionAttachments($bank_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransactionAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transaction_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankTransactions**
> \SidneyAllen\XeroPHP\Model\BankTransactions getBankTransactions($if_modified_since, $where, $order, $page)

Allows you to retrieve any spend or receive money transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 bank transactions will be returned in a single API call with line items shown for each bank transaction

try {
    $result = $apiInstance->getBankTransactions($if_modified_since, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 bank transactions will be returned in a single API call with line items shown for each bank transaction | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\BankTransactions**](../Model/BankTransactions.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankTransactionsHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords getBankTransactionsHistory($bank_transaction_id)

Allows you to retrieve history from a bank transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transaction_id = 'bank_transaction_id_example'; // string | Xero generated unique identifier for a bank transaction

try {
    $result = $apiInstance->getBankTransactionsHistory($bank_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransactionsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transaction_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankTransfer**
> \SidneyAllen\XeroPHP\Model\BankTransfers getBankTransfer($bank_transfer_id)

Allows you to retrieve any bank transfers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_id = 'bank_transfer_id_example'; // string | Xero generated unique identifier for a bank transfer

try {
    $result = $apiInstance->getBankTransfer($bank_transfer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |

### Return type

[**\SidneyAllen\XeroPHP\Model\BankTransfers**](../Model/BankTransfers.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankTransferAttachmentByFileName**
> \SplFileObject getBankTransferAttachmentByFileName($bank_transfer_id, $file_name, $content_type)

Allows you to retrieve Attachments on BankTransfer by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_id = 'bank_transfer_id_example'; // string | Xero generated unique identifier for a bank transfer
$file_name = 'file_name_example'; // string | The name of the file being attached to a Bank Transfer
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getBankTransferAttachmentByFileName($bank_transfer_id, $file_name, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransferAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |
 **file_name** | **string**| The name of the file being attached to a Bank Transfer |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankTransferAttachmentById**
> \SplFileObject getBankTransferAttachmentById($bank_transfer_id, $attachment_id, $content_type)

Allows you to retrieve Attachments on BankTransfer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_id = 'bank_transfer_id_example'; // string | Xero generated unique identifier for a bank transfer
$attachment_id = 'attachment_id_example'; // string | Xero generated unique identifier for an Attachment to a bank transfer
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getBankTransferAttachmentById($bank_transfer_id, $attachment_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransferAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |
 **attachment_id** | [**string**](../Model/.md)| Xero generated unique identifier for an Attachment to a bank transfer |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankTransferAttachments**
> \SidneyAllen\XeroPHP\Model\Attachments getBankTransferAttachments($bank_transfer_id)

Allows you to retrieve Attachments from  bank transfers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_id = 'bank_transfer_id_example'; // string | Xero generated unique identifier for a bank transfer

try {
    $result = $apiInstance->getBankTransferAttachments($bank_transfer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransferAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankTransferHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords getBankTransferHistory($bank_transfer_id)

Allows you to retrieve history from a bank transfers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_id = 'bank_transfer_id_example'; // string | Xero generated unique identifier for a bank transfer

try {
    $result = $apiInstance->getBankTransferHistory($bank_transfer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransferHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankTransfers**
> \SidneyAllen\XeroPHP\Model\BankTransfers getBankTransfers($if_modified_since, $where, $order)

Allows you to retrieve all bank transfers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getBankTransfers($if_modified_since, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransfers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\BankTransfers**](../Model/BankTransfers.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBatchPaymentHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords getBatchPaymentHistory($batch_payment_id)

Allows you to retrieve history from a Batch Payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_payment_id = 'batch_payment_id_example'; // string | Unique identifier for BatchPayment

try {
    $result = $apiInstance->getBatchPaymentHistory($batch_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBatchPaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_payment_id** | [**string**](../Model/.md)| Unique identifier for BatchPayment |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBatchPayments**
> \SidneyAllen\XeroPHP\Model\BatchPayments getBatchPayments($if_modified_since, $where, $order)

Retrieve either one or many BatchPayments for invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getBatchPayments($if_modified_since, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBatchPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\BatchPayments**](../Model/BatchPayments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBrandingTheme**
> \SidneyAllen\XeroPHP\Model\BrandingThemes getBrandingTheme($branding_theme_id)

Allows you to retrieve a specific BrandingThemes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$branding_theme_id = 'branding_theme_id_example'; // string | Unique identifier for a Branding Theme

try {
    $result = $apiInstance->getBrandingTheme($branding_theme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBrandingTheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branding_theme_id** | [**string**](../Model/.md)| Unique identifier for a Branding Theme |

### Return type

[**\SidneyAllen\XeroPHP\Model\BrandingThemes**](../Model/BrandingThemes.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBrandingThemePaymentServices**
> \SidneyAllen\XeroPHP\Model\PaymentServices getBrandingThemePaymentServices($branding_theme_id)

Allows you to retrieve the Payment services for a Branding Theme

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$branding_theme_id = 'branding_theme_id_example'; // string | Unique identifier for a Branding Theme

try {
    $result = $apiInstance->getBrandingThemePaymentServices($branding_theme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBrandingThemePaymentServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branding_theme_id** | [**string**](../Model/.md)| Unique identifier for a Branding Theme |

### Return type

[**\SidneyAllen\XeroPHP\Model\PaymentServices**](../Model/PaymentServices.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBrandingThemes**
> \SidneyAllen\XeroPHP\Model\BrandingThemes getBrandingThemes()

Allows you to retrieve all the BrandingThemes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBrandingThemes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBrandingThemes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SidneyAllen\XeroPHP\Model\BrandingThemes**](../Model/BrandingThemes.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContact**
> \SidneyAllen\XeroPHP\Model\Contacts getContact($contact_id)

Allows you to retrieve, add and update contacts in a Xero organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact

try {
    $result = $apiInstance->getContact($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |

### Return type

[**\SidneyAllen\XeroPHP\Model\Contacts**](../Model/Contacts.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactAttachmentByFileName**
> \SplFileObject getContactAttachmentByFileName($contact_id, $file_name, $content_type)

Allows you to retrieve Attachments on Contacts by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact
$file_name = 'file_name_example'; // string | Name for the file you are attaching
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getContactAttachmentByFileName($contact_id, $file_name, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **file_name** | **string**| Name for the file you are attaching |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactAttachmentById**
> \SplFileObject getContactAttachmentById($contact_id, $attachment_id, $content_type)

Allows you to retrieve Attachments on Contacts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact
$attachment_id = 'attachment_id_example'; // string | Unique identifier for a Attachment
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getContactAttachmentById($contact_id, $attachment_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **attachment_id** | [**string**](../Model/.md)| Unique identifier for a Attachment |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactAttachments**
> \SidneyAllen\XeroPHP\Model\Attachments getContactAttachments($contact_id)

Allows you to retrieve, add and update contacts in a Xero organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact

try {
    $result = $apiInstance->getContactAttachments($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactCISSettings**
> \SidneyAllen\XeroPHP\Model\CISSettings getContactCISSettings($contact_id)

Allows you to retrieve CISSettings for a contact in a Xero organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact

try {
    $result = $apiInstance->getContactCISSettings($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactCISSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |

### Return type

[**\SidneyAllen\XeroPHP\Model\CISSettings**](../Model/CISSettings.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactGroup**
> \SidneyAllen\XeroPHP\Model\ContactGroups getContactGroup($contact_group_id)

Allows you to retrieve a unique Contract Group by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_group_id = 'contact_group_id_example'; // string | Unique identifier for a Contact Group

try {
    $result = $apiInstance->getContactGroup($contact_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_group_id** | [**string**](../Model/.md)| Unique identifier for a Contact Group |

### Return type

[**\SidneyAllen\XeroPHP\Model\ContactGroups**](../Model/ContactGroups.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactGroups**
> \SidneyAllen\XeroPHP\Model\ContactGroups getContactGroups($where, $order)

Allows you to retrieve the ContactID and Name of all the contacts in a contact group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getContactGroups($where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\ContactGroups**](../Model/ContactGroups.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords getContactHistory($contact_id)

Allows you to retrieve a history records of an Contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact

try {
    $result = $apiInstance->getContactHistory($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContacts**
> \SidneyAllen\XeroPHP\Model\Contacts getContacts($if_modified_since, $where, $order, $i_ds, $page, $include_archived)

Allows you to retrieve, add and update contacts in a Xero organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$i_ds = 'i_ds_example'; // string | Filter by a comma separated list of ContactIDs. Allows you to retrieve a specific set of contacts in a single call.
$page = 56; // int | e.g. page=1 - Up to 100 contacts will be returned in a single API call.
$include_archived = True; // bool | e.g. includeArchived=true - Contacts with a status of ARCHIVED will be included in the response

try {
    $result = $apiInstance->getContacts($if_modified_since, $where, $order, $i_ds, $page, $include_archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **i_ds** | **string**| Filter by a comma separated list of ContactIDs. Allows you to retrieve a specific set of contacts in a single call. | [optional]
 **page** | **int**| e.g. page&#x3D;1 - Up to 100 contacts will be returned in a single API call. | [optional]
 **include_archived** | **bool**| e.g. includeArchived&#x3D;true - Contacts with a status of ARCHIVED will be included in the response | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\Contacts**](../Model/Contacts.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCreditNote**
> \SidneyAllen\XeroPHP\Model\CreditNotes getCreditNote($credit_note_id)

Allows you to retrieve a specific credit note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note

try {
    $result = $apiInstance->getCreditNote($credit_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |

### Return type

[**\SidneyAllen\XeroPHP\Model\CreditNotes**](../Model/CreditNotes.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCreditNoteAsPdf**
> \SplFileObject getCreditNoteAsPdf($credit_note_id, $content_type)

Allows you to retrieve Credit Note as PDF files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getCreditNoteAsPdf($credit_note_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNoteAsPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCreditNoteAttachmentByFileName**
> \SplFileObject getCreditNoteAttachmentByFileName($credit_note_id, $file_name, $content_type)

Allows you to retrieve Attachments on CreditNote by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note
$file_name = 'file_name_example'; // string | Name of the file you are attaching to Credit Note
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getCreditNoteAttachmentByFileName($credit_note_id, $file_name, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNoteAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **file_name** | **string**| Name of the file you are attaching to Credit Note |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCreditNoteAttachmentById**
> \SplFileObject getCreditNoteAttachmentById($credit_note_id, $attachment_id, $content_type)

Allows you to retrieve Attachments on CreditNote

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note
$attachment_id = 'attachment_id_example'; // string | Unique identifier for a Attachment
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getCreditNoteAttachmentById($credit_note_id, $attachment_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNoteAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **attachment_id** | [**string**](../Model/.md)| Unique identifier for a Attachment |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCreditNoteAttachments**
> \SidneyAllen\XeroPHP\Model\Attachments getCreditNoteAttachments($credit_note_id)

Allows you to retrieve Attachments for credit notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note

try {
    $result = $apiInstance->getCreditNoteAttachments($credit_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNoteAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCreditNoteHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords getCreditNoteHistory($credit_note_id)

Allows you to retrieve a history records of an CreditNote

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note

try {
    $result = $apiInstance->getCreditNoteHistory($credit_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNoteHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCreditNotes**
> \SidneyAllen\XeroPHP\Model\CreditNotes getCreditNotes($if_modified_since, $where, $order, $page)

Allows you to retrieve any credit notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 credit notes will be returned in a single API call with line items shown for each credit note

try {
    $result = $apiInstance->getCreditNotes($if_modified_since, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 credit notes will be returned in a single API call with line items shown for each credit note | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\CreditNotes**](../Model/CreditNotes.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrencies**
> \SidneyAllen\XeroPHP\Model\Currencies getCurrencies($where, $order)

Allows you to retrieve currencies for your organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getCurrencies($where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\Currencies**](../Model/Currencies.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployee**
> \SidneyAllen\XeroPHP\Model\Employees getEmployee($employee_id)

Allows you to retrieve a specific employee used in Xero payrun

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_id = 'employee_id_example'; // string | Unique identifier for a Employee

try {
    $result = $apiInstance->getEmployee($employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | [**string**](../Model/.md)| Unique identifier for a Employee |

### Return type

[**\SidneyAllen\XeroPHP\Model\Employees**](../Model/Employees.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployees**
> \SidneyAllen\XeroPHP\Model\Employees getEmployees($if_modified_since, $where, $order)

Allows you to retrieve employees used in Xero payrun

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getEmployees($if_modified_since, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getEmployees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\Employees**](../Model/Employees.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExpenseClaim**
> \SidneyAllen\XeroPHP\Model\ExpenseClaims getExpenseClaim($expense_claim_id)

Allows you to retrieve a specified expense claim

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expense_claim_id = 'expense_claim_id_example'; // string | Unique identifier for a ExpenseClaim

try {
    $result = $apiInstance->getExpenseClaim($expense_claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getExpenseClaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expense_claim_id** | [**string**](../Model/.md)| Unique identifier for a ExpenseClaim |

### Return type

[**\SidneyAllen\XeroPHP\Model\ExpenseClaims**](../Model/ExpenseClaims.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExpenseClaimHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords getExpenseClaimHistory($expense_claim_id)

Allows you to retrieve a history records of an ExpenseClaim

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expense_claim_id = 'expense_claim_id_example'; // string | Unique identifier for a ExpenseClaim

try {
    $result = $apiInstance->getExpenseClaimHistory($expense_claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getExpenseClaimHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expense_claim_id** | [**string**](../Model/.md)| Unique identifier for a ExpenseClaim |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExpenseClaims**
> \SidneyAllen\XeroPHP\Model\ExpenseClaims getExpenseClaims($if_modified_since, $where, $order)

Allows you to retrieve expense claims

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getExpenseClaims($if_modified_since, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getExpenseClaims: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\ExpenseClaims**](../Model/ExpenseClaims.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoice**
> \SidneyAllen\XeroPHP\Model\Invoices getInvoice($invoice_id)

Allows you to retrieve a specified sales invoice or purchase bill

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice

try {
    $result = $apiInstance->getInvoice($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |

### Return type

[**\SidneyAllen\XeroPHP\Model\Invoices**](../Model/Invoices.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceAsPdf**
> \SplFileObject getInvoiceAsPdf($invoice_id, $content_type)

Allows you to retrieve invoices or purchase bills as PDF files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getInvoiceAsPdf($invoice_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoiceAsPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceAttachmentByFileName**
> \SplFileObject getInvoiceAttachmentByFileName($invoice_id, $file_name, $content_type)

Allows you to retrieve Attachment on invoices or purchase bills by it's filename

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice
$file_name = 'file_name_example'; // string | Name of the file you are attaching
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getInvoiceAttachmentByFileName($invoice_id, $file_name, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoiceAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **file_name** | **string**| Name of the file you are attaching |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceAttachmentById**
> \SplFileObject getInvoiceAttachmentById($invoice_id, $attachment_id, $content_type)

Allows you to retrieve a specified Attachment on invoices or purchase bills by it's ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice
$attachment_id = 'attachment_id_example'; // string | Unique identifier for an Attachment
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getInvoiceAttachmentById($invoice_id, $attachment_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoiceAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **attachment_id** | [**string**](../Model/.md)| Unique identifier for an Attachment |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceAttachments**
> \SidneyAllen\XeroPHP\Model\Attachments getInvoiceAttachments($invoice_id)

Allows you to retrieve Attachments on invoices or purchase bills

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice

try {
    $result = $apiInstance->getInvoiceAttachments($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoiceAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords getInvoiceHistory($invoice_id)

Allows you to retrieve a history records of an invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice

try {
    $result = $apiInstance->getInvoiceHistory($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoiceHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceReminders**
> \SidneyAllen\XeroPHP\Model\InvoiceReminders getInvoiceReminders()

Allows you to retrieve invoice reminder settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getInvoiceReminders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoiceReminders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SidneyAllen\XeroPHP\Model\InvoiceReminders**](../Model/InvoiceReminders.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoices**
> \SidneyAllen\XeroPHP\Model\Invoices getInvoices($xero_tenant_id, $if_modified_since, $where, $order, $i_ds, $invoice_numbers, $contact_i_ds, $statuses, $page, $include_archived, $created_by_my_app)

Allows you to retrieve any sales invoices or purchase bills

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$i_ds = 'i_ds_example'; // string | Filter by a comma-separated list of InvoicesIDs. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter.
$invoice_numbers = 'invoice_numbers_example'; // string | Filter by a comma-separated list of InvoiceNumbers. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter.
$contact_i_ds = 'contact_i_ds_example'; // string | Filter by a comma-separated list of ContactIDs. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter.
$statuses = 'statuses_example'; // string | Filter by a comma-separated list Statuses. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter.
$page = 56; // int | e.g. page=1 – Up to 100 invoices will be returned in a single API call with line items shown for each invoice
$include_archived = True; // bool | e.g. includeArchived=true - Contacts with a status of ARCHIVED will be included in the response
$created_by_my_app = True; // bool | When set to true you'll only retrieve Invoices created by your app

try {
    $result = $apiInstance->getInvoices($xero_tenant_id, $if_modified_since, $where, $order, $i_ds, $invoice_numbers, $contact_i_ds, $statuses, $page, $include_archived, $created_by_my_app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant | [optional]
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **i_ds** | **string**| Filter by a comma-separated list of InvoicesIDs. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter. | [optional]
 **invoice_numbers** | **string**| Filter by a comma-separated list of InvoiceNumbers. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter. | [optional]
 **contact_i_ds** | **string**| Filter by a comma-separated list of ContactIDs. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter. | [optional]
 **statuses** | **string**| Filter by a comma-separated list Statuses. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter. | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 invoices will be returned in a single API call with line items shown for each invoice | [optional]
 **include_archived** | **bool**| e.g. includeArchived&#x3D;true - Contacts with a status of ARCHIVED will be included in the response | [optional]
 **created_by_my_app** | **bool**| When set to true you&#39;ll only retrieve Invoices created by your app | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\Invoices**](../Model/Invoices.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItem**
> \SidneyAllen\XeroPHP\Model\Items getItem($item_id)

Allows you to retrieve a specified item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | Unique identifier for an Item

try {
    $result = $apiInstance->getItem($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | [**string**](../Model/.md)| Unique identifier for an Item |

### Return type

[**\SidneyAllen\XeroPHP\Model\Items**](../Model/Items.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords getItemHistory($item_id)

Allows you to retrieve history for items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | Unique identifier for an Item

try {
    $result = $apiInstance->getItemHistory($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getItemHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | [**string**](../Model/.md)| Unique identifier for an Item |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItems**
> \SidneyAllen\XeroPHP\Model\Items getItems($if_modified_since, $where, $order)

Allows you to retrieve any items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getItems($if_modified_since, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\Items**](../Model/Items.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJournal**
> \SidneyAllen\XeroPHP\Model\Journals getJournal($journal_id)

Allows you to retrieve a specified journals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_id = 'journal_id_example'; // string | Unique identifier for a Journal

try {
    $result = $apiInstance->getJournal($journal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **journal_id** | [**string**](../Model/.md)| Unique identifier for a Journal |

### Return type

[**\SidneyAllen\XeroPHP\Model\Journals**](../Model/Journals.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJournals**
> \SidneyAllen\XeroPHP\Model\Journals getJournals($if_modified_since, $offset, $payments_only)

Allows you to retrieve any journals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$offset = 56; // int | Offset by a specified journal number. e.g. journals with a JournalNumber greater than the offset will be returned
$payments_only = True; // bool | Filter to retrieve journals on a cash basis. Journals are returned on an accrual basis by default.

try {
    $result = $apiInstance->getJournals($if_modified_since, $offset, $payments_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getJournals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **offset** | **int**| Offset by a specified journal number. e.g. journals with a JournalNumber greater than the offset will be returned | [optional]
 **payments_only** | **bool**| Filter to retrieve journals on a cash basis. Journals are returned on an accrual basis by default. | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\Journals**](../Model/Journals.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLinkedTransaction**
> \SidneyAllen\XeroPHP\Model\LinkedTransactions getLinkedTransaction($linked_transaction_id)

Allows you to retrieve a specified linked transactions (billable expenses)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linked_transaction_id = 'linked_transaction_id_example'; // string | Unique identifier for a LinkedTransaction

try {
    $result = $apiInstance->getLinkedTransaction($linked_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getLinkedTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linked_transaction_id** | [**string**](../Model/.md)| Unique identifier for a LinkedTransaction |

### Return type

[**\SidneyAllen\XeroPHP\Model\LinkedTransactions**](../Model/LinkedTransactions.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLinkedTransactions**
> \SidneyAllen\XeroPHP\Model\LinkedTransactions getLinkedTransactions($page, $linked_transaction_id, $source_transaction_id, $contact_id, $status, $target_transaction_id)

Retrieve linked transactions (billable expenses)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Up to 100 linked transactions will be returned in a single API call. Use the page parameter to specify the page to be returned e.g. page=1.
$linked_transaction_id = 'linked_transaction_id_example'; // string | The Xero identifier for an Linked Transaction
$source_transaction_id = 'source_transaction_id_example'; // string | Filter by the SourceTransactionID. Get all the linked transactions created from a particular ACCPAY invoice
$contact_id = 'contact_id_example'; // string | Filter by the ContactID. Get all the linked transactions that have been assigned to a particular customer.
$status = 'status_example'; // string | Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
$target_transaction_id = 'target_transaction_id_example'; // string | Filter by the TargetTransactionID. Get all the linked transactions allocated to a particular ACCREC invoice

try {
    $result = $apiInstance->getLinkedTransactions($page, $linked_transaction_id, $source_transaction_id, $contact_id, $status, $target_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getLinkedTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Up to 100 linked transactions will be returned in a single API call. Use the page parameter to specify the page to be returned e.g. page&#x3D;1. | [optional]
 **linked_transaction_id** | **string**| The Xero identifier for an Linked Transaction | [optional]
 **source_transaction_id** | **string**| Filter by the SourceTransactionID. Get all the linked transactions created from a particular ACCPAY invoice | [optional]
 **contact_id** | **string**| Filter by the ContactID. Get all the linked transactions that have been assigned to a particular customer. | [optional]
 **status** | **string**| Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID&#x3D;4bb34b03-3378-4bb2-a0ed-6345abf3224e&amp;Status&#x3D;APPROVED. | [optional]
 **target_transaction_id** | **string**| Filter by the TargetTransactionID. Get all the linked transactions allocated to a particular ACCREC invoice | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\LinkedTransactions**](../Model/LinkedTransactions.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getManualJournal**
> \SidneyAllen\XeroPHP\Model\ManualJournals getManualJournal($manual_journal_id)

Allows you to retrieve a specified manual journals

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manual_journal_id = 'manual_journal_id_example'; // string | Unique identifier for a ManualJournal

try {
    $result = $apiInstance->getManualJournal($manual_journal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getManualJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manual_journal_id** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |

### Return type

[**\SidneyAllen\XeroPHP\Model\ManualJournals**](../Model/ManualJournals.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getManualJournalAttachmentByFileName**
> \SplFileObject getManualJournalAttachmentByFileName($manual_journal_id, $file_name, $content_type)

Allows you to retrieve specified Attachment on ManualJournal by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manual_journal_id = 'manual_journal_id_example'; // string | Unique identifier for a ManualJournal
$file_name = 'file_name_example'; // string | The name of the file being attached to a ManualJournal
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getManualJournalAttachmentByFileName($manual_journal_id, $file_name, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getManualJournalAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manual_journal_id** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |
 **file_name** | **string**| The name of the file being attached to a ManualJournal |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getManualJournalAttachmentById**
> \SplFileObject getManualJournalAttachmentById($manual_journal_id, $attachment_id, $content_type)

Allows you to retrieve specified Attachment on ManualJournals

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manual_journal_id = 'manual_journal_id_example'; // string | Unique identifier for a ManualJournal
$attachment_id = 'attachment_id_example'; // string | Unique identifier for a Attachment
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getManualJournalAttachmentById($manual_journal_id, $attachment_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getManualJournalAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manual_journal_id** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |
 **attachment_id** | [**string**](../Model/.md)| Unique identifier for a Attachment |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getManualJournalAttachments**
> \SidneyAllen\XeroPHP\Model\Attachments getManualJournalAttachments($manual_journal_id)

Allows you to retrieve Attachment for manual journals

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manual_journal_id = 'manual_journal_id_example'; // string | Unique identifier for a ManualJournal

try {
    $result = $apiInstance->getManualJournalAttachments($manual_journal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getManualJournalAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manual_journal_id** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getManualJournals**
> \SidneyAllen\XeroPHP\Model\ManualJournals getManualJournals($if_modified_since, $where, $order, $page)

Allows you to retrieve any manual journals

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 manual journals will be returned in a single API call with line items shown for each overpayment

try {
    $result = $apiInstance->getManualJournals($if_modified_since, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getManualJournals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 manual journals will be returned in a single API call with line items shown for each overpayment | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\ManualJournals**](../Model/ManualJournals.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOnlineInvoice**
> \SidneyAllen\XeroPHP\Model\OnlineInvoices getOnlineInvoice($invoice_id)

Allows you to retrieve a URL to an online invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice

try {
    $result = $apiInstance->getOnlineInvoice($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getOnlineInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |

### Return type

[**\SidneyAllen\XeroPHP\Model\OnlineInvoices**](../Model/OnlineInvoices.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganisationCISSettings**
> \SidneyAllen\XeroPHP\Model\CISOrgSetting getOrganisationCISSettings($organisation_id)

Allows you To verify if an organisation is using contruction industry scheme, you can retrieve the CIS settings for the organistaion.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation_id = 'organisation_id_example'; // string | 

try {
    $result = $apiInstance->getOrganisationCISSettings($organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getOrganisationCISSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisation_id** | [**string**](../Model/.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\CISOrgSetting**](../Model/CISOrgSetting.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganisations**
> \SidneyAllen\XeroPHP\Model\Organisations getOrganisations()

Allows you to retrieve Organisation details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrganisations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getOrganisations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SidneyAllen\XeroPHP\Model\Organisations**](../Model/Organisations.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOverpayment**
> \SidneyAllen\XeroPHP\Model\Overpayments getOverpayment($overpayment_id)

Allows you to retrieve a specified overpayments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$overpayment_id = 'overpayment_id_example'; // string | Unique identifier for a Overpayment

try {
    $result = $apiInstance->getOverpayment($overpayment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getOverpayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **overpayment_id** | [**string**](../Model/.md)| Unique identifier for a Overpayment |

### Return type

[**\SidneyAllen\XeroPHP\Model\Overpayments**](../Model/Overpayments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOverpaymentHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords getOverpaymentHistory($overpayment_id)

Allows you to retrieve a history records of an Overpayment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$overpayment_id = 'overpayment_id_example'; // string | Unique identifier for a Overpayment

try {
    $result = $apiInstance->getOverpaymentHistory($overpayment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getOverpaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **overpayment_id** | [**string**](../Model/.md)| Unique identifier for a Overpayment |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOverpayments**
> \SidneyAllen\XeroPHP\Model\Overpayments getOverpayments($if_modified_since, $where, $order, $page)

Allows you to retrieve overpayments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 overpayments will be returned in a single API call with line items shown for each overpayment

try {
    $result = $apiInstance->getOverpayments($if_modified_since, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getOverpayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 overpayments will be returned in a single API call with line items shown for each overpayment | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\Overpayments**](../Model/Overpayments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayment**
> \SidneyAllen\XeroPHP\Model\Payments getPayment($payment_id)

Allows you to retrieve a specified payment for invoices and credit notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 'payment_id_example'; // string | Unique identifier for a Payment

try {
    $result = $apiInstance->getPayment($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | [**string**](../Model/.md)| Unique identifier for a Payment |

### Return type

[**\SidneyAllen\XeroPHP\Model\Payments**](../Model/Payments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords getPaymentHistory($payment_id)

Allows you to retrieve history records of a payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 'payment_id_example'; // string | Unique identifier for a Payment

try {
    $result = $apiInstance->getPaymentHistory($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | [**string**](../Model/.md)| Unique identifier for a Payment |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentServices**
> \SidneyAllen\XeroPHP\Model\PaymentServices getPaymentServices()

Allows you to retrieve payment services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPaymentServices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPaymentServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SidneyAllen\XeroPHP\Model\PaymentServices**](../Model/PaymentServices.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayments**
> \SidneyAllen\XeroPHP\Model\Payments getPayments($if_modified_since, $where, $order)

Allows you to retrieve payments for invoices and credit notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getPayments($if_modified_since, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\Payments**](../Model/Payments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPrepayment**
> \SidneyAllen\XeroPHP\Model\Prepayments getPrepayment($prepayment_id)

Allows you to retrieve a specified prepayments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prepayment_id = 'prepayment_id_example'; // string | Unique identifier for a PrePayment

try {
    $result = $apiInstance->getPrepayment($prepayment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPrepayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prepayment_id** | [**string**](../Model/.md)| Unique identifier for a PrePayment |

### Return type

[**\SidneyAllen\XeroPHP\Model\Prepayments**](../Model/Prepayments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPrepaymentHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords getPrepaymentHistory($prepayment_id)

Allows you to retrieve a history records of an Prepayment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prepayment_id = 'prepayment_id_example'; // string | Unique identifier for a PrePayment

try {
    $result = $apiInstance->getPrepaymentHistory($prepayment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPrepaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prepayment_id** | [**string**](../Model/.md)| Unique identifier for a PrePayment |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPrepayments**
> \SidneyAllen\XeroPHP\Model\Prepayments getPrepayments($if_modified_since, $where, $order, $page)

Allows you to retrieve prepayments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 prepayments will be returned in a single API call with line items shown for each overpayment

try {
    $result = $apiInstance->getPrepayments($if_modified_since, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPrepayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 prepayments will be returned in a single API call with line items shown for each overpayment | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\Prepayments**](../Model/Prepayments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPurchaseOrder**
> \SidneyAllen\XeroPHP\Model\PurchaseOrders getPurchaseOrder($purchase_order_id)

Allows you to retrieve a specified purchase orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order_id = 'purchase_order_id_example'; // string | Unique identifier for a PurchaseOrder

try {
    $result = $apiInstance->getPurchaseOrder($purchase_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_id** | [**string**](../Model/.md)| Unique identifier for a PurchaseOrder |

### Return type

[**\SidneyAllen\XeroPHP\Model\PurchaseOrders**](../Model/PurchaseOrders.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPurchaseOrderHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords getPurchaseOrderHistory($purchase_order_id)

Allows you to retrieve history for PurchaseOrder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order_id = 'purchase_order_id_example'; // string | Unique identifier for a PurchaseOrder

try {
    $result = $apiInstance->getPurchaseOrderHistory($purchase_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPurchaseOrderHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_id** | [**string**](../Model/.md)| Unique identifier for a PurchaseOrder |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPurchaseOrders**
> \SidneyAllen\XeroPHP\Model\PurchaseOrders getPurchaseOrders($if_modified_since, $status, $date_from, $date_to, $order, $page)

Allows you to retrieve purchase orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$status = 'status_example'; // string | Filter by purchase order status
$date_from = 'date_from_example'; // string | Filter by purchase order date (e.g. GET https://.../PurchaseOrders?DateFrom=2015-12-01&DateTo=2015-12-31
$date_to = 'date_to_example'; // string | Filter by purchase order date (e.g. GET https://.../PurchaseOrders?DateFrom=2015-12-01&DateTo=2015-12-31
$order = 'order_example'; // string | Order by an any element
$page = 56; // int | To specify a page, append the page parameter to the URL e.g. ?page=1. If there are 100 records in the response you will need to check if there is any more data by fetching the next page e.g ?page=2 and continuing this process until no more results are returned.

try {
    $result = $apiInstance->getPurchaseOrders($if_modified_since, $status, $date_from, $date_to, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPurchaseOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **status** | **string**| Filter by purchase order status | [optional]
 **date_from** | **string**| Filter by purchase order date (e.g. GET https://.../PurchaseOrders?DateFrom&#x3D;2015-12-01&amp;DateTo&#x3D;2015-12-31 | [optional]
 **date_to** | **string**| Filter by purchase order date (e.g. GET https://.../PurchaseOrders?DateFrom&#x3D;2015-12-01&amp;DateTo&#x3D;2015-12-31 | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| To specify a page, append the page parameter to the URL e.g. ?page&#x3D;1. If there are 100 records in the response you will need to check if there is any more data by fetching the next page e.g ?page&#x3D;2 and continuing this process until no more results are returned. | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\PurchaseOrders**](../Model/PurchaseOrders.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceipt**
> \SidneyAllen\XeroPHP\Model\Receipts getReceipt($receipt_id)

Allows you to retrieve a specified draft expense claim receipts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_id = 'receipt_id_example'; // string | Unique identifier for a Receipt

try {
    $result = $apiInstance->getReceipt($receipt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_id** | [**string**](../Model/.md)| Unique identifier for a Receipt |

### Return type

[**\SidneyAllen\XeroPHP\Model\Receipts**](../Model/Receipts.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceiptAttachmentByFileName**
> \SplFileObject getReceiptAttachmentByFileName($receipt_id, $file_name, $content_type)

Allows you to retrieve Attachments on expense claim receipts by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_id = 'receipt_id_example'; // string | Unique identifier for a Receipt
$file_name = 'file_name_example'; // string | The name of the file being attached to the Receipt
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getReceiptAttachmentByFileName($receipt_id, $file_name, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReceiptAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_id** | [**string**](../Model/.md)| Unique identifier for a Receipt |
 **file_name** | **string**| The name of the file being attached to the Receipt |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceiptAttachmentById**
> \SplFileObject getReceiptAttachmentById($receipt_id, $attachment_id, $content_type)

Allows you to retrieve Attachments on expense claim receipts by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_id = 'receipt_id_example'; // string | Unique identifier for a Receipt
$attachment_id = 'attachment_id_example'; // string | Unique identifier for a Attachment
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getReceiptAttachmentById($receipt_id, $attachment_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReceiptAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_id** | [**string**](../Model/.md)| Unique identifier for a Receipt |
 **attachment_id** | [**string**](../Model/.md)| Unique identifier for a Attachment |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceiptAttachments**
> \SidneyAllen\XeroPHP\Model\Attachments getReceiptAttachments($receipt_id)

Allows you to retrieve Attachments for expense claim receipts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_id = 'receipt_id_example'; // string | Unique identifier for a Receipt

try {
    $result = $apiInstance->getReceiptAttachments($receipt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReceiptAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_id** | [**string**](../Model/.md)| Unique identifier for a Receipt |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceiptHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords getReceiptHistory($receipt_id)

Allows you to retrieve a history records of an Receipt

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_id = 'receipt_id_example'; // string | Unique identifier for a Receipt

try {
    $result = $apiInstance->getReceiptHistory($receipt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReceiptHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_id** | [**string**](../Model/.md)| Unique identifier for a Receipt |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceipts**
> \SidneyAllen\XeroPHP\Model\Receipts getReceipts($if_modified_since, $where, $order)

Allows you to retrieve draft expense claim receipts for any user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getReceipts($if_modified_since, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReceipts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\Receipts**](../Model/Receipts.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepeatingInvoice**
> \SidneyAllen\XeroPHP\Model\RepeatingInvoices getRepeatingInvoice($repeating_invoice_id)

Allows you to retrieve a specified repeating invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$repeating_invoice_id = 'repeating_invoice_id_example'; // string | Unique identifier for a Repeating Invoice

try {
    $result = $apiInstance->getRepeatingInvoice($repeating_invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getRepeatingInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repeating_invoice_id** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |

### Return type

[**\SidneyAllen\XeroPHP\Model\RepeatingInvoices**](../Model/RepeatingInvoices.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepeatingInvoiceAttachmentByFileName**
> \SplFileObject getRepeatingInvoiceAttachmentByFileName($repeating_invoice_id, $file_name, $content_type)

Allows you to retrieve specified attachment on repeating invoices by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$repeating_invoice_id = 'repeating_invoice_id_example'; // string | Unique identifier for a Repeating Invoice
$file_name = 'file_name_example'; // string | The name of the file being attached to a Repeating Invoice
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getRepeatingInvoiceAttachmentByFileName($repeating_invoice_id, $file_name, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getRepeatingInvoiceAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repeating_invoice_id** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |
 **file_name** | **string**| The name of the file being attached to a Repeating Invoice |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepeatingInvoiceAttachmentById**
> \SplFileObject getRepeatingInvoiceAttachmentById($repeating_invoice_id, $attachment_id, $content_type)

Allows you to retrieve a specified Attachments on repeating invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$repeating_invoice_id = 'repeating_invoice_id_example'; // string | Unique identifier for a Repeating Invoice
$attachment_id = 'attachment_id_example'; // string | Unique identifier for a Attachment
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getRepeatingInvoiceAttachmentById($repeating_invoice_id, $attachment_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getRepeatingInvoiceAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repeating_invoice_id** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |
 **attachment_id** | [**string**](../Model/.md)| Unique identifier for a Attachment |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepeatingInvoiceAttachments**
> \SidneyAllen\XeroPHP\Model\Attachments getRepeatingInvoiceAttachments($repeating_invoice_id)

Allows you to retrieve Attachments on repeating invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$repeating_invoice_id = 'repeating_invoice_id_example'; // string | Unique identifier for a Repeating Invoice

try {
    $result = $apiInstance->getRepeatingInvoiceAttachments($repeating_invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getRepeatingInvoiceAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repeating_invoice_id** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepeatingInvoiceHistory**
> \SidneyAllen\XeroPHP\Model\HistoryRecords getRepeatingInvoiceHistory($repeating_invoice_id)

Allows you to retrieve history for a repeating invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$repeating_invoice_id = 'repeating_invoice_id_example'; // string | Unique identifier for a Repeating Invoice

try {
    $result = $apiInstance->getRepeatingInvoiceHistory($repeating_invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getRepeatingInvoiceHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repeating_invoice_id** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |

### Return type

[**\SidneyAllen\XeroPHP\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepeatingInvoices**
> \SidneyAllen\XeroPHP\Model\RepeatingInvoices getRepeatingInvoices($where, $order)

Allows you to retrieve any repeating invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getRepeatingInvoices($where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getRepeatingInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\RepeatingInvoices**](../Model/RepeatingInvoices.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportAgedPayablesByContact**
> \SidneyAllen\XeroPHP\Model\ReportWithRows getReportAgedPayablesByContact($contact_id, $date, $from_date, $to_date)

Allows you to retrieve report for AgedPayablesByContact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date of the Aged Payables By Contact report
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The from date of the Aged Payables By Contact report
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The to date of the Aged Payables By Contact report

try {
    $result = $apiInstance->getReportAgedPayablesByContact($contact_id, $date, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportAgedPayablesByContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **date** | **\DateTime**| The date of the Aged Payables By Contact report | [optional]
 **from_date** | **\DateTime**| The from date of the Aged Payables By Contact report | [optional]
 **to_date** | **\DateTime**| The to date of the Aged Payables By Contact report | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportAgedReceivablesByContact**
> \SidneyAllen\XeroPHP\Model\ReportWithRows getReportAgedReceivablesByContact($contact_id, $date, $from_date, $to_date)

Allows you to retrieve report for AgedReceivablesByContact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact
$date = 'date_example'; // string | The date of the Aged Receivables By Contact report
$from_date = 'from_date_example'; // string | The from date of the Aged Receivables By Contact report
$to_date = 'to_date_example'; // string | The to date of the Aged Receivables By Contact report

try {
    $result = $apiInstance->getReportAgedReceivablesByContact($contact_id, $date, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportAgedReceivablesByContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **date** | **string**| The date of the Aged Receivables By Contact report | [optional]
 **from_date** | **string**| The from date of the Aged Receivables By Contact report | [optional]
 **to_date** | **string**| The to date of the Aged Receivables By Contact report | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportBASorGST**
> \SidneyAllen\XeroPHP\Model\ReportWithRows getReportBASorGST($report_id)

Allows you to retrieve report for BAS only valid for AU orgs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string | Unique identifier for a Report

try {
    $result = $apiInstance->getReportBASorGST($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportBASorGST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**| Unique identifier for a Report |

### Return type

[**\SidneyAllen\XeroPHP\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportBASorGSTList**
> \SidneyAllen\XeroPHP\Model\ReportWithRows getReportBASorGSTList()

Allows you to retrieve report for BAS only valid for AU orgs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getReportBASorGSTList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportBASorGSTList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SidneyAllen\XeroPHP\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportBalanceSheet**
> \SidneyAllen\XeroPHP\Model\ReportWithRows getReportBalanceSheet($date, $periods, $timeframe, $tracking_option_id1, $tracking_option_id2, $standard_layout, $payments_only)

Allows you to retrieve report for BalanceSheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = 'date_example'; // string | The date of the Balance Sheet report
$periods = 56; // int | The number of periods for the Balance Sheet report
$timeframe = 'timeframe_example'; // string | The period size to compare to (MONTH, QUARTER, YEAR)
$tracking_option_id1 = 'tracking_option_id1_example'; // string | The tracking option 1 for the Balance Sheet report
$tracking_option_id2 = 'tracking_option_id2_example'; // string | The tracking option 2 for the Balance Sheet report
$standard_layout = True; // bool | The standard layout boolean for the Balance Sheet report
$payments_only = True; // bool | return a cash basis for the Balance Sheet report

try {
    $result = $apiInstance->getReportBalanceSheet($date, $periods, $timeframe, $tracking_option_id1, $tracking_option_id2, $standard_layout, $payments_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportBalanceSheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| The date of the Balance Sheet report | [optional]
 **periods** | **int**| The number of periods for the Balance Sheet report | [optional]
 **timeframe** | **string**| The period size to compare to (MONTH, QUARTER, YEAR) | [optional]
 **tracking_option_id1** | **string**| The tracking option 1 for the Balance Sheet report | [optional]
 **tracking_option_id2** | **string**| The tracking option 2 for the Balance Sheet report | [optional]
 **standard_layout** | **bool**| The standard layout boolean for the Balance Sheet report | [optional]
 **payments_only** | **bool**| return a cash basis for the Balance Sheet report | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportBankSummary**
> \SidneyAllen\XeroPHP\Model\ReportWithRows getReportBankSummary($date, $period, $timeframe)

Allows you to retrieve report for BankSummary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = 'date_example'; // string | The date for the Bank Summary report e.g. 2018-03-31
$period = 56; // int | The number of periods to compare (integer between 1 and 12)
$timeframe = 56; // int | The period size to compare to (1=month, 3=quarter, 12=year)

try {
    $result = $apiInstance->getReportBankSummary($date, $period, $timeframe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportBankSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| The date for the Bank Summary report e.g. 2018-03-31 | [optional]
 **period** | **int**| The number of periods to compare (integer between 1 and 12) | [optional]
 **timeframe** | **int**| The period size to compare to (1&#x3D;month, 3&#x3D;quarter, 12&#x3D;year) | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportBudgetSummary**
> \SidneyAllen\XeroPHP\Model\ReportWithRows getReportBudgetSummary($date, $period, $timeframe)

Allows you to retrieve report for Budget Summary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = 'date_example'; // string | The date for the Bank Summary report e.g. 2018-03-31
$period = 56; // int | The number of periods to compare (integer between 1 and 12)
$timeframe = 56; // int | The period size to compare to (1=month, 3=quarter, 12=year)

try {
    $result = $apiInstance->getReportBudgetSummary($date, $period, $timeframe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportBudgetSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| The date for the Bank Summary report e.g. 2018-03-31 | [optional]
 **period** | **int**| The number of periods to compare (integer between 1 and 12) | [optional]
 **timeframe** | **int**| The period size to compare to (1&#x3D;month, 3&#x3D;quarter, 12&#x3D;year) | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportExecutiveSummary**
> \SidneyAllen\XeroPHP\Model\ReportWithRows getReportExecutiveSummary($date)

Allows you to retrieve report for ExecutiveSummary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = 'date_example'; // string | The date for the Bank Summary report e.g. 2018-03-31

try {
    $result = $apiInstance->getReportExecutiveSummary($date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportExecutiveSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| The date for the Bank Summary report e.g. 2018-03-31 | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportProfitAndLoss**
> \SidneyAllen\XeroPHP\Model\ReportWithRows getReportProfitAndLoss($from_date, $to_date, $periods, $timeframe, $tracking_category_id, $tracking_category_id2, $tracking_option_id, $tracking_option_id2, $standard_layout, $payments_only)

Allows you to retrieve report for ProfitAndLoss

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = 'from_date_example'; // string | The from date for the ProfitAndLoss report e.g. 2018-03-31
$to_date = 'to_date_example'; // string | The to date for the ProfitAndLoss report e.g. 2018-03-31
$periods = 56; // int | The number of periods to compare (integer between 1 and 12)
$timeframe = 'timeframe_example'; // string | The period size to compare to (MONTH, QUARTER, YEAR)
$tracking_category_id = 'tracking_category_id_example'; // string | The trackingCategory 1 for the ProfitAndLoss report
$tracking_category_id2 = 'tracking_category_id2_example'; // string | The trackingCategory 2 for the ProfitAndLoss report
$tracking_option_id = 'tracking_option_id_example'; // string | The tracking option 1 for the ProfitAndLoss report
$tracking_option_id2 = 'tracking_option_id2_example'; // string | The tracking option 2 for the ProfitAndLoss report
$standard_layout = True; // bool | Return the standard layout for the ProfitAndLoss report
$payments_only = True; // bool | Return cash only basis for the ProfitAndLoss report

try {
    $result = $apiInstance->getReportProfitAndLoss($from_date, $to_date, $periods, $timeframe, $tracking_category_id, $tracking_category_id2, $tracking_option_id, $tracking_option_id2, $standard_layout, $payments_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportProfitAndLoss: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **string**| The from date for the ProfitAndLoss report e.g. 2018-03-31 | [optional]
 **to_date** | **string**| The to date for the ProfitAndLoss report e.g. 2018-03-31 | [optional]
 **periods** | **int**| The number of periods to compare (integer between 1 and 12) | [optional]
 **timeframe** | **string**| The period size to compare to (MONTH, QUARTER, YEAR) | [optional]
 **tracking_category_id** | **string**| The trackingCategory 1 for the ProfitAndLoss report | [optional]
 **tracking_category_id2** | **string**| The trackingCategory 2 for the ProfitAndLoss report | [optional]
 **tracking_option_id** | **string**| The tracking option 1 for the ProfitAndLoss report | [optional]
 **tracking_option_id2** | **string**| The tracking option 2 for the ProfitAndLoss report | [optional]
 **standard_layout** | **bool**| Return the standard layout for the ProfitAndLoss report | [optional]
 **payments_only** | **bool**| Return cash only basis for the ProfitAndLoss report | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportTenNinetyNine**
> \SidneyAllen\XeroPHP\Model\Reports getReportTenNinetyNine($report_year)

Allows you to retrieve report for TenNinetyNine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_year = 'report_year_example'; // string | The year of the 1099 report

try {
    $result = $apiInstance->getReportTenNinetyNine($report_year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportTenNinetyNine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_year** | **string**| The year of the 1099 report | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\Reports**](../Model/Reports.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportTrialBalance**
> \SidneyAllen\XeroPHP\Model\ReportWithRows getReportTrialBalance($date, $payments_only)

Allows you to retrieve report for TrialBalance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = 'date_example'; // string | The date for the Trial Balance report e.g. 2018-03-31
$payments_only = True; // bool | Return cash only basis for the Trial Balance report

try {
    $result = $apiInstance->getReportTrialBalance($date, $payments_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportTrialBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| The date for the Trial Balance report e.g. 2018-03-31 | [optional]
 **payments_only** | **bool**| Return cash only basis for the Trial Balance report | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaxRates**
> \SidneyAllen\XeroPHP\Model\TaxRates getTaxRates($where, $order, $tax_type)

Allows you to retrieve Tax Rates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$tax_type = 'tax_type_example'; // string | Filter by tax type

try {
    $result = $apiInstance->getTaxRates($where, $order, $tax_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getTaxRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **tax_type** | **string**| Filter by tax type | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\TaxRates**](../Model/TaxRates.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTrackingCategories**
> \SidneyAllen\XeroPHP\Model\TrackingCategories getTrackingCategories($where, $order, $include_archived)

Allows you to retrieve tracking categories and options

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$include_archived = True; // bool | e.g. includeArchived=true - Categories and options with a status of ARCHIVED will be included in the response

try {
    $result = $apiInstance->getTrackingCategories($where, $order, $include_archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getTrackingCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **include_archived** | **bool**| e.g. includeArchived&#x3D;true - Categories and options with a status of ARCHIVED will be included in the response | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\TrackingCategories**](../Model/TrackingCategories.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTrackingCategory**
> \SidneyAllen\XeroPHP\Model\TrackingCategories getTrackingCategory($tracking_category_id)

Allows you to retrieve tracking categories and options for specified category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tracking_category_id = 'tracking_category_id_example'; // string | Unique identifier for a TrackingCategory

try {
    $result = $apiInstance->getTrackingCategory($tracking_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getTrackingCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tracking_category_id** | [**string**](../Model/.md)| Unique identifier for a TrackingCategory |

### Return type

[**\SidneyAllen\XeroPHP\Model\TrackingCategories**](../Model/TrackingCategories.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUser**
> \SidneyAllen\XeroPHP\Model\Users getUser($user_id)

Allows you to retrieve a specified user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | Unique identifier for a User

try {
    $result = $apiInstance->getUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**string**](../Model/.md)| Unique identifier for a User |

### Return type

[**\SidneyAllen\XeroPHP\Model\Users**](../Model/Users.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsers**
> \SidneyAllen\XeroPHP\Model\Users getUsers($if_modified_since, $where, $order)

Allows you to retrieve users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getUsers($if_modified_since, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\Users**](../Model/Users.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccount**
> \SidneyAllen\XeroPHP\Model\Accounts updateAccount($account_id, $accounts)

Allows you to update a chart of accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Unique identifier for retrieving single object
$accounts = { "Accounts":[ { "Code":"123456", "Name":"BarFoo", "AccountID":"99ce6032-0678-4aa0-8148-240c75fee33a", "Type":"EXPENSE", "Description":"GoodBye World", "TaxType":"INPUT", "EnablePaymentsToAccount":false, "ShowInExpenseClaims":false, "Class":"EXPENSE", "ReportingCode":"EXP", "ReportingCodeName":"Expense", "UpdatedDateUTC":"2019-02-21T16:29:47.96-08:00" } ] }; // \SidneyAllen\XeroPHP\Model\Accounts | Request of type Accounts array with one Account

try {
    $result = $apiInstance->updateAccount($account_id, $accounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | [**string**](../Model/.md)| Unique identifier for retrieving single object |
 **accounts** | [**\SidneyAllen\XeroPHP\Model\Accounts**](../Model/Accounts.md)| Request of type Accounts array with one Account |

### Return type

[**\SidneyAllen\XeroPHP\Model\Accounts**](../Model/Accounts.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountAttachmentByFileName**
> \SidneyAllen\XeroPHP\Model\Attachments updateAccountAttachmentByFileName($account_id, $file_name, $body)

Allows you to update Attachment on Account by Filename

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Unique identifier for Account object
$file_name = 'file_name_example'; // string | Name of the attachment
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateAccountAttachmentByFileName($account_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateAccountAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | [**string**](../Model/.md)| Unique identifier for Account object |
 **file_name** | **string**| Name of the attachment |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBankTransaction**
> \SidneyAllen\XeroPHP\Model\BankTransactions updateBankTransaction($bank_transaction_id, $bank_transactions)

Allows you to update a single spend or receive money transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transaction_id = 'bank_transaction_id_example'; // string | Xero generated unique identifier for a bank transaction
$bank_transactions = { "BankTransactions":[ { "Type":"SPEND", "Contact":{ "ContactID":"5cc8cf28-567e-4d43-b287-687cfcaec47c", "ContactStatus":"ACTIVE", "Name":"Katherine Warren", "FirstName":"Katherine", "LastName":"Warren", "EmailAddress":"kat.warren@clampett.com", "ContactPersons":[
], "BankAccountDetails":"", "Addresses":[ { "AddressType":"STREET", "City":"", "Region":"", "PostalCode":"", "Country":"" }, { "AddressType":"POBOX", "AddressLine1":"", "AddressLine2":"", "AddressLine3":"", "AddressLine4":"", "City":"Palo Alto", "Region":"CA", "PostalCode":"94020", "Country":"United States" } ], "Phones":[ { "PhoneType":"DEFAULT", "PhoneNumber":"847-1294", "PhoneAreaCode":"(626)", "PhoneCountryCode":"" }, { "PhoneType":"DDI", "PhoneNumber":"", "PhoneAreaCode":"", "PhoneCountryCode":"" }, { "PhoneType":"FAX", "PhoneNumber":"", "PhoneAreaCode":"", "PhoneCountryCode":"" }, { "PhoneType":"MOBILE", "PhoneNumber":"", "PhoneAreaCode":"", "PhoneCountryCode":"" } ], "UpdatedDateUTC":"2017-08-21T13:49:04.227-07:00", "ContactGroups":[
] }, "Lineitems":[
], "BankAccount":{ "Code":"088", "Name":"Business Wells Fargo", "AccountID":"6f7594f2-f059-4d56-9e67-47ac9733bfe9" }, "IsReconciled":false, "Date":"2019-02-25", "Reference":"You just updated", "CurrencyCode":"USD", "CurrencyRate":1.0, "Status":"AUTHORISED", "LineAmountTypes":"Inclusive", "TotalTax":1.74, "BankTransactionID":"1289c190-e46d-434b-9628-463ffdb52f00", "UpdatedDateUTC":"2019-02-26T12:39:27.813-08:00" } ] }; // \SidneyAllen\XeroPHP\Model\BankTransactions | 

try {
    $result = $apiInstance->updateBankTransaction($bank_transaction_id, $bank_transactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateBankTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transaction_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |
 **bank_transactions** | [**\SidneyAllen\XeroPHP\Model\BankTransactions**](../Model/BankTransactions.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\BankTransactions**](../Model/BankTransactions.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBankTransactionAttachmentByFileName**
> \SidneyAllen\XeroPHP\Model\Attachments updateBankTransactionAttachmentByFileName($bank_transaction_id, $file_name, $body)

Allows you to update an Attachment on BankTransaction by Filename

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transaction_id = 'bank_transaction_id_example'; // string | Xero generated unique identifier for a bank transaction
$file_name = 'file_name_example'; // string | The name of the file being attached
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateBankTransactionAttachmentByFileName($bank_transaction_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateBankTransactionAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transaction_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |
 **file_name** | **string**| The name of the file being attached |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBankTransferAttachmentByFileName**
> \SidneyAllen\XeroPHP\Model\Attachments updateBankTransferAttachmentByFileName($bank_transfer_id, $file_name, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_id = 'bank_transfer_id_example'; // string | Xero generated unique identifier for a bank transfer
$file_name = 'file_name_example'; // string | The name of the file being attached to a Bank Transfer
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateBankTransferAttachmentByFileName($bank_transfer_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateBankTransferAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |
 **file_name** | **string**| The name of the file being attached to a Bank Transfer |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContact**
> \SidneyAllen\XeroPHP\Model\Contacts updateContact($contact_id, $contacts)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact
$contacts = { "Contacts":[ { "ContactID":"d5be01fb-b09f-4c3a-9c67-e10c2a03412c", "Name":"FooBar" } ] }; // \SidneyAllen\XeroPHP\Model\Contacts | 

try {
    $result = $apiInstance->updateContact($contact_id, $contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **contacts** | [**\SidneyAllen\XeroPHP\Model\Contacts**](../Model/Contacts.md)|  | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\Contacts**](../Model/Contacts.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContactAttachmentByFileName**
> \SidneyAllen\XeroPHP\Model\Attachments updateContactAttachmentByFileName($contact_id, $file_name, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact
$file_name = 'file_name_example'; // string | Name for the file you are attaching
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateContactAttachmentByFileName($contact_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateContactAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **file_name** | **string**| Name for the file you are attaching |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContactGroup**
> \SidneyAllen\XeroPHP\Model\ContactGroups updateContactGroup($contact_group_id, $contact_groups)

Allows you to update a Contract Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_group_id = 'contact_group_id_example'; // string | Unique identifier for a Contact Group
$contact_groups = { "ContactGroups":[ { "Name":"Vendor" } ] }; // \SidneyAllen\XeroPHP\Model\ContactGroups | 

try {
    $result = $apiInstance->updateContactGroup($contact_group_id, $contact_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateContactGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_group_id** | [**string**](../Model/.md)| Unique identifier for a Contact Group |
 **contact_groups** | [**\SidneyAllen\XeroPHP\Model\ContactGroups**](../Model/ContactGroups.md)|  | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\ContactGroups**](../Model/ContactGroups.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCreditNote**
> \SidneyAllen\XeroPHP\Model\CreditNotes updateCreditNote($credit_note_id, $credit_notes)

Allows you to update a specific credit note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note
$credit_notes = { "CreditNotes":[ { "Type":"ACCPAYCREDIT", "Contact":{ "ContactID":"430fa14a-f945-44d3-9f97-5df5e28441b8" }, "Date":"2019-01-05", "Status":"AUTHORISED", "Reference": "HelloWorld", "LineItems":[ { "Description":"Foobar", "Quantity":2.0, "UnitAmount":20.0, "AccountCode":"400" } ] } ] }; // \SidneyAllen\XeroPHP\Model\CreditNotes | 

try {
    $result = $apiInstance->updateCreditNote($credit_note_id, $credit_notes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateCreditNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **credit_notes** | [**\SidneyAllen\XeroPHP\Model\CreditNotes**](../Model/CreditNotes.md)|  | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Model\CreditNotes**](../Model/CreditNotes.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCreditNoteAttachmentByFileName**
> \SidneyAllen\XeroPHP\Model\Attachments updateCreditNoteAttachmentByFileName($credit_note_id, $file_name, $body)

Allows you to update Attachments on CreditNote by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note
$file_name = 'file_name_example'; // string | Name of the file you are attaching to Credit Note
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateCreditNoteAttachmentByFileName($credit_note_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateCreditNoteAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **file_name** | **string**| Name of the file you are attaching to Credit Note |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmployee**
> \SidneyAllen\XeroPHP\Model\Employees updateEmployee($employee_id, $employees)

Allows you to update a specific employee used in Xero payrun

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_id = 'employee_id_example'; // string | Unique identifier for a Employee
$employees = { "Employees":[ { "EmployeeID":"ad3db144-6362-459c-8c36-5d31d196e629", "FirstName":"Bruce", "LastName":"Banner" } ] }; // \SidneyAllen\XeroPHP\Model\Employees | 

try {
    $result = $apiInstance->updateEmployee($employee_id, $employees);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | [**string**](../Model/.md)| Unique identifier for a Employee |
 **employees** | [**\SidneyAllen\XeroPHP\Model\Employees**](../Model/Employees.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\Employees**](../Model/Employees.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateExpenseClaim**
> \SidneyAllen\XeroPHP\Model\ExpenseClaims updateExpenseClaim($expense_claim_id, $expense_claims)

Allows you to update specified expense claims

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expense_claim_id = 'expense_claim_id_example'; // string | Unique identifier for a ExpenseClaim
$expense_claims = { "ExpenseClaims":[ { "Status":"AUTHORISED", "User":{ "UserID":"d1164823-0ac1-41ad-987b-b4e30fe0b273" }, "Receipts":[ { "Lineitems":[
], "ReceiptID":"dc1c7f6d-0a4c-402f-acac-551d62ce5816" } ] } ] }; // \SidneyAllen\XeroPHP\Model\ExpenseClaims | 

try {
    $result = $apiInstance->updateExpenseClaim($expense_claim_id, $expense_claims);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateExpenseClaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expense_claim_id** | [**string**](../Model/.md)| Unique identifier for a ExpenseClaim |
 **expense_claims** | [**\SidneyAllen\XeroPHP\Model\ExpenseClaims**](../Model/ExpenseClaims.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\ExpenseClaims**](../Model/ExpenseClaims.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInvoice**
> \SidneyAllen\XeroPHP\Model\Invoices updateInvoice($invoice_id, $invoices)

Allows you to update a specified sales invoices or purchase bills

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice
$invoices = { "Invoices":[ { "LineItems":[
], "Reference":"My the Force be With You", "InvoiceID":"4074292c-09b3-456d-84e7-add864c6c39b" } ] }; // \SidneyAllen\XeroPHP\Model\Invoices | 

try {
    $result = $apiInstance->updateInvoice($invoice_id, $invoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **invoices** | [**\SidneyAllen\XeroPHP\Model\Invoices**](../Model/Invoices.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\Invoices**](../Model/Invoices.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInvoiceAttachmentByFileName**
> \SidneyAllen\XeroPHP\Model\Attachments updateInvoiceAttachmentByFileName($invoice_id, $file_name, $body)

Allows you to update Attachment on invoices or purchase bills by it's filename

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice
$file_name = 'file_name_example'; // string | Name of the file you are attaching
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateInvoiceAttachmentByFileName($invoice_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateInvoiceAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **file_name** | **string**| Name of the file you are attaching |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItem**
> \SidneyAllen\XeroPHP\Model\Items updateItem($item_id, $items)

Allows you to udpate a specified item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | Unique identifier for an Item
$items = { "Items":[ { "Code":"abc38306", "Description":"Hello Xero" } ] }; // \SidneyAllen\XeroPHP\Model\Items | 

try {
    $result = $apiInstance->updateItem($item_id, $items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | [**string**](../Model/.md)| Unique identifier for an Item |
 **items** | [**\SidneyAllen\XeroPHP\Model\Items**](../Model/Items.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\Items**](../Model/Items.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLinkedTransaction**
> \SidneyAllen\XeroPHP\Model\LinkedTransactions updateLinkedTransaction($linked_transaction_id, $linked_transactions)

Allows you to update a specified linked transactions (billable expenses)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linked_transaction_id = 'linked_transaction_id_example'; // string | Unique identifier for a LinkedTransaction
$linked_transactions = { "LinkedTransactions":[ { "ContactID":"4e1753b9-018a-4775-b6aa-1bc7871cfee3" } ] }; // \SidneyAllen\XeroPHP\Model\LinkedTransactions | 

try {
    $result = $apiInstance->updateLinkedTransaction($linked_transaction_id, $linked_transactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateLinkedTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linked_transaction_id** | [**string**](../Model/.md)| Unique identifier for a LinkedTransaction |
 **linked_transactions** | [**\SidneyAllen\XeroPHP\Model\LinkedTransactions**](../Model/LinkedTransactions.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\LinkedTransactions**](../Model/LinkedTransactions.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateManualJournal**
> \SidneyAllen\XeroPHP\Model\ManualJournals updateManualJournal($manual_journal_id, $manual_journals)

Allows you to update a specified manual journal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manual_journal_id = 'manual_journal_id_example'; // string | Unique identifier for a ManualJournal
$manual_journals = { "ManualJournals":[ { "Narration":"Hello Xero", "JournalLines":[
], "ManualJournalID":"07eac261-78ef-47a0-a0eb-a57b74137877" } ] }; // \SidneyAllen\XeroPHP\Model\ManualJournals | 

try {
    $result = $apiInstance->updateManualJournal($manual_journal_id, $manual_journals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateManualJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manual_journal_id** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |
 **manual_journals** | [**\SidneyAllen\XeroPHP\Model\ManualJournals**](../Model/ManualJournals.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\ManualJournals**](../Model/ManualJournals.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateManualJournalAttachmentByFileName**
> \SidneyAllen\XeroPHP\Model\Attachments updateManualJournalAttachmentByFileName($manual_journal_id, $file_name, $body)

Allows you to update a specified Attachment on ManualJournal by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manual_journal_id = 'manual_journal_id_example'; // string | Unique identifier for a ManualJournal
$file_name = 'file_name_example'; // string | The name of the file being attached to a ManualJournal
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateManualJournalAttachmentByFileName($manual_journal_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateManualJournalAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manual_journal_id** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |
 **file_name** | **string**| The name of the file being attached to a ManualJournal |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePurchaseOrder**
> \SidneyAllen\XeroPHP\Model\PurchaseOrders updatePurchaseOrder($purchase_order_id, $purchase_orders)

Allows you to update a specified purchase order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order_id = 'purchase_order_id_example'; // string | Unique identifier for a PurchaseOrder
$purchase_orders = { "PurchaseOrders":[ { "LineItems":[
], "AttentionTo":"Jimmy" } ] }; // \SidneyAllen\XeroPHP\Model\PurchaseOrders | 

try {
    $result = $apiInstance->updatePurchaseOrder($purchase_order_id, $purchase_orders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updatePurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_id** | [**string**](../Model/.md)| Unique identifier for a PurchaseOrder |
 **purchase_orders** | [**\SidneyAllen\XeroPHP\Model\PurchaseOrders**](../Model/PurchaseOrders.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\PurchaseOrders**](../Model/PurchaseOrders.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateReceipt**
> \SidneyAllen\XeroPHP\Model\Receipts updateReceipt($receipt_id, $receipts)

Allows you to retrieve a specified draft expense claim receipts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_id = 'receipt_id_example'; // string | Unique identifier for a Receipt
$receipts = { "Receipts":[ { "Lineitems":[
], "User":{ "UserID":"d1164823-0ac1-41ad-987b-b4e30fe0b273" }, "Reference":"Foobar" } ] }; // \SidneyAllen\XeroPHP\Model\Receipts | 

try {
    $result = $apiInstance->updateReceipt($receipt_id, $receipts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_id** | [**string**](../Model/.md)| Unique identifier for a Receipt |
 **receipts** | [**\SidneyAllen\XeroPHP\Model\Receipts**](../Model/Receipts.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\Receipts**](../Model/Receipts.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateReceiptAttachmentByFileName**
> \SidneyAllen\XeroPHP\Model\Attachments updateReceiptAttachmentByFileName($receipt_id, $file_name, $body)

Allows you to update Attachment on expense claim receipts by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_id = 'receipt_id_example'; // string | Unique identifier for a Receipt
$file_name = 'file_name_example'; // string | The name of the file being attached to the Receipt
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateReceiptAttachmentByFileName($receipt_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateReceiptAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_id** | [**string**](../Model/.md)| Unique identifier for a Receipt |
 **file_name** | **string**| The name of the file being attached to the Receipt |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepeatingInvoiceAttachmentByFileName**
> \SidneyAllen\XeroPHP\Model\Attachments updateRepeatingInvoiceAttachmentByFileName($repeating_invoice_id, $file_name, $body)

Allows you to update specified attachment on repeating invoices by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$repeating_invoice_id = 'repeating_invoice_id_example'; // string | Unique identifier for a Repeating Invoice
$file_name = 'file_name_example'; // string | The name of the file being attached to a Repeating Invoice
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateRepeatingInvoiceAttachmentByFileName($repeating_invoice_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateRepeatingInvoiceAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repeating_invoice_id** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |
 **file_name** | **string**| The name of the file being attached to a Repeating Invoice |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\SidneyAllen\XeroPHP\Model\Attachments**](../Model/Attachments.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTaxRate**
> \SidneyAllen\XeroPHP\Model\TaxRates updateTaxRate($tax_rates)

Allows you to update Tax Rates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_rates = new \SidneyAllen\XeroPHP\Model\TaxRates(); // \SidneyAllen\XeroPHP\Model\TaxRates | 

try {
    $result = $apiInstance->updateTaxRate($tax_rates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateTaxRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_rates** | [**\SidneyAllen\XeroPHP\Model\TaxRates**](../Model/TaxRates.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\TaxRates**](../Model/TaxRates.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTrackingCategory**
> \SidneyAllen\XeroPHP\Model\TrackingCategories updateTrackingCategory($tracking_category_id, $tracking_category)

Allows you to update tracking categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tracking_category_id = 'tracking_category_id_example'; // string | Unique identifier for a TrackingCategory
$tracking_category = new \SidneyAllen\XeroPHP\Model\TrackingCategory(); // \SidneyAllen\XeroPHP\Model\TrackingCategory | 

try {
    $result = $apiInstance->updateTrackingCategory($tracking_category_id, $tracking_category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateTrackingCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tracking_category_id** | [**string**](../Model/.md)| Unique identifier for a TrackingCategory |
 **tracking_category** | [**\SidneyAllen\XeroPHP\Model\TrackingCategory**](../Model/TrackingCategory.md)|  |

### Return type

[**\SidneyAllen\XeroPHP\Model\TrackingCategories**](../Model/TrackingCategories.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

