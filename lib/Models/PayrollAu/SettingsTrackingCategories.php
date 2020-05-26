<?php
/**
 * SettingsTrackingCategories
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
 * SettingsTrackingCategories Class Doc Comment
 *
 * @category Class
 * @description Tracking categories for Employees and Timesheets
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SettingsTrackingCategories implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Settings_TrackingCategories';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employee_groups' => '\XeroAPI\XeroPHP\Models\PayrollAu\SettingsTrackingCategoriesEmployeeGroups',
        'timesheet_categories' => '\XeroAPI\XeroPHP\Models\PayrollAu\SettingsTrackingCategoriesTimesheetCategories'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'employee_groups' => null,
        'timesheet_categories' => null
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
        'employee_groups' => 'EmployeeGroups',
        'timesheet_categories' => 'TimesheetCategories'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_groups' => 'setEmployeeGroups',
        'timesheet_categories' => 'setTimesheetCategories'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_groups' => 'getEmployeeGroups',
        'timesheet_categories' => 'getTimesheetCategories'
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
        $this->container['employee_groups'] = isset($data['employee_groups']) ? $data['employee_groups'] : null;
        $this->container['timesheet_categories'] = isset($data['timesheet_categories']) ? $data['timesheet_categories'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets employee_groups
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\SettingsTrackingCategoriesEmployeeGroups|null
     */
    public function getEmployeeGroups()
    {
        return $this->container['employee_groups'];
    }

    /**
     * Sets employee_groups
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\SettingsTrackingCategoriesEmployeeGroups|null $employee_groups employee_groups
     *
     * @return $this
     */
    public function setEmployeeGroups($employee_groups)
    {

        $this->container['employee_groups'] = $employee_groups;

        return $this;
    }



    /**
     * Gets timesheet_categories
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\SettingsTrackingCategoriesTimesheetCategories|null
     */
    public function getTimesheetCategories()
    {
        return $this->container['timesheet_categories'];
    }

    /**
     * Sets timesheet_categories
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\SettingsTrackingCategoriesTimesheetCategories|null $timesheet_categories timesheet_categories
     *
     * @return $this
     */
    public function setTimesheetCategories($timesheet_categories)
    {

        $this->container['timesheet_categories'] = $timesheet_categories;

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


