<?php
/**
 * PaymentTermType
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 2.0.0
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PaymentTermType Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentTermType
{
    /**
     * Possible values of this enum
     */
    const DAYSAFTERBILLDATE = 'DAYSAFTERBILLDATE';
    const DAYSAFTERBILLMONTH = 'DAYSAFTERBILLMONTH';
    const OFCURRENTMONTH = 'OFCURRENTMONTH';
    const OFFOLLOWINGMONTH = 'OFFOLLOWINGMONTH';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DAYSAFTERBILLDATE,
            self::DAYSAFTERBILLMONTH,
            self::OFCURRENTMONTH,
            self::OFFOLLOWINGMONTH,
        ];
    }
}


