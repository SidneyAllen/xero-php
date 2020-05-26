<?php
/**
 * Phone
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 2.1.6
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * Phone Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Phone implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Phone';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'phone_type' => 'string',
        'phone_number' => 'string',
        'phone_area_code' => 'string',
        'phone_country_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'phone_type' => null,
        'phone_number' => null,
        'phone_area_code' => null,
        'phone_country_code' => null
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
        'phone_type' => 'PhoneType',
        'phone_number' => 'PhoneNumber',
        'phone_area_code' => 'PhoneAreaCode',
        'phone_country_code' => 'PhoneCountryCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'phone_type' => 'setPhoneType',
        'phone_number' => 'setPhoneNumber',
        'phone_area_code' => 'setPhoneAreaCode',
        'phone_country_code' => 'setPhoneCountryCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'phone_type' => 'getPhoneType',
        'phone_number' => 'getPhoneNumber',
        'phone_area_code' => 'getPhoneAreaCode',
        'phone_country_code' => 'getPhoneCountryCode'
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

    const PHONE_TYPE__DEFAULT = 'DEFAULT';
    const PHONE_TYPE_DDI = 'DDI';
    const PHONE_TYPE_MOBILE = 'MOBILE';
    const PHONE_TYPE_FAX = 'FAX';
    const PHONE_TYPE_OFFICE = 'OFFICE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPhoneTypeAllowableValues()
    {
        return [
            self::PHONE_TYPE__DEFAULT,
            self::PHONE_TYPE_DDI,
            self::PHONE_TYPE_MOBILE,
            self::PHONE_TYPE_FAX,
            self::PHONE_TYPE_OFFICE,
        ];
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
        $this->container['phone_type'] = isset($data['phone_type']) ? $data['phone_type'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['phone_area_code'] = isset($data['phone_area_code']) ? $data['phone_area_code'] : null;
        $this->container['phone_country_code'] = isset($data['phone_country_code']) ? $data['phone_country_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPhoneTypeAllowableValues();
        if (!is_null($this->container['phone_type']) && !in_array($this->container['phone_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'phone_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) > 50)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['phone_area_code']) && (mb_strlen($this->container['phone_area_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'phone_area_code', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['phone_country_code']) && (mb_strlen($this->container['phone_country_code']) > 20)) {
            $invalidProperties[] = "invalid value for 'phone_country_code', the character length must be smaller than or equal to 20.";
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
     * Gets phone_type
     *
     * @return string|null
     */
    public function getPhoneType()
    {
        return $this->container['phone_type'];
    }

    /**
     * Sets phone_type
     *
     * @param string|null $phone_type phone_type
     *
     * @return $this
     */
    public function setPhoneType($phone_type)
    {
        $allowedValues = $this->getPhoneTypeAllowableValues();
        if (!is_null($phone_type) && !in_array($phone_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'phone_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['phone_type'] = $phone_type;

        return $this;
    }



    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number max length = 50
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        if (!is_null($phone_number) && (mb_strlen($phone_number) > 50)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling Phone., must be smaller than or equal to 50.');
        }


        $this->container['phone_number'] = $phone_number;

        return $this;
    }



    /**
     * Gets phone_area_code
     *
     * @return string|null
     */
    public function getPhoneAreaCode()
    {
        return $this->container['phone_area_code'];
    }

    /**
     * Sets phone_area_code
     *
     * @param string|null $phone_area_code max length = 10
     *
     * @return $this
     */
    public function setPhoneAreaCode($phone_area_code)
    {
        if (!is_null($phone_area_code) && (mb_strlen($phone_area_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $phone_area_code when calling Phone., must be smaller than or equal to 10.');
        }


        $this->container['phone_area_code'] = $phone_area_code;

        return $this;
    }



    /**
     * Gets phone_country_code
     *
     * @return string|null
     */
    public function getPhoneCountryCode()
    {
        return $this->container['phone_country_code'];
    }

    /**
     * Sets phone_country_code
     *
     * @param string|null $phone_country_code max length = 20
     *
     * @return $this
     */
    public function setPhoneCountryCode($phone_country_code)
    {
        if (!is_null($phone_country_code) && (mb_strlen($phone_country_code) > 20)) {
            throw new \InvalidArgumentException('invalid length for $phone_country_code when calling Phone., must be smaller than or equal to 20.');
        }


        $this->container['phone_country_code'] = $phone_country_code;

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
            AccountingObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


