<?php
/**
 * DsDailyForecast
 *
 * PHP version 5
 *
 * @category Class
 * @package  Infocenter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Infocenter-TEST
 *
 * Infocenter API
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Infocenter\Client\Model;

use \ArrayAccess;
use \Infocenter\Client\ObjectSerializer;

/**
 * DsDailyForecast Class Doc Comment
 *
 * @category Class
 * @package  Infocenter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsDailyForecast implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DailyForecast';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date' => '\DateTime',
'temperature' => '\Infocenter\Client\Model\DsTemperature',
'real_feel_temperature' => '\Infocenter\Client\Model\DsTemperature',
'real_feel_temperature_shade' => '\Infocenter\Client\Model\DsTemperature',
'hours_of_sun' => 'double',
'degree_day_summary' => '\Infocenter\Client\Model\DsDaySummary',
'air_and_pollen' => '\Infocenter\Client\Model\DsAirAndPollen[]',
'day' => '\Infocenter\Client\Model\DsPeriod',
'night' => '\Infocenter\Client\Model\DsPeriod',
'sources' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date' => 'date-time',
'temperature' => null,
'real_feel_temperature' => null,
'real_feel_temperature_shade' => null,
'hours_of_sun' => 'double',
'degree_day_summary' => null,
'air_and_pollen' => null,
'day' => null,
'night' => null,
'sources' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'date' => 'date',
'temperature' => 'temperature',
'real_feel_temperature' => 'realFeelTemperature',
'real_feel_temperature_shade' => 'realFeelTemperatureShade',
'hours_of_sun' => 'hoursOfSun',
'degree_day_summary' => 'degreeDaySummary',
'air_and_pollen' => 'airAndPollen',
'day' => 'day',
'night' => 'night',
'sources' => 'sources'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
'temperature' => 'setTemperature',
'real_feel_temperature' => 'setRealFeelTemperature',
'real_feel_temperature_shade' => 'setRealFeelTemperatureShade',
'hours_of_sun' => 'setHoursOfSun',
'degree_day_summary' => 'setDegreeDaySummary',
'air_and_pollen' => 'setAirAndPollen',
'day' => 'setDay',
'night' => 'setNight',
'sources' => 'setSources'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
'temperature' => 'getTemperature',
'real_feel_temperature' => 'getRealFeelTemperature',
'real_feel_temperature_shade' => 'getRealFeelTemperatureShade',
'hours_of_sun' => 'getHoursOfSun',
'degree_day_summary' => 'getDegreeDaySummary',
'air_and_pollen' => 'getAirAndPollen',
'day' => 'getDay',
'night' => 'getNight',
'sources' => 'getSources'    ];

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
        return self::$swaggerModelName;
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['temperature'] = isset($data['temperature']) ? $data['temperature'] : null;
        $this->container['real_feel_temperature'] = isset($data['real_feel_temperature']) ? $data['real_feel_temperature'] : null;
        $this->container['real_feel_temperature_shade'] = isset($data['real_feel_temperature_shade']) ? $data['real_feel_temperature_shade'] : null;
        $this->container['hours_of_sun'] = isset($data['hours_of_sun']) ? $data['hours_of_sun'] : null;
        $this->container['degree_day_summary'] = isset($data['degree_day_summary']) ? $data['degree_day_summary'] : null;
        $this->container['air_and_pollen'] = isset($data['air_and_pollen']) ? $data['air_and_pollen'] : null;
        $this->container['day'] = isset($data['day']) ? $data['day'] : null;
        $this->container['night'] = isset($data['night']) ? $data['night'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
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
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets temperature
     *
     * @return \Infocenter\Client\Model\DsTemperature
     */
    public function getTemperature()
    {
        return $this->container['temperature'];
    }

    /**
     * Sets temperature
     *
     * @param \Infocenter\Client\Model\DsTemperature $temperature temperature
     *
     * @return $this
     */
    public function setTemperature($temperature)
    {
        $this->container['temperature'] = $temperature;

        return $this;
    }

    /**
     * Gets real_feel_temperature
     *
     * @return \Infocenter\Client\Model\DsTemperature
     */
    public function getRealFeelTemperature()
    {
        return $this->container['real_feel_temperature'];
    }

    /**
     * Sets real_feel_temperature
     *
     * @param \Infocenter\Client\Model\DsTemperature $real_feel_temperature real_feel_temperature
     *
     * @return $this
     */
    public function setRealFeelTemperature($real_feel_temperature)
    {
        $this->container['real_feel_temperature'] = $real_feel_temperature;

        return $this;
    }

    /**
     * Gets real_feel_temperature_shade
     *
     * @return \Infocenter\Client\Model\DsTemperature
     */
    public function getRealFeelTemperatureShade()
    {
        return $this->container['real_feel_temperature_shade'];
    }

    /**
     * Sets real_feel_temperature_shade
     *
     * @param \Infocenter\Client\Model\DsTemperature $real_feel_temperature_shade real_feel_temperature_shade
     *
     * @return $this
     */
    public function setRealFeelTemperatureShade($real_feel_temperature_shade)
    {
        $this->container['real_feel_temperature_shade'] = $real_feel_temperature_shade;

        return $this;
    }

    /**
     * Gets hours_of_sun
     *
     * @return double
     */
    public function getHoursOfSun()
    {
        return $this->container['hours_of_sun'];
    }

    /**
     * Sets hours_of_sun
     *
     * @param double $hours_of_sun hours_of_sun
     *
     * @return $this
     */
    public function setHoursOfSun($hours_of_sun)
    {
        $this->container['hours_of_sun'] = $hours_of_sun;

        return $this;
    }

    /**
     * Gets degree_day_summary
     *
     * @return \Infocenter\Client\Model\DsDaySummary
     */
    public function getDegreeDaySummary()
    {
        return $this->container['degree_day_summary'];
    }

    /**
     * Sets degree_day_summary
     *
     * @param \Infocenter\Client\Model\DsDaySummary $degree_day_summary degree_day_summary
     *
     * @return $this
     */
    public function setDegreeDaySummary($degree_day_summary)
    {
        $this->container['degree_day_summary'] = $degree_day_summary;

        return $this;
    }

    /**
     * Gets air_and_pollen
     *
     * @return \Infocenter\Client\Model\DsAirAndPollen[]
     */
    public function getAirAndPollen()
    {
        return $this->container['air_and_pollen'];
    }

    /**
     * Sets air_and_pollen
     *
     * @param \Infocenter\Client\Model\DsAirAndPollen[] $air_and_pollen air_and_pollen
     *
     * @return $this
     */
    public function setAirAndPollen($air_and_pollen)
    {
        $this->container['air_and_pollen'] = $air_and_pollen;

        return $this;
    }

    /**
     * Gets day
     *
     * @return \Infocenter\Client\Model\DsPeriod
     */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
     * Sets day
     *
     * @param \Infocenter\Client\Model\DsPeriod $day day
     *
     * @return $this
     */
    public function setDay($day)
    {
        $this->container['day'] = $day;

        return $this;
    }

    /**
     * Gets night
     *
     * @return \Infocenter\Client\Model\DsPeriod
     */
    public function getNight()
    {
        return $this->container['night'];
    }

    /**
     * Sets night
     *
     * @param \Infocenter\Client\Model\DsPeriod $night night
     *
     * @return $this
     */
    public function setNight($night)
    {
        $this->container['night'] = $night;

        return $this;
    }

    /**
     * Gets sources
     *
     * @return string[]
     */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
     * Sets sources
     *
     * @param string[] $sources sources
     *
     * @return $this
     */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
