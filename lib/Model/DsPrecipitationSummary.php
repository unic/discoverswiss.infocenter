<?php
/**
 * DsPrecipitationSummary
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
 * DsPrecipitationSummary Class Doc Comment
 *
 * @category Class
 * @package  Infocenter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsPrecipitationSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PrecipitationSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'past_hour' => '\Infocenter\Client\Model\DsUnitValue',
'past3_hours' => '\Infocenter\Client\Model\DsUnitValue',
'past6_hours' => '\Infocenter\Client\Model\DsUnitValue',
'past9_hours' => '\Infocenter\Client\Model\DsUnitValue',
'past12_hours' => '\Infocenter\Client\Model\DsUnitValue',
'past18_hours' => '\Infocenter\Client\Model\DsUnitValue',
'past24_hours' => '\Infocenter\Client\Model\DsUnitValue'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'past_hour' => null,
'past3_hours' => null,
'past6_hours' => null,
'past9_hours' => null,
'past12_hours' => null,
'past18_hours' => null,
'past24_hours' => null    ];

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
        'past_hour' => 'pastHour',
'past3_hours' => 'past3Hours',
'past6_hours' => 'past6Hours',
'past9_hours' => 'past9Hours',
'past12_hours' => 'past12Hours',
'past18_hours' => 'past18Hours',
'past24_hours' => 'past24Hours'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'past_hour' => 'setPastHour',
'past3_hours' => 'setPast3Hours',
'past6_hours' => 'setPast6Hours',
'past9_hours' => 'setPast9Hours',
'past12_hours' => 'setPast12Hours',
'past18_hours' => 'setPast18Hours',
'past24_hours' => 'setPast24Hours'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'past_hour' => 'getPastHour',
'past3_hours' => 'getPast3Hours',
'past6_hours' => 'getPast6Hours',
'past9_hours' => 'getPast9Hours',
'past12_hours' => 'getPast12Hours',
'past18_hours' => 'getPast18Hours',
'past24_hours' => 'getPast24Hours'    ];

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
        $this->container['past_hour'] = isset($data['past_hour']) ? $data['past_hour'] : null;
        $this->container['past3_hours'] = isset($data['past3_hours']) ? $data['past3_hours'] : null;
        $this->container['past6_hours'] = isset($data['past6_hours']) ? $data['past6_hours'] : null;
        $this->container['past9_hours'] = isset($data['past9_hours']) ? $data['past9_hours'] : null;
        $this->container['past12_hours'] = isset($data['past12_hours']) ? $data['past12_hours'] : null;
        $this->container['past18_hours'] = isset($data['past18_hours']) ? $data['past18_hours'] : null;
        $this->container['past24_hours'] = isset($data['past24_hours']) ? $data['past24_hours'] : null;
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
     * Gets past_hour
     *
     * @return \Infocenter\Client\Model\DsUnitValue
     */
    public function getPastHour()
    {
        return $this->container['past_hour'];
    }

    /**
     * Sets past_hour
     *
     * @param \Infocenter\Client\Model\DsUnitValue $past_hour past_hour
     *
     * @return $this
     */
    public function setPastHour($past_hour)
    {
        $this->container['past_hour'] = $past_hour;

        return $this;
    }

    /**
     * Gets past3_hours
     *
     * @return \Infocenter\Client\Model\DsUnitValue
     */
    public function getPast3Hours()
    {
        return $this->container['past3_hours'];
    }

    /**
     * Sets past3_hours
     *
     * @param \Infocenter\Client\Model\DsUnitValue $past3_hours past3_hours
     *
     * @return $this
     */
    public function setPast3Hours($past3_hours)
    {
        $this->container['past3_hours'] = $past3_hours;

        return $this;
    }

    /**
     * Gets past6_hours
     *
     * @return \Infocenter\Client\Model\DsUnitValue
     */
    public function getPast6Hours()
    {
        return $this->container['past6_hours'];
    }

    /**
     * Sets past6_hours
     *
     * @param \Infocenter\Client\Model\DsUnitValue $past6_hours past6_hours
     *
     * @return $this
     */
    public function setPast6Hours($past6_hours)
    {
        $this->container['past6_hours'] = $past6_hours;

        return $this;
    }

    /**
     * Gets past9_hours
     *
     * @return \Infocenter\Client\Model\DsUnitValue
     */
    public function getPast9Hours()
    {
        return $this->container['past9_hours'];
    }

    /**
     * Sets past9_hours
     *
     * @param \Infocenter\Client\Model\DsUnitValue $past9_hours past9_hours
     *
     * @return $this
     */
    public function setPast9Hours($past9_hours)
    {
        $this->container['past9_hours'] = $past9_hours;

        return $this;
    }

    /**
     * Gets past12_hours
     *
     * @return \Infocenter\Client\Model\DsUnitValue
     */
    public function getPast12Hours()
    {
        return $this->container['past12_hours'];
    }

    /**
     * Sets past12_hours
     *
     * @param \Infocenter\Client\Model\DsUnitValue $past12_hours past12_hours
     *
     * @return $this
     */
    public function setPast12Hours($past12_hours)
    {
        $this->container['past12_hours'] = $past12_hours;

        return $this;
    }

    /**
     * Gets past18_hours
     *
     * @return \Infocenter\Client\Model\DsUnitValue
     */
    public function getPast18Hours()
    {
        return $this->container['past18_hours'];
    }

    /**
     * Sets past18_hours
     *
     * @param \Infocenter\Client\Model\DsUnitValue $past18_hours past18_hours
     *
     * @return $this
     */
    public function setPast18Hours($past18_hours)
    {
        $this->container['past18_hours'] = $past18_hours;

        return $this;
    }

    /**
     * Gets past24_hours
     *
     * @return \Infocenter\Client\Model\DsUnitValue
     */
    public function getPast24Hours()
    {
        return $this->container['past24_hours'];
    }

    /**
     * Sets past24_hours
     *
     * @param \Infocenter\Client\Model\DsUnitValue $past24_hours past24_hours
     *
     * @return $this
     */
    public function setPast24Hours($past24_hours)
    {
        $this->container['past24_hours'] = $past24_hours;

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