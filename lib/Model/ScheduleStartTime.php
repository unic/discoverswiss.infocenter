<?php
/**
 * ScheduleStartTime
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
 * Infocenter-TEST
 *
 * OpenAPI spec version: 1.0
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
 * ScheduleStartTime Class Doc Comment
 *
 * @category Class
 * @package  Infocenter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScheduleStartTime implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Schedule_startTime';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ticks' => 'int',
'days' => 'int',
'hours' => 'int',
'milliseconds' => 'int',
'minutes' => 'int',
'seconds' => 'int',
'total_days' => 'double',
'total_hours' => 'double',
'total_milliseconds' => 'double',
'total_minutes' => 'double',
'total_seconds' => 'double'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ticks' => 'int64',
'days' => 'int32',
'hours' => 'int32',
'milliseconds' => 'int32',
'minutes' => 'int32',
'seconds' => 'int32',
'total_days' => 'double',
'total_hours' => 'double',
'total_milliseconds' => 'double',
'total_minutes' => 'double',
'total_seconds' => 'double'    ];

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
        'ticks' => 'ticks',
'days' => 'days',
'hours' => 'hours',
'milliseconds' => 'milliseconds',
'minutes' => 'minutes',
'seconds' => 'seconds',
'total_days' => 'totalDays',
'total_hours' => 'totalHours',
'total_milliseconds' => 'totalMilliseconds',
'total_minutes' => 'totalMinutes',
'total_seconds' => 'totalSeconds'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ticks' => 'setTicks',
'days' => 'setDays',
'hours' => 'setHours',
'milliseconds' => 'setMilliseconds',
'minutes' => 'setMinutes',
'seconds' => 'setSeconds',
'total_days' => 'setTotalDays',
'total_hours' => 'setTotalHours',
'total_milliseconds' => 'setTotalMilliseconds',
'total_minutes' => 'setTotalMinutes',
'total_seconds' => 'setTotalSeconds'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ticks' => 'getTicks',
'days' => 'getDays',
'hours' => 'getHours',
'milliseconds' => 'getMilliseconds',
'minutes' => 'getMinutes',
'seconds' => 'getSeconds',
'total_days' => 'getTotalDays',
'total_hours' => 'getTotalHours',
'total_milliseconds' => 'getTotalMilliseconds',
'total_minutes' => 'getTotalMinutes',
'total_seconds' => 'getTotalSeconds'    ];

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
        $this->container['ticks'] = isset($data['ticks']) ? $data['ticks'] : null;
        $this->container['days'] = isset($data['days']) ? $data['days'] : null;
        $this->container['hours'] = isset($data['hours']) ? $data['hours'] : null;
        $this->container['milliseconds'] = isset($data['milliseconds']) ? $data['milliseconds'] : null;
        $this->container['minutes'] = isset($data['minutes']) ? $data['minutes'] : null;
        $this->container['seconds'] = isset($data['seconds']) ? $data['seconds'] : null;
        $this->container['total_days'] = isset($data['total_days']) ? $data['total_days'] : null;
        $this->container['total_hours'] = isset($data['total_hours']) ? $data['total_hours'] : null;
        $this->container['total_milliseconds'] = isset($data['total_milliseconds']) ? $data['total_milliseconds'] : null;
        $this->container['total_minutes'] = isset($data['total_minutes']) ? $data['total_minutes'] : null;
        $this->container['total_seconds'] = isset($data['total_seconds']) ? $data['total_seconds'] : null;
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
     * Gets ticks
     *
     * @return int
     */
    public function getTicks()
    {
        return $this->container['ticks'];
    }

    /**
     * Sets ticks
     *
     * @param int $ticks ticks
     *
     * @return $this
     */
    public function setTicks($ticks)
    {
        $this->container['ticks'] = $ticks;

        return $this;
    }

    /**
     * Gets days
     *
     * @return int
     */
    public function getDays()
    {
        return $this->container['days'];
    }

    /**
     * Sets days
     *
     * @param int $days days
     *
     * @return $this
     */
    public function setDays($days)
    {
        $this->container['days'] = $days;

        return $this;
    }

    /**
     * Gets hours
     *
     * @return int
     */
    public function getHours()
    {
        return $this->container['hours'];
    }

    /**
     * Sets hours
     *
     * @param int $hours hours
     *
     * @return $this
     */
    public function setHours($hours)
    {
        $this->container['hours'] = $hours;

        return $this;
    }

    /**
     * Gets milliseconds
     *
     * @return int
     */
    public function getMilliseconds()
    {
        return $this->container['milliseconds'];
    }

    /**
     * Sets milliseconds
     *
     * @param int $milliseconds milliseconds
     *
     * @return $this
     */
    public function setMilliseconds($milliseconds)
    {
        $this->container['milliseconds'] = $milliseconds;

        return $this;
    }

    /**
     * Gets minutes
     *
     * @return int
     */
    public function getMinutes()
    {
        return $this->container['minutes'];
    }

    /**
     * Sets minutes
     *
     * @param int $minutes minutes
     *
     * @return $this
     */
    public function setMinutes($minutes)
    {
        $this->container['minutes'] = $minutes;

        return $this;
    }

    /**
     * Gets seconds
     *
     * @return int
     */
    public function getSeconds()
    {
        return $this->container['seconds'];
    }

    /**
     * Sets seconds
     *
     * @param int $seconds seconds
     *
     * @return $this
     */
    public function setSeconds($seconds)
    {
        $this->container['seconds'] = $seconds;

        return $this;
    }

    /**
     * Gets total_days
     *
     * @return double
     */
    public function getTotalDays()
    {
        return $this->container['total_days'];
    }

    /**
     * Sets total_days
     *
     * @param double $total_days total_days
     *
     * @return $this
     */
    public function setTotalDays($total_days)
    {
        $this->container['total_days'] = $total_days;

        return $this;
    }

    /**
     * Gets total_hours
     *
     * @return double
     */
    public function getTotalHours()
    {
        return $this->container['total_hours'];
    }

    /**
     * Sets total_hours
     *
     * @param double $total_hours total_hours
     *
     * @return $this
     */
    public function setTotalHours($total_hours)
    {
        $this->container['total_hours'] = $total_hours;

        return $this;
    }

    /**
     * Gets total_milliseconds
     *
     * @return double
     */
    public function getTotalMilliseconds()
    {
        return $this->container['total_milliseconds'];
    }

    /**
     * Sets total_milliseconds
     *
     * @param double $total_milliseconds total_milliseconds
     *
     * @return $this
     */
    public function setTotalMilliseconds($total_milliseconds)
    {
        $this->container['total_milliseconds'] = $total_milliseconds;

        return $this;
    }

    /**
     * Gets total_minutes
     *
     * @return double
     */
    public function getTotalMinutes()
    {
        return $this->container['total_minutes'];
    }

    /**
     * Sets total_minutes
     *
     * @param double $total_minutes total_minutes
     *
     * @return $this
     */
    public function setTotalMinutes($total_minutes)
    {
        $this->container['total_minutes'] = $total_minutes;

        return $this;
    }

    /**
     * Gets total_seconds
     *
     * @return double
     */
    public function getTotalSeconds()
    {
        return $this->container['total_seconds'];
    }

    /**
     * Sets total_seconds
     *
     * @param double $total_seconds total_seconds
     *
     * @return $this
     */
    public function setTotalSeconds($total_seconds)
    {
        $this->container['total_seconds'] = $total_seconds;

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
