<?php
/**
 * TaxDeclaration
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU
 *
 * This is the Xero Payroll API for orgs in Australia region.
 *
 * OpenAPI spec version: 2.1.7
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollAu;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * TaxDeclaration Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TaxDeclaration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaxDeclaration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employee_id' => 'string',
        'employment_basis' => '\XeroAPI\XeroPHP\Models\PayrollAu\EmploymentBasis',
        'tfn_exemption_type' => '\XeroAPI\XeroPHP\Models\PayrollAu\TFNExemptionType',
        'tax_file_number' => 'string',
        'australian_resident_for_tax_purposes' => 'bool',
        'residency_status' => '\XeroAPI\XeroPHP\Models\PayrollAu\ResidencyStatus',
        'tax_free_threshold_claimed' => 'bool',
        'tax_offset_estimated_amount' => 'float',
        'has_help_debt' => 'bool',
        'has_sfss_debt' => 'bool',
        'has_trade_support_loan_debt' => 'bool',
        'upward_variation_tax_withholding_amount' => 'float',
        'eligible_to_receive_leave_loading' => 'bool',
        'approved_withholding_variation_percentage' => 'float',
        'has_student_startup_loan' => 'bool',
        'updated_date_utc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'employee_id' => 'uuid',
        'employment_basis' => null,
        'tfn_exemption_type' => null,
        'tax_file_number' => null,
        'australian_resident_for_tax_purposes' => null,
        'residency_status' => null,
        'tax_free_threshold_claimed' => null,
        'tax_offset_estimated_amount' => 'int',
        'has_help_debt' => null,
        'has_sfss_debt' => null,
        'has_trade_support_loan_debt' => null,
        'upward_variation_tax_withholding_amount' => 'int',
        'eligible_to_receive_leave_loading' => null,
        'approved_withholding_variation_percentage' => 'int',
        'has_student_startup_loan' => null,
        'updated_date_utc' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'employee_id' => 'EmployeeID',
        'employment_basis' => 'EmploymentBasis',
        'tfn_exemption_type' => 'TFNExemptionType',
        'tax_file_number' => 'TaxFileNumber',
        'australian_resident_for_tax_purposes' => 'AustralianResidentForTaxPurposes',
        'residency_status' => 'ResidencyStatus',
        'tax_free_threshold_claimed' => 'TaxFreeThresholdClaimed',
        'tax_offset_estimated_amount' => 'TaxOffsetEstimatedAmount',
        'has_help_debt' => 'HasHELPDebt',
        'has_sfss_debt' => 'HasSFSSDebt',
        'has_trade_support_loan_debt' => 'HasTradeSupportLoanDebt',
        'upward_variation_tax_withholding_amount' => 'UpwardVariationTaxWithholdingAmount',
        'eligible_to_receive_leave_loading' => 'EligibleToReceiveLeaveLoading',
        'approved_withholding_variation_percentage' => 'ApprovedWithholdingVariationPercentage',
        'has_student_startup_loan' => 'HasStudentStartupLoan',
        'updated_date_utc' => 'UpdatedDateUTC'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_id' => 'setEmployeeId',
        'employment_basis' => 'setEmploymentBasis',
        'tfn_exemption_type' => 'setTfnExemptionType',
        'tax_file_number' => 'setTaxFileNumber',
        'australian_resident_for_tax_purposes' => 'setAustralianResidentForTaxPurposes',
        'residency_status' => 'setResidencyStatus',
        'tax_free_threshold_claimed' => 'setTaxFreeThresholdClaimed',
        'tax_offset_estimated_amount' => 'setTaxOffsetEstimatedAmount',
        'has_help_debt' => 'setHasHelpDebt',
        'has_sfss_debt' => 'setHasSfssDebt',
        'has_trade_support_loan_debt' => 'setHasTradeSupportLoanDebt',
        'upward_variation_tax_withholding_amount' => 'setUpwardVariationTaxWithholdingAmount',
        'eligible_to_receive_leave_loading' => 'setEligibleToReceiveLeaveLoading',
        'approved_withholding_variation_percentage' => 'setApprovedWithholdingVariationPercentage',
        'has_student_startup_loan' => 'setHasStudentStartupLoan',
        'updated_date_utc' => 'setUpdatedDateUtc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_id' => 'getEmployeeId',
        'employment_basis' => 'getEmploymentBasis',
        'tfn_exemption_type' => 'getTfnExemptionType',
        'tax_file_number' => 'getTaxFileNumber',
        'australian_resident_for_tax_purposes' => 'getAustralianResidentForTaxPurposes',
        'residency_status' => 'getResidencyStatus',
        'tax_free_threshold_claimed' => 'getTaxFreeThresholdClaimed',
        'tax_offset_estimated_amount' => 'getTaxOffsetEstimatedAmount',
        'has_help_debt' => 'getHasHelpDebt',
        'has_sfss_debt' => 'getHasSfssDebt',
        'has_trade_support_loan_debt' => 'getHasTradeSupportLoanDebt',
        'upward_variation_tax_withholding_amount' => 'getUpwardVariationTaxWithholdingAmount',
        'eligible_to_receive_leave_loading' => 'getEligibleToReceiveLeaveLoading',
        'approved_withholding_variation_percentage' => 'getApprovedWithholdingVariationPercentage',
        'has_student_startup_loan' => 'getHasStudentStartupLoan',
        'updated_date_utc' => 'getUpdatedDateUtc'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['employment_basis'] = isset($data['employment_basis']) ? $data['employment_basis'] : null;
        $this->container['tfn_exemption_type'] = isset($data['tfn_exemption_type']) ? $data['tfn_exemption_type'] : null;
        $this->container['tax_file_number'] = isset($data['tax_file_number']) ? $data['tax_file_number'] : null;
        $this->container['australian_resident_for_tax_purposes'] = isset($data['australian_resident_for_tax_purposes']) ? $data['australian_resident_for_tax_purposes'] : null;
        $this->container['residency_status'] = isset($data['residency_status']) ? $data['residency_status'] : null;
        $this->container['tax_free_threshold_claimed'] = isset($data['tax_free_threshold_claimed']) ? $data['tax_free_threshold_claimed'] : null;
        $this->container['tax_offset_estimated_amount'] = isset($data['tax_offset_estimated_amount']) ? $data['tax_offset_estimated_amount'] : null;
        $this->container['has_help_debt'] = isset($data['has_help_debt']) ? $data['has_help_debt'] : null;
        $this->container['has_sfss_debt'] = isset($data['has_sfss_debt']) ? $data['has_sfss_debt'] : null;
        $this->container['has_trade_support_loan_debt'] = isset($data['has_trade_support_loan_debt']) ? $data['has_trade_support_loan_debt'] : null;
        $this->container['upward_variation_tax_withholding_amount'] = isset($data['upward_variation_tax_withholding_amount']) ? $data['upward_variation_tax_withholding_amount'] : null;
        $this->container['eligible_to_receive_leave_loading'] = isset($data['eligible_to_receive_leave_loading']) ? $data['eligible_to_receive_leave_loading'] : null;
        $this->container['approved_withholding_variation_percentage'] = isset($data['approved_withholding_variation_percentage']) ? $data['approved_withholding_variation_percentage'] : null;
        $this->container['has_student_startup_loan'] = isset($data['has_student_startup_loan']) ? $data['has_student_startup_loan'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['employee_id'] === null) {
            $invalidProperties[] = "'employee_id' can't be null";
        }
        if ($this->container['employment_basis'] === null) {
            $invalidProperties[] = "'employment_basis' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets employee_id
     *
     * @return string
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param string $employee_id Address line 1 for employee home address
     *
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {

        $this->container['employee_id'] = $employee_id;

        return $this;
    }



    /**
     * Gets employment_basis
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\EmploymentBasis
     */
    public function getEmploymentBasis()
    {
        return $this->container['employment_basis'];
    }

    /**
     * Sets employment_basis
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\EmploymentBasis $employment_basis employment_basis
     *
     * @return $this
     */
    public function setEmploymentBasis($employment_basis)
    {

        $this->container['employment_basis'] = $employment_basis;

        return $this;
    }



    /**
     * Gets tfn_exemption_type
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\TFNExemptionType|null
     */
    public function getTfnExemptionType()
    {
        return $this->container['tfn_exemption_type'];
    }

    /**
     * Sets tfn_exemption_type
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\TFNExemptionType|null $tfn_exemption_type tfn_exemption_type
     *
     * @return $this
     */
    public function setTfnExemptionType($tfn_exemption_type)
    {

        $this->container['tfn_exemption_type'] = $tfn_exemption_type;

        return $this;
    }



    /**
     * Gets tax_file_number
     *
     * @return string|null
     */
    public function getTaxFileNumber()
    {
        return $this->container['tax_file_number'];
    }

    /**
     * Sets tax_file_number
     *
     * @param string|null $tax_file_number The tax file number e.g 123123123.
     *
     * @return $this
     */
    public function setTaxFileNumber($tax_file_number)
    {

        $this->container['tax_file_number'] = $tax_file_number;

        return $this;
    }



    /**
     * Gets australian_resident_for_tax_purposes
     *
     * @return bool|null
     */
    public function getAustralianResidentForTaxPurposes()
    {
        return $this->container['australian_resident_for_tax_purposes'];
    }

    /**
     * Sets australian_resident_for_tax_purposes
     *
     * @param bool|null $australian_resident_for_tax_purposes If the employee is Australian resident for tax purposes. e.g true or false
     *
     * @return $this
     */
    public function setAustralianResidentForTaxPurposes($australian_resident_for_tax_purposes)
    {

        $this->container['australian_resident_for_tax_purposes'] = $australian_resident_for_tax_purposes;

        return $this;
    }



    /**
     * Gets residency_status
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\ResidencyStatus|null
     */
    public function getResidencyStatus()
    {
        return $this->container['residency_status'];
    }

    /**
     * Sets residency_status
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\ResidencyStatus|null $residency_status residency_status
     *
     * @return $this
     */
    public function setResidencyStatus($residency_status)
    {

        $this->container['residency_status'] = $residency_status;

        return $this;
    }



    /**
     * Gets tax_free_threshold_claimed
     *
     * @return bool|null
     */
    public function getTaxFreeThresholdClaimed()
    {
        return $this->container['tax_free_threshold_claimed'];
    }

    /**
     * Sets tax_free_threshold_claimed
     *
     * @param bool|null $tax_free_threshold_claimed If tax free threshold claimed. e.g true or false
     *
     * @return $this
     */
    public function setTaxFreeThresholdClaimed($tax_free_threshold_claimed)
    {

        $this->container['tax_free_threshold_claimed'] = $tax_free_threshold_claimed;

        return $this;
    }



    /**
     * Gets tax_offset_estimated_amount
     *
     * @return float|null
     */
    public function getTaxOffsetEstimatedAmount()
    {
        return $this->container['tax_offset_estimated_amount'];
    }

    /**
     * Sets tax_offset_estimated_amount
     *
     * @param float|null $tax_offset_estimated_amount If has tax offset estimated then the tax offset estimated amount. e.g 100
     *
     * @return $this
     */
    public function setTaxOffsetEstimatedAmount($tax_offset_estimated_amount)
    {

        $this->container['tax_offset_estimated_amount'] = $tax_offset_estimated_amount;

        return $this;
    }



    /**
     * Gets has_help_debt
     *
     * @return bool|null
     */
    public function getHasHelpDebt()
    {
        return $this->container['has_help_debt'];
    }

    /**
     * Sets has_help_debt
     *
     * @param bool|null $has_help_debt If employee has HECS or HELP debt. e.g true or false
     *
     * @return $this
     */
    public function setHasHelpDebt($has_help_debt)
    {

        $this->container['has_help_debt'] = $has_help_debt;

        return $this;
    }



    /**
     * Gets has_sfss_debt
     *
     * @return bool|null
     */
    public function getHasSfssDebt()
    {
        return $this->container['has_sfss_debt'];
    }

    /**
     * Sets has_sfss_debt
     *
     * @param bool|null $has_sfss_debt If employee has financial supplement debt. e.g true or false
     *
     * @return $this
     */
    public function setHasSfssDebt($has_sfss_debt)
    {

        $this->container['has_sfss_debt'] = $has_sfss_debt;

        return $this;
    }



    /**
     * Gets has_trade_support_loan_debt
     *
     * @return bool|null
     */
    public function getHasTradeSupportLoanDebt()
    {
        return $this->container['has_trade_support_loan_debt'];
    }

    /**
     * Sets has_trade_support_loan_debt
     *
     * @param bool|null $has_trade_support_loan_debt If employee has trade support loan. e.g true or false
     *
     * @return $this
     */
    public function setHasTradeSupportLoanDebt($has_trade_support_loan_debt)
    {

        $this->container['has_trade_support_loan_debt'] = $has_trade_support_loan_debt;

        return $this;
    }



    /**
     * Gets upward_variation_tax_withholding_amount
     *
     * @return float|null
     */
    public function getUpwardVariationTaxWithholdingAmount()
    {
        return $this->container['upward_variation_tax_withholding_amount'];
    }

    /**
     * Sets upward_variation_tax_withholding_amount
     *
     * @param float|null $upward_variation_tax_withholding_amount If the employee has requested that additional tax be withheld each pay run. e.g 50
     *
     * @return $this
     */
    public function setUpwardVariationTaxWithholdingAmount($upward_variation_tax_withholding_amount)
    {

        $this->container['upward_variation_tax_withholding_amount'] = $upward_variation_tax_withholding_amount;

        return $this;
    }



    /**
     * Gets eligible_to_receive_leave_loading
     *
     * @return bool|null
     */
    public function getEligibleToReceiveLeaveLoading()
    {
        return $this->container['eligible_to_receive_leave_loading'];
    }

    /**
     * Sets eligible_to_receive_leave_loading
     *
     * @param bool|null $eligible_to_receive_leave_loading If the employee is eligible to receive an additional percentage on top of ordinary earnings when they take leave (typically 17.5%). e.g true or false
     *
     * @return $this
     */
    public function setEligibleToReceiveLeaveLoading($eligible_to_receive_leave_loading)
    {

        $this->container['eligible_to_receive_leave_loading'] = $eligible_to_receive_leave_loading;

        return $this;
    }



    /**
     * Gets approved_withholding_variation_percentage
     *
     * @return float|null
     */
    public function getApprovedWithholdingVariationPercentage()
    {
        return $this->container['approved_withholding_variation_percentage'];
    }

    /**
     * Sets approved_withholding_variation_percentage
     *
     * @param float|null $approved_withholding_variation_percentage If the employee has approved withholding variation. e.g (0 - 100)
     *
     * @return $this
     */
    public function setApprovedWithholdingVariationPercentage($approved_withholding_variation_percentage)
    {

        $this->container['approved_withholding_variation_percentage'] = $approved_withholding_variation_percentage;

        return $this;
    }



    /**
     * Gets has_student_startup_loan
     *
     * @return bool|null
     */
    public function getHasStudentStartupLoan()
    {
        return $this->container['has_student_startup_loan'];
    }

    /**
     * Sets has_student_startup_loan
     *
     * @param bool|null $has_student_startup_loan If the employee is eligible for student startup loan rules
     *
     * @return $this
     */
    public function setHasStudentStartupLoan($has_student_startup_loan)
    {

        $this->container['has_student_startup_loan'] = $has_student_startup_loan;

        return $this;
    }



    /**
     * Gets updated_date_utc
     *
     * @return string|null
     */
    public function getUpdatedDateUtc()
    {
        return $this->container['updated_date_utc'];
    }
    public function getUpdatedDateUtcAsDate()
    {
      if ($this->getUpdatedDateUtc() != null) {
        return StringUtil::convertStringToDateTime($this->getUpdatedDateUtc());
      } else {
        throw new Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets updated_date_utc
     *
     * @param string|null $updated_date_utc Last modified timestamp
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            PayrollAuObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


