<?php
/**
 * TimeZone
 *
 * PHP version 5
 *
 * @category Class
 * @package  SidneyAllen\XeroPHP
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

namespace SidneyAllen\XeroPHP\Model;
use \SidneyAllen\XeroPHP\ObjectSerializer;

/**
 * TimeZone Class Doc Comment
 *
 * @category Class
 * @description Timezone specifications
 * @package  SidneyAllen\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TimeZone
{
    /**
     * Possible values of this enum
     */
    const MOROCCOSTANDARDTIME = 'MOROCCOSTANDARDTIME';
    const UTC = 'UTC';
    const GMTSTANDARDTIME = 'GMTSTANDARDTIME';
    const GREENWICHSTANDARDTIME = 'GREENWICHSTANDARDTIME';
    const WEUROPESTANDARDTIME = 'WEUROPESTANDARDTIME';
    const CENTRALEUROPESTANDARDTIME = 'CENTRALEUROPESTANDARDTIME';
    const ROMANCESTANDARDTIME = 'ROMANCESTANDARDTIME';
    const CENTRALEUROPEANSTANDARDTIME = 'CENTRALEUROPEANSTANDARDTIME';
    const WCENTRALAFRICASTANDARDTIME = 'WCENTRALAFRICASTANDARDTIME';
    const NAMIBIASTANDARDTIME = 'NAMIBIASTANDARDTIME';
    const JORDANSTANDARDTIME = 'JORDANSTANDARDTIME';
    const GTBSTANDARDTIME = 'GTBSTANDARDTIME';
    const MIDDLEEASTSTANDARDTIME = 'MIDDLEEASTSTANDARDTIME';
    const EGYPTSTANDARDTIME = 'EGYPTSTANDARDTIME';
    const SYRIASTANDARDTIME = 'SYRIASTANDARDTIME';
    const EEUROPESTANDARDTIME = 'EEUROPESTANDARDTIME';
    const SOUTHAFRICASTANDARDTIME = 'SOUTHAFRICASTANDARDTIME';
    const FLESTANDARDTIME = 'FLESTANDARDTIME';
    const TURKEYSTANDARDTIME = 'TURKEYSTANDARDTIME';
    const ISRAELSTANDARDTIME = 'ISRAELSTANDARDTIME';
    const KALININGRADSTANDARDTIME = 'KALININGRADSTANDARDTIME';
    const LIBYASTANDARDTIME = 'LIBYASTANDARDTIME';
    const ARABICSTANDARDTIME = 'ARABICSTANDARDTIME';
    const ARABSTANDARDTIME = 'ARABSTANDARDTIME';
    const BELARUSSTANDARDTIME = 'BELARUSSTANDARDTIME';
    const RUSSIANSTANDARDTIME = 'RUSSIANSTANDARDTIME';
    const EAFRICASTANDARDTIME = 'EAFRICASTANDARDTIME';
    const IRANSTANDARDTIME = 'IRANSTANDARDTIME';
    const ARABIANSTANDARDTIME = 'ARABIANSTANDARDTIME';
    const AZERBAIJANSTANDARDTIME = 'AZERBAIJANSTANDARDTIME';
    const RUSSIATIMEZONE3 = 'RUSSIATIMEZONE3';
    const MAURITIUSSTANDARDTIME = 'MAURITIUSSTANDARDTIME';
    const GEORGIANSTANDARDTIME = 'GEORGIANSTANDARDTIME';
    const CAUCASUSSTANDARDTIME = 'CAUCASUSSTANDARDTIME';
    const AFGHANISTANSTANDARDTIME = 'AFGHANISTANSTANDARDTIME';
    const WESTASIASTANDARDTIME = 'WESTASIASTANDARDTIME';
    const EKATERINBURGSTANDARDTIME = 'EKATERINBURGSTANDARDTIME';
    const PAKISTANSTANDARDTIME = 'PAKISTANSTANDARDTIME';
    const INDIASTANDARDTIME = 'INDIASTANDARDTIME';
    const SRILANKASTANDARDTIME = 'SRILANKASTANDARDTIME';
    const NEPALSTANDARDTIME = 'NEPALSTANDARDTIME';
    const CENTRALASIASTANDARDTIME = 'CENTRALASIASTANDARDTIME';
    const BANGLADESHSTANDARDTIME = 'BANGLADESHSTANDARDTIME';
    const NCENTRALASIASTANDARDTIME = 'NCENTRALASIASTANDARDTIME';
    const MYANMARSTANDARDTIME = 'MYANMARSTANDARDTIME';
    const SEASIASTANDARDTIME = 'SEASIASTANDARDTIME';
    const NORTHASIASTANDARDTIME = 'NORTHASIASTANDARDTIME';
    const CHINASTANDARDTIME = 'CHINASTANDARDTIME';
    const NORTHASIAEASTSTANDARDTIME = 'NORTHASIAEASTSTANDARDTIME';
    const SINGAPORESTANDARDTIME = 'SINGAPORESTANDARDTIME';
    const WAUSTRALIASTANDARDTIME = 'WAUSTRALIASTANDARDTIME';
    const TAIPEISTANDARDTIME = 'TAIPEISTANDARDTIME';
    const ULAANBAATARSTANDARDTIME = 'ULAANBAATARSTANDARDTIME';
    const TOKYOSTANDARDTIME = 'TOKYOSTANDARDTIME';
    const KOREASTANDARDTIME = 'KOREASTANDARDTIME';
    const YAKUTSKSTANDARDTIME = 'YAKUTSKSTANDARDTIME';
    const CENAUSTRALIASTANDARDTIME = 'CENAUSTRALIASTANDARDTIME';
    const AUSCENTRALSTANDARDTIME = 'AUSCENTRALSTANDARDTIME';
    const EAUSTRALIASTANDARDTIME = 'EAUSTRALIASTANDARDTIME';
    const AUSEASTERNSTANDARDTIME = 'AUSEASTERNSTANDARDTIME';
    const WESTPACIFICSTANDARDTIME = 'WESTPACIFICSTANDARDTIME';
    const TASMANIASTANDARDTIME = 'TASMANIASTANDARDTIME';
    const MAGADANSTANDARDTIME = 'MAGADANSTANDARDTIME';
    const VLADIVOSTOKSTANDARDTIME = 'VLADIVOSTOKSTANDARDTIME';
    const RUSSIATIMEZONE10 = 'RUSSIATIMEZONE10';
    const CENTRALPACIFICSTANDARDTIME = 'CENTRALPACIFICSTANDARDTIME';
    const RUSSIATIMEZONE11 = 'RUSSIATIMEZONE11';
    const NEWZEALANDSTANDARDTIME = 'NEWZEALANDSTANDARDTIME';
    const UTC12 = 'UTC+12';
    const FIJISTANDARDTIME = 'FIJISTANDARDTIME';
    const KAMCHATKASTANDARDTIME = 'KAMCHATKASTANDARDTIME';
    const TONGASTANDARDTIME = 'TONGASTANDARDTIME';
    const SAMOASTANDARDTIME = 'SAMOASTANDARDTIME';
    const LINEISLANDSSTANDARDTIME = 'LINEISLANDSSTANDARDTIME';
    const AZORESSTANDARDTIME = 'AZORESSTANDARDTIME';
    const CAPEVERDESTANDARDTIME = 'CAPEVERDESTANDARDTIME';
    const UTC02 = 'UTC02';
    const MIDATLANTICSTANDARDTIME = 'MIDATLANTICSTANDARDTIME';
    const ESOUTHAMERICASTANDARDTIME = 'ESOUTHAMERICASTANDARDTIME';
    const ARGENTINASTANDARDTIME = 'ARGENTINASTANDARDTIME';
    const SAEASTERNSTANDARDTIME = 'SAEASTERNSTANDARDTIME';
    const GREENLANDSTANDARDTIME = 'GREENLANDSTANDARDTIME';
    const MONTEVIDEOSTANDARDTIME = 'MONTEVIDEOSTANDARDTIME';
    const BAHIASTANDARDTIME = 'BAHIASTANDARDTIME';
    const NEWFOUNDLANDSTANDARDTIME = 'NEWFOUNDLANDSTANDARDTIME';
    const PARAGUAYSTANDARDTIME = 'PARAGUAYSTANDARDTIME';
    const ATLANTICSTANDARDTIME = 'ATLANTICSTANDARDTIME';
    const CENTRALBRAZILIANSTANDARDTIME = 'CENTRALBRAZILIANSTANDARDTIME';
    const SAWESTERNSTANDARDTIME = 'SAWESTERNSTANDARDTIME';
    const PACIFICSASTANDARDTIME = 'PACIFICSASTANDARDTIME';
    const VENEZUELASTANDARDTIME = 'VENEZUELASTANDARDTIME';
    const SAPACIFICSTANDARDTIME = 'SAPACIFICSTANDARDTIME';
    const EASTERNSTANDARDTIME = 'EASTERNSTANDARDTIME';
    const USEASTERNSTANDARDTIME = 'USEASTERNSTANDARDTIME';
    const CENTRALAMERICASTANDARDTIME = 'CENTRALAMERICASTANDARDTIME';
    const CENTRALSTANDARDTIME = 'CENTRALSTANDARDTIME';
    const CENTRALSTANDARDTIME_MEXICO = 'CENTRALSTANDARDTIME(MEXICO)';
    const CANADACENTRALSTANDARDTIME = 'CANADACENTRALSTANDARDTIME';
    const USMOUNTAINSTANDARDTIME = 'USMOUNTAINSTANDARDTIME';
    const MOUNTAINSTANDARDTIME_MEXICO = 'MOUNTAINSTANDARDTIME(MEXICO)';
    const MOUNTAINSTANDARDTIME = 'MOUNTAINSTANDARDTIME';
    const PACIFICSTANDARDTIME_MEXICO = 'PACIFICSTANDARDTIME(MEXICO)';
    const PACIFICSTANDARDTIME = 'PACIFICSTANDARDTIME';
    const ALASKANSTANDARDTIME = 'ALASKANSTANDARDTIME';
    const HAWAIIANSTANDARDTIME = 'HAWAIIANSTANDARDTIME';
    const UTC11 = 'UTC11';
    const DATELINESTANDARDTIME = 'DATELINESTANDARDTIME';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MOROCCOSTANDARDTIME,
            self::UTC,
            self::GMTSTANDARDTIME,
            self::GREENWICHSTANDARDTIME,
            self::WEUROPESTANDARDTIME,
            self::CENTRALEUROPESTANDARDTIME,
            self::ROMANCESTANDARDTIME,
            self::CENTRALEUROPEANSTANDARDTIME,
            self::WCENTRALAFRICASTANDARDTIME,
            self::NAMIBIASTANDARDTIME,
            self::JORDANSTANDARDTIME,
            self::GTBSTANDARDTIME,
            self::MIDDLEEASTSTANDARDTIME,
            self::EGYPTSTANDARDTIME,
            self::SYRIASTANDARDTIME,
            self::EEUROPESTANDARDTIME,
            self::SOUTHAFRICASTANDARDTIME,
            self::FLESTANDARDTIME,
            self::TURKEYSTANDARDTIME,
            self::ISRAELSTANDARDTIME,
            self::KALININGRADSTANDARDTIME,
            self::LIBYASTANDARDTIME,
            self::ARABICSTANDARDTIME,
            self::ARABSTANDARDTIME,
            self::BELARUSSTANDARDTIME,
            self::RUSSIANSTANDARDTIME,
            self::EAFRICASTANDARDTIME,
            self::IRANSTANDARDTIME,
            self::ARABIANSTANDARDTIME,
            self::AZERBAIJANSTANDARDTIME,
            self::RUSSIATIMEZONE3,
            self::MAURITIUSSTANDARDTIME,
            self::GEORGIANSTANDARDTIME,
            self::CAUCASUSSTANDARDTIME,
            self::AFGHANISTANSTANDARDTIME,
            self::WESTASIASTANDARDTIME,
            self::EKATERINBURGSTANDARDTIME,
            self::PAKISTANSTANDARDTIME,
            self::INDIASTANDARDTIME,
            self::SRILANKASTANDARDTIME,
            self::NEPALSTANDARDTIME,
            self::CENTRALASIASTANDARDTIME,
            self::BANGLADESHSTANDARDTIME,
            self::NCENTRALASIASTANDARDTIME,
            self::MYANMARSTANDARDTIME,
            self::SEASIASTANDARDTIME,
            self::NORTHASIASTANDARDTIME,
            self::CHINASTANDARDTIME,
            self::NORTHASIAEASTSTANDARDTIME,
            self::SINGAPORESTANDARDTIME,
            self::WAUSTRALIASTANDARDTIME,
            self::TAIPEISTANDARDTIME,
            self::ULAANBAATARSTANDARDTIME,
            self::TOKYOSTANDARDTIME,
            self::KOREASTANDARDTIME,
            self::YAKUTSKSTANDARDTIME,
            self::CENAUSTRALIASTANDARDTIME,
            self::AUSCENTRALSTANDARDTIME,
            self::EAUSTRALIASTANDARDTIME,
            self::AUSEASTERNSTANDARDTIME,
            self::WESTPACIFICSTANDARDTIME,
            self::TASMANIASTANDARDTIME,
            self::MAGADANSTANDARDTIME,
            self::VLADIVOSTOKSTANDARDTIME,
            self::RUSSIATIMEZONE10,
            self::CENTRALPACIFICSTANDARDTIME,
            self::RUSSIATIMEZONE11,
            self::NEWZEALANDSTANDARDTIME,
            self::UTC12,
            self::FIJISTANDARDTIME,
            self::KAMCHATKASTANDARDTIME,
            self::TONGASTANDARDTIME,
            self::SAMOASTANDARDTIME,
            self::LINEISLANDSSTANDARDTIME,
            self::AZORESSTANDARDTIME,
            self::CAPEVERDESTANDARDTIME,
            self::UTC02,
            self::MIDATLANTICSTANDARDTIME,
            self::ESOUTHAMERICASTANDARDTIME,
            self::ARGENTINASTANDARDTIME,
            self::SAEASTERNSTANDARDTIME,
            self::GREENLANDSTANDARDTIME,
            self::MONTEVIDEOSTANDARDTIME,
            self::BAHIASTANDARDTIME,
            self::NEWFOUNDLANDSTANDARDTIME,
            self::PARAGUAYSTANDARDTIME,
            self::ATLANTICSTANDARDTIME,
            self::CENTRALBRAZILIANSTANDARDTIME,
            self::SAWESTERNSTANDARDTIME,
            self::PACIFICSASTANDARDTIME,
            self::VENEZUELASTANDARDTIME,
            self::SAPACIFICSTANDARDTIME,
            self::EASTERNSTANDARDTIME,
            self::USEASTERNSTANDARDTIME,
            self::CENTRALAMERICASTANDARDTIME,
            self::CENTRALSTANDARDTIME,
            self::CENTRALSTANDARDTIME_MEXICO,
            self::CANADACENTRALSTANDARDTIME,
            self::USMOUNTAINSTANDARDTIME,
            self::MOUNTAINSTANDARDTIME_MEXICO,
            self::MOUNTAINSTANDARDTIME,
            self::PACIFICSTANDARDTIME_MEXICO,
            self::PACIFICSTANDARDTIME,
            self::ALASKANSTANDARDTIME,
            self::HAWAIIANSTANDARDTIME,
            self::UTC11,
            self::DATELINESTANDARDTIME,
        ];
    }
}


